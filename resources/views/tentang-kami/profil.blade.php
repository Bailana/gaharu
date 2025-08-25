@extends('layouts.app')

@section('title', 'Profil Organisasi | Mapala Gaharu')

@section('content')
<header>
  <div class="page-header min-height-400" style="background-image: url('../assets/img/city-profile.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-8"></span>
  </div>
</header>
<!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
  <!-- START Testimonials w/ user image & text & info -->
  <section class="py-sm-7 py-5 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="mt-n8 mt-md-n9 d-flex justify-content-center">
            <div class="avatar avatar-xxl position-relative z-index-2"
              style="display: flex; align-items: center; justify-content: center; overflow: hidden; background-color: transparant;">
              <img src="../assets/img/LogoGaharu.png"
                alt="Logo Gaharu"
                loading="lazy"
                style="max-width: 80%; max-height: 80%; object-fit: contain;">
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-xl">
              <div class="card-body text-center">
                <h5 class="card-title-bold mb-2">Visi</h5>
                <p class="card-text">
                  Menjadikan Anggota Mapala Gaharu yang mampu dalam berorganisasi sosial dan alam bebas.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-xl">
              <div class="card-body text-center">
                <h5 class="card-title-bold mb-2">Misi</h5>
                <p class="card-text">
                  Meningkatkan dan mengembangkan sumber daya anggota Mapala Gaharu, tanggap terhadap kelestarian alam, lingkungan, dan sosial.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5 underline-on-scroll">Sejarah Organisasi</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="../assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65 million</a>
              </h5>
              <p>
                Finding temporary housing for your dog should be as easy as
                renting an Airbnb. That’s the idea behind Rover ...
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
              </h5>
              <p>
                If you’ve ever wanted to train a machine learning model
                and integrate it with IFTTT, you now can with ...
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="../assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
              </h5>
              <p>
                If you’ve ever wanted to train a machine learning model
                and integrate it with IFTTT, you now can with ...
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
  // 1. Pilih elemen yang ingin dianimasikan
  const targetElement = document.querySelector('.underline-on-scroll');

  // 2. Buat fungsi callback yang akan dijalankan setiap kali visibilitas elemen berubah
  const callback = (entries, observer) => {
    entries.forEach(entry => {
      // Jika elemen masuk ke viewport (terlihat di layar)
      if (entry.isIntersecting) {
        // Tambahkan class untuk memicu animasi 'muncul'
        entry.target.classList.add('is-visible');
      } 
      // Jika elemen keluar dari viewport (tidak terlihat lagi)
      else {
        // Hapus class agar memicu animasi 'menutup'
        entry.target.classList.remove('is-visible');
      }
    });
  };

  // 3. Konfigurasi observer (bisa disesuaikan)
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5 // Pemicu akan aktif saat 50% elemen terlihat/hilang
  };

  // 4. Buat instance IntersectionObserver baru
  const observer = new IntersectionObserver(callback, options);

  // 5. Mulai amati elemen target
  if (targetElement) {
    observer.observe(targetElement);
  }
});
</script>
@endpush