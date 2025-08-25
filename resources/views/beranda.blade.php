@extends('layouts.app')

@section('title', 'Beranda | Mapala Gaharu')

@section('content')
<header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('../assets/img/bg9.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white">Kami Satu.</h1>
                    <p class="lead mb-4 text-white opacity-8">Salam Lestari!</p>
                    <button type="button" class="btn bg-gradient-success w-auto me-1 mb-0">Gabung Sekarang</button>
                    <!-- <h6 class="text-white mb-2 mt-5">Temukan kami di Politeknik Caltex Riau</h6> -->
                    <div class="d-flex justify-content-center">
                        <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
                        <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
                        <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
                        <a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- -------- END HEADER 7 w/ text and video ------- -->
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <section class="pt-4 pb-6" id="count-stats">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-3">
                    <h1 class="text-gradient text-info" id="state1" countTo="92">0</h1>
                    <h5>Anggota</h5>
                    <p>Anggota terbagi menjadi 3 yaitu Anggota Muda, Biasa, dan Luar Biasa</p>
                </div>
                <div class="col-md-3">
                    <h1 class="text-gradient text-info"><span id="state2" countTo="19">0</span></h1>
                    <h5>Angkatan</h5>
                    <p>Setiap angkatan memiliki keunikan dan kelebihan masing-masing</p>
                </div>
                <div class="col-md-3">
                    <h1 class="text-gradient text-info"><span id="state3" countTo="10">0</span>/30</h1>
                    <h5>Kegiatan</h5>
                    <p>Terdapat 30 kegiatan yang dilaksanakan setiap tahunnya</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-symbols-rounded text-3xl text-gradient text-info mb-3">hiking</i>
                                <h5>Eksplorasi & Petualangan</h5>
                                <p>Menjelajahi keindahan alam, menaklukkan puncak, dan mengarungi jeram sebagai wujud
                                    cinta pada alam bebas.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-symbols-rounded text-3xl text-gradient text-info mb-3">explore</i>
                                <h5>Pendidikan & Latihan</h5>
                                <p>Membekali anggota dengan pengetahuan dan keterampilan dasar untuk bergiat di alam
                                    bebas secara aman dan bertanggung jawab</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mt-4">
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-symbols-rounded text-3xl text-gradient text-info mb-3">handshake</i>
                                <h5>Pengabdian Masyarakat</h5>
                                <p>Turut serta dalam aksi pelestarian lingkungan dan pengabdian kepada masyarakat
                                    sebagai tanggung jawab kami</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i
                                    class="material-symbols-rounded text-3xl text-gradient text-info mb-3">diversity_2</i>
                                <h5>Kekeluargaan</h5>
                                <p>Membangun rasa persaudaraan yang kuat dan tak lekang oleh waktu, di alam maupun di
                                    keseharian</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ms-auto mt-lg-0 mt-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-2 mx-2 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <video poster="{{ asset('storage/videos/bg2.jpg') }}" controls class="img-fluid border-radius-lg">
                                    <source src="{{ asset('storage/videos/MAPALA_GAHARU.mp4') }}" type="video/mp4">
                                    Browser Anda tidak mendukung tag video.
                                </video>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pb-5 position-relative bg-gradient-dark mx-n3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-start mb-5 mt-5">
                    <h3 class="text-white z-index-1 position-relative">Kepengurusan</h3>
                    <p class="text-white opacity-8 mb-0">2025/2026</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card card-profile mt-4">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                <a href="javascript:;">
                                    <div class="p-3 pe-md-0">
                                        <img class="w-100 border-radius-md shadow-lg" src="../assets/img/FotoWisuda.jpg"
                                            alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">
                                    <h5 class="mb-0">M. Baihaqi Maulana</h5>
                                    <h6 class="text-info">Divisi Alam Bebas</h6>
                                    <p class="mb-0">GHR-NIRANKARA-075-22</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card card-profile mt-lg-4 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                <a href="javascript:;">
                                    <div class="p-3 pe-md-0">
                                        <img class="w-100 border-radius-md shadow-lg" src="../assets/img/bruce-mars.jpg"
                                            alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">
                                    <h5 class="mb-0">William Pearce</h5>
                                    <h6 class="text-info">Boss</h6>
                                    <p class="mb-0">Artist is a term applied to a person who engages in an activity
                                        deemed to be an art.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 col-12">
                    <div class="card card-profile mt-4 z-index-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                <a href="javascript:;">
                                    <div class="p-3 pe-md-0">
                                        <img class="w-100 border-radius-md shadow-lg"
                                            src="../assets/img/ivana-squares.jpg" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">
                                    <h5 class="mb-0">Ivana Flow</h5>
                                    <h6 class="text-info">Athlete</h6>
                                    <p class="mb-0">Artist is a term applied to a person who engages in an activity
                                        deemed to be an art.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="card card-profile mt-lg-4 mt-5 z-index-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                <a href="javascript:;">
                                    <div class="p-3 pe-md-0">
                                        <img class="w-100 border-radius-md shadow-lg"
                                            src="../assets/img/ivana-square.jpg" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 my-auto">
                                <div class="card-body ps-lg-0">
                                    <h5 class="mb-0">Marquez Garcia</h5>
                                    <h6 class="text-info">JS Developer</h6>
                                    <p class="mb-0">Artist is a term applied to a person who engages in an activity
                                        deemed to be an art.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <button type="button" class="btn bg-gradient-info btn-sm mb-0">Lainnya</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <section class="my-5 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                    <div class="rotating-card-container">
                        <div
                            class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
                            <div class="front front-background"
                                style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                                <div class="card-body py-7 text-center">
                                    <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Pendidikan dan<br />Latihan Dasar</h3>
                                    <p class="text-white opacity-8">Gerbang utama menuju petualanganmu. Siapkan fisik
                                        dan mentalmu. Sentuh untuk melihat sebaliknya.</p>
                                </div>
                            </div>
                            <div class="back back-background"
                                style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                                <div class="card-body pt-7 text-center">
                                    <h3 class="text-white">Discover More</h3>
                                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping
                                        to full-functional code because all elements are implemented.</p>
                                    <a href="" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Lihat
                                        Kegiatan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                    <div class="rotating-card-container">
                        <div
                            class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
                            <div class="front front-background"
                                style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                                <div class="card-body py-7 text-center">
                                    <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Pendidikan dan<br />Latihan Dasar</h3>
                                    <p class="text-white opacity-8">Gerbang utama menuju petualanganmu. Siapkan fisik
                                        dan mentalmu. Sentuh untuk melihat sebaliknya.</p>
                                </div>
                            </div>
                            <div class="back back-background"
                                style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                                <div class="card-body pt-7 text-center">
                                    <h3 class="text-white">Discover More</h3>
                                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping
                                        to full-functional code because all elements are implemented.</p>
                                    <a href="" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Lihat
                                        Kegiatan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
                    <div class="rotating-card-container">
                        <div
                            class="card card-rotate card-background card-background-mask-primary shadow-dark mt-md-0 mt-5">
                            <div class="front front-background"
                                style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                                <div class="card-body py-7 text-center">
                                    <i class="material-symbols-rounded text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Pendidikan dan<br />Latihan Dasar</h3>
                                    <p class="text-white opacity-8">Gerbang utama menuju petualanganmu. Siapkan fisik
                                        dan mentalmu. Sentuh untuk melihat sebaliknya.</p>
                                </div>
                            </div>
                            <div class="back back-background"
                                style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                                <div class="card-body pt-7 text-center">
                                    <h3 class="text-white">Discover More</h3>
                                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping
                                        to full-functional code because all elements are implemented.</p>
                                    <a href="" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Lihat
                                        Kegiatan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-1">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h2 class="font-weight-bold">Apa Kata Mereka?</h2>
                    <p class="text-muted">Kisah dan pengalaman langsung dari keluarga besar Mapala Gaharu.</p>
                </div>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper mb-4">
                    <div class="swiper-slide">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="../assets/img/FotoWisuda.jpg" alt="Foto Anggota 1"
                                    class="rounded-circle mb-3 mx-auto"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <p class="card-text fst-italic">"Di Gaharu, saya tidak hanya belajar cara bertahan di
                                    alam, tapi juga menemukan arti sejati dari persahabatan dan kepemimpinan..."</p>
                                <hr class="my-4">
                                <h5 class="card-title mb-0">Budi Santoso</h5>
                                <small class="text-muted">Alumni - Angkatan XXII</small>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="../assets/img/FotoWisuda.jpg" alt="Foto Anggota 2"
                                    class="rounded-circle mb-3 mx-auto"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <p class="card-text fst-italic">"Awalnya saya ragu untuk bergabung karena tidak punya
                                    pengalaman mendaki sama sekali. Tapi para senior membimbing dengan sabar..."</p>
                                <hr class="my-4">
                                <h5 class="card-title mb-0">M. Baihaqi Maulana</h5>
                                <small class="text-muted">GHR-NIRANKARA-075-22</small>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="../assets/img/FotoWisuda.jpg" alt="Foto Anggota 3"
                                    class="rounded-circle mb-3 mx-auto"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <p class="card-text fst-italic">"Kegiatan konservasi membuka mata saya tentang
                                    pentingnya menjaga alam. Mapala Gaharu mengajarkan kami untuk menjadi petualang..."
                                </p>
                                <hr class="my-4">
                                <h5 class="card-title mb-0">Agung Wijaya</h5>
                                <small class="text-muted">Alumni - Angkatan XXI</small>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="../assets/img/FotoWisuda.jpg" alt="Foto Anggota 3"
                                    class="rounded-circle mb-3 mx-auto"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                <p class="card-text fst-italic">"Kegiatan konservasi membuka mata saya tentang
                                    pentingnya menjaga alam. Mapala Gaharu mengajarkan kami untuk menjadi petualang..."
                                </p>
                                <hr class="my-4">
                                <h5 class="card-title mb-0">Agung Wijaya</h5>
                                <small class="text-muted">Alumni - Angkatan XXI</small>
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
                    <h3 class="mb-5">Berita Terkini</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image">
                                <img src="../assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
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
                                <img src="../assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
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
                                <img src="../assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
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
                                <img src="../assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
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
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.kepengurusan-slider', {
            // Konfigurasi Swiper
            loop: true, // Membuat slider berputar
            slidesPerView: 1, // Tampilkan 1 slide di layar mobile
            spaceBetween: 30, // Jarak antar slide

            // Tombol Navigasi
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            
            // Breakpoints untuk tampilan responsif
            breakpoints: {
                // Ketika lebar layar >= 992px
                992: {
                    slidesPerView: 2, // Tampilkan 2 slide berdampingan
                    spaceBetween: 30
                }
            }
        });
    });
</script>
@endpush
