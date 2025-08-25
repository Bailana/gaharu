<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/LogoGaharu.png">
    <link rel="icon" type="image/png" href="../assets/img/LogoGaharu.png">
    <title>
        Masuk | Mapala Gahar
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.1.0" rel="stylesheet" />
</head>

<body class="sign-in-basic">
    <!-- Navbar Transparent -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ route('beranda') }}" rel="tooltip" title="Mapala Gaharu">
                <img src="{{ asset('assets/img/LogoGaharu.png') }}" alt="Logo Gaharu" class="me-2" style="height: 100%; max-height: 40px;">
                Mapala Gaharu
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-8 ps-lg-5" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">

                    <li class="nav-item mx-2 ms-lg-6">
                        {{-- Pastikan baris ini ada dan benar --}}
                        <a class="nav-link ps-2 d-flex align-items-center {{ Route::is('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">
                            <i class="material-symbols-rounded opacity-6 me-2 text-md">home</i>
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex align-items-center cursor-pointer {{ 
                            Route::is('tentang-kami.profil') || 
                            Route::is('tentang-kami.anggota') || 
                            Route::is('tentang-kami.kepengurusan') || 
                            Route::is('tentang-kami.galeri') ? 'active' : '' 
                            }}" id="dropdownMenuTentang" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-symbols-rounded opacity-6 me-2 text-md">view_day</i>
                            Tentang Kami
                            <img src="{{ asset('assets/img/down-arrow-white.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
                            <img src="{{ asset('assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuTentang">
                            <div class="d-none d-lg-block">
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                    Jelajahi Kami
                                </h6>
                                <a href="{{ route('tentang-kami.profil') }}" class="dropdown-item border-radius-md">
                                    <span>Profil Organisasi</span>
                                </a>
                                <a href="{{ route('tentang-kami.anggota') }}" class="dropdown-item border-radius-md">
                                    <span>Anggota Organisasi</span>
                                </a>
                                <a href="{{ route('tentang-kami.kepengurusan') }}" class="dropdown-item border-radius-md">
                                    <span>Kepengurusan</span>
                                </a>
                                <a href="{{ route('tentang-kami.galeri') }}" class="dropdown-item border-radius-md">
                                    <span>Galeri</span>
                                </a>
                            </div>
                            {{-- Versi mobile (opsional tapi bagus) --}}
                            <div class="d-lg-none">
                                <a href="{{ route('tentang-kami.profil') }}" class="dropdown-item border-radius-md">
                                    <span>Profil Organisasi</span>
                                </a>
                                <a href="{{ route('tentang-kami.anggota') }}" class="dropdown-item border-radius-md">
                                    <span>Anggota Organisasi</span>
                                </a>
                                <a href="{{ route('tentang-kami.kepengurusan') }}" class="dropdown-item border-radius-md">
                                    <span>Kepengurusan</span>
                                </a>
                                <a href="{{ route('tentang-kami.galeri') }}" class="dropdown-item border-radius-md">
                                    <span>Galeri</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item mx-2">
                        {{-- Pastikan baris ini ada dan benar --}}
                        <a class="nav-link ps-2 d-flex align-items-center {{ Route::is('kegiatan') ? 'active' : '' }}" href="{{ route('kegiatan') }}">
                            <i class="material-symbols-rounded opacity-6 me-2 text-md">article</i>
                            Kegiatan
                        </a>
                    </li>

                    <li class="nav-item mx-2">
                        {{-- Pastikan baris ini ada dan benar --}}
                        <a class="nav-link ps-2 d-flex align-items-center {{ Route::is('berita') ? 'active' : '' }}" href="{{ route('berita') }}">
                            <i class="material-symbols-rounded opacity-6 me-2 text-md">newspaper</i>
                            Berita
                        </a>
                    </li>

                    <li class="nav-item mx-2">
                        {{-- Pastikan baris ini ada dan benar --}}
                        <a class="nav-link ps-2 d-flex align-items-center {{ Route::is('kontak-kami') ? 'active' : '' }}" href="{{ route('kontak-kami') }}">
                            <i class="material-symbols-rounded opacity-6 me-2 text-md">contact_mail</i>
                            Kontak Kami
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Selamat Datang!</h4>
                                <!-- <p class="text-white text-center mt-2 mb-0">Silahkan masukkan akun anda</p> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" class="text-start">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-check form-switch d-flex align-items-center mb-3">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn bg-gradient-dark w-100 my-3 mb-2">Masuk</button>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn bg-gradient-dark w-100 my-2 mb-2">
                                        <span style="color: #4285F4;">G</span><span style="color: #DB4437;">o</span><span style="color: #F4B400;">o</span><span style="color: #4285F4;">g</span><span style="color: #0F9D58;">l</span><span style="color: #DB4437;">e</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
                <div class="col-12">
                    <div class="text-center">
                        <p class="my-4 text-sm font-weight-normal">
                            All rights reserved. Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script> R.B Dev.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="../assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
</body>

</html>