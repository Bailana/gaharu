@extends('layouts.app')

@section('title', 'Kontak Kami | Mapala Gaharu')

@section('content')
<header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('../assets/img/bg9.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white">Kontak Kami!</h1>
                    <div class="d-flex justify-content-center my-3">
                        <a href="https://www.instagram.com/mapalagaharu_pcr/" target="_blank" style="opacity: 0.8;">
                            <img src="{{ asset('assets/img/instagram.png') }}" alt="Instagram" style="width: 26px; height: 26px; filter: invert(100%) brightness(200%);" class="me-4">
                        </a>
                        <a href="https://www.facebook.com/mapalagaharu/" target="_blank" style="opacity: 0.8;">
                            <img src="{{ asset('assets/img/facebook.png') }}" alt="Facebook" style="width: 26px; height: 26px; filter: invert(100%) brightness(200%);" class="me-4">
                        </a>
                        <a href="mailto:mapalagaharu@pcr.ac.id" style="opacity: 0.8;">
                            <img src="{{ asset('assets/img/email.png') }}" alt="Email" style="width: 26px; height: 26px; filter: invert(100%) brightness(200%);">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- -------- END HEADER 7 w/ text and video ------- -->
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <section class="my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <h4>Kirim Pesan & Saran</h4>
                    <p class="mb-4">
                        Punya ide, pertanyaan, atau masukan untuk kami?
                        Jangan ragu untuk menyampaikannya melalui formulir di bawah ini.
                    </p>

                    <form action="#" method="POST" role="form" id="contact-form">
                        <div class="card-body">
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label">Nama Anda</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label">Email Anda</label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="input-group input-group-outline mb-4">
                                <textarea type="message" placeholder="Tuliskan Pesan Anda"class="form-control" style="height: 100px"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn bg-gradient-info w-100">Kirim Pesan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-5 ms-auto">
                    <div class="position-relative">
                        <div class="rounded-3 shadow-lg">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.65825727956!2d101.42063387588362!3d0.5701834633729938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a9a43a4a5555%3A0x8a1851e3c59a16f2!2sPoliteknik%20Caltex%20Riau!5e0!3m2!1sen!2sid!4v1723843588972!5m2!1sen!2sid"
                                width="100%"
                                height="400"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection