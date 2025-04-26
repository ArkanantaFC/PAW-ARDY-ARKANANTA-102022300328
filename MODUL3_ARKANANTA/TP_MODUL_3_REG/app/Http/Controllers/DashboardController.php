<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        // - Buat variabel nama, jam, waktu
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        // - Panggil fungsi getTanggal()
        // - Kirim data ke view 'dashboard' 
        $namasaya = "Arkananta";
        $jam = date('H');
        $salam = match(true) {
            $jam >= 5 && $jam < 12 => "Selamat Pagi",
            $jam >= 12 && $jam < 15 => "Selamat Siang",
            $jam >= 15 && $jam < 18 => "Selamat Sore",
            default => "Selamat Malam",
        };
        $waktuAkses = date('H:i:s');
        $tanggal = $this->getTanggal();
        return view('dashboard', compact('namasaya', 'salam', 'tanggal', 'waktuAkses'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date('d-m-Y');
    }
}
