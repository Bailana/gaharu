@extends('layouts.app')

@section('title', 'Berita | Mapala Gaharu')

@section('content')
<header>
  <div class="page-header min-height-400" style="background-image: url('../assets/img/city-profile.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-8"></span>
  </div>
</header>
<!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
  <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div id="chartdiv"></div>
        </div>
      </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
am5.ready(function() {
  var root = am5.Root.new("chartdiv");

  // Set themes
  // https://www.amcharts.com/docs/v5/concepts/themes/
  root.setThemes([am5themes_Animated.new(root)]);

  // Create the map chart
  // https://www.amcharts.com/docs/v5/charts/map-chart/
  var chart = root.container.children.push(
    am5map.MapChart.new(root, {
      panX: "rotateX",
      panY: "rotateY",
      projection: am5map.geoOrthographic(),
      // Menambahkan rotasi otomatis agar globe berputar
      rotationX: 20,
      rotationY: -40
    })
  );
  
  // --- BARU: Menambahkan Indikator Loading ---
  var loadingLabel = chart.children.push(am5.Label.new(root, {
      text: "Memuat data...",
      x: am5.p50,
      y: am5.p50,
      centerX: am5.p50,
      centerY: am5.p50,
      fontSize: 20,
      fill: am5.color(0x000000)
  }));


  // Menambahkan animasi rotasi globe
  chart.animate({
    key: "rotationY",
    to: 320,
    duration: 80000,
    loops: Infinity
  });


  // Create series for background fill (Water/Ocean)
  // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
  var backgroundSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {}));
  backgroundSeries.mapPolygons.template.setAll({
    // DIUBAH: Mengganti warna perairan menjadi biru
    fill: am5.color(0x67b7dc),
    fillOpacity: 1, // DIUBAH: Membuat warna biru solid
    strokeOpacity: 0
  });

  // Add background polygon
  // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
  backgroundSeries.data.push({
    geometry: am5map.getGeoRectangle(90, 180, -90, -180)
  });

  // Create main polygon series for countries (Land)
  // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
  var polygonSeries = chart.series.push(
    am5map.MapPolygonSeries.new(root, {
      geoJSON: am5geodata_worldLow,
      // DIUBAH: Mengganti warna daratan menjadi hijau
      fill: am5.color(0x84b369) 
    })
  );

  // Create point series for fire markers
  // https://www.amcharts.com/docs/v5/charts/map-chart/map-point-series/
  var firePointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));

  firePointSeries.bullets.push(function() {
    // Menggunakan gambar api sebagai penanda
    var fireCircle = am5.Circle.new(root, {
      radius: 5,
      tooltipText: "Titik Api\nLat: {latitude}\nLon: {longitude}",
      fill: am5.color(0xff0000), // Warna merah untuk api
      stroke: am5.color(0xffa500),
      strokeWidth: 1,
      opacity: 0.7
    });

    // Menambahkan animasi denyut (pulse)
    fireCircle.animate({
      key: "scale",
      from: 1,
      to: 1.5,
      duration: 800,
      easing: am5.ease.out(am5.ease.cubic),
      loops: Infinity
    });
    fireCircle.animate({
      key: "opacity",
      from: 0.7,
      to: 0.2,
      duration: 800,
      easing: am5.ease.out(am5.ease.cubic),
      loops: Infinity
    });

    return am5.Bullet.new(root, {
      sprite: fireCircle
    });
  });

  // --- FUNGSI UNTUK MENGAMBIL DATA KEBAKARAN ---
  async function fetchFireData() {
    // PENTING: Ganti "YOUR_API_KEY" dengan API Key yang Anda dapatkan dari NASA FIRMS
    const apiKey = "641e5310783274500c8032db8aee7b26";

    // DIUBAH: Menyiapkan dua URL untuk dua sumber data satelit yang berbeda
    const viirsUrl = `https://firms.modaps.eosdis.nasa.gov/api/nrt/csv/${apiKey}/VIIRS_SNPP_NRT/world/1`;
    const modisUrl = `https://firms.modaps.eosdis.nasa.gov/api/nrt/csv/${apiKey}/MODIS_NRT/world/1`;

    try {
      console.log("Mengambil data dari NASA FIRMS (VIIRS & MODIS)...");
      
      // Mengambil data dari kedua sumber secara bersamaan
      const [viirsResponse, modisResponse] = await Promise.allSettled([
        fetch(viirsUrl),
        fetch(modisUrl)
      ]);

      let allFireData = [];

      // Proses data VIIRS jika berhasil
      if (viirsResponse.status === 'fulfilled' && viirsResponse.value.ok) {
        const dataCSV = await viirsResponse.value.text();
        const lines = dataCSV.split("\n");
        lines.shift(); // Hapus header
        lines.forEach(line => {
          const columns = line.split(",");
          if (columns.length > 2) {
            allFireData.push({
              geometry: { type: "Point", coordinates: [parseFloat(columns[2]), parseFloat(columns[1])] },
              latitude: parseFloat(columns[1]),
              longitude: parseFloat(columns[2])
            });
          }
        });
      } else {
         console.error("Gagal mengambil data dari VIIRS.");
      }
      
      // Proses data MODIS jika berhasil
      if (modisResponse.status === 'fulfilled' && modisResponse.value.ok) {
        const dataCSV = await modisResponse.value.text();
        const lines = dataCSV.split("\n");
        lines.shift(); // Hapus header
        lines.forEach(line => {
          const columns = line.split(",");
          if (columns.length > 2) {
            allFireData.push({
              geometry: { type: "Point", coordinates: [parseFloat(columns[2]), parseFloat(columns[1])] },
              latitude: parseFloat(columns[1]),
              longitude: parseFloat(columns[2])
            });
          }
        });
      } else {
         console.error("Gagal mengambil data dari MODIS.");
      }
      
      // Sembunyikan indikator loading setelah selesai
      loadingLabel.hide();

      if (allFireData.length > 0) {
        console.log(`Berhasil memuat total ${allFireData.length} titik api dari semua sumber.`);
        firePointSeries.data.setAll(allFireData);
      } else {
        console.warn("Tidak ada titik api yang terdeteksi dari semua sumber data.");
        showError("Titik ada titik api.");
      }

    } catch (error) {
      console.error("Terjadi kesalahan saat mengambil data kebakaran:", error);
      // Sembunyikan indikator loading jika terjadi error
      loadingLabel.hide();
      showError("Terjadi kesalahan saat memproses data kebakaran.");
    }
  }

  // Fungsi untuk menampilkan pesan error di peta
  function showError(message) {
    // Sembunyikan indikator loading sebelum menampilkan error
    loadingLabel.hide();
    var errorLabel = chart.children.push(am5.Label.new(root, {
      text: message,
      x: am5.p50,
      y: am5.p50,
      centerX: am5.p50,
      centerY: am5.p50,
      fontSize: 20,
      fill: am5.color(0xff0000)
    }));
  }

  // Panggil fungsi untuk mengambil data
  fetchFireData();

  // Make stuff animate on load
  chart.appear(1000, 100);

}); // end am5.ready()
</script>
@endpush