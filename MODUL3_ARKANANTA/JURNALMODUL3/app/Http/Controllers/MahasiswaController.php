<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
            $mahasiswa = (object) [
                'nama' => 'Kareem',
                'nim' =>  '102022300328',
                'email' => "direktoratasus@gmail.com",
                'jurusan' => "SISTEM INFORMASI",
                'fakultas' => "FRI",
                'foto' => 'images/anjay.jpg'
            ];
    
            return view('profil', ['mahasiswa' => $mahasiswa]);

    }
}
