<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('profile', $data);
    }

    public function create()
    {   
        $kelas =[
        [
            'id' => 1,
            'nama_kelas' => 'A'
        ],
        $kelas =[
            'id' => 2,
            'nama_kelas' => 'B'
        ],
        $kelas =[
            'id' => 3,
            'nama_kelas' => 'C'
        ],
        $kelas =[
            'id' => 4,
            'nama_kelas' => 'D'
        ],
    ];

    $data = [
        'kelas' => $kelas,
    ];

        return view('create_user', $data);
    }

    public function store()
    {
        $userModel = new UserModel();

        $rules = [
            'nama' => 'required|min_length[3]|max_length[50]',
            'kelas' => 'required|is_natural_no_zero',
            'npm' => 'required|min_length[4]|is_natural'
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('npm_error', 'Harus Diisi dan Hanya Angka');
            return redirect()->to('/user/create')->withInput()->with('validation', $this->validator);
        }

        $userModel->saveUser([
        'nama' => $this->request->getVar('nama'),
        'id_kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm')
        ];
        return view('profile', $data);
    }
}