<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan halaman Beranda.
     */
    public function beranda()
    {
        return view('beranda');
    }

    /**
     * Menampilkan halaman Kegiatan.
     */
    public function kegiatan()
    {
        return view('kegiatan');
    }

    /**
     * Menampilkan halaman Berita.
     */
    public function berita()
    {
        return view('berita');
    }

    /**
     * Menampilkan halaman Kontak.
     */
    public function kontak()
    {
        return view('kontak-kami');
    }

    // app/Http/Controllers/PageController.php

    // ... (metode lain yang sudah ada)

    /**
     * Menampilkan halaman Profil Organisasi.
     */
    public function profilOrganisasi()
    {
        return view('tentang-kami.profil'); // Kita akan buat view ini
    }

    /**
     * Menampilkan halaman Anggota Organisasi.
     */
    public function anggotaOrganisasi()
    {
        return view('tentang-kami.anggota'); // Kita akan buat view ini
    }

    /**
     * Menampilkan halaman Kepengurusan.
     */
    public function kepengurusan()
    {
        return view('tentang-kami.kepengurusan'); // Kita akan buat view ini
    }

    /**
     * Menampilkan halaman Galeri.
     */
    public function galeri()
    {
        return view('tentang-kami.galeri'); // Kita akan buat view ini
    }
}
