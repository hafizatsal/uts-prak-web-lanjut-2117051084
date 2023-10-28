<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        // Parameter dari URL diambil dan disimpan dalam variabel-variabel yang sesuai.
        // Di sini, $nama akan menjadi "udin", $kelas akan menjadi "b", dan $npm akan menjadi "35564".
        
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];

        // Mengganti view() dengan view('nama_file_view', $data) sesuai dengan file view yang digunakan
        return view('profile', $data);
    }
};