<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{   public $userModel;
    public $kelasModel;
    public function profile($nama = "", $kelas = "", $npm = "")
{
    // Buat variabel array $data dengan data nama, kelas, dan npm
    $data = [
        'nama' => $nama,
        'kelas' => $kelas,
        'npm' => $npm,
        'title' => 'Create User',
    ];

    // Tambahkan $data ke parameter kedua pada fungsi view
    return view('profile', $data);
}

public function show($id){
    $user = $this->userModel->getUser($id);

    $data = [
        'title' => 'Profile',
        'user' => $user,
    ];

    return view('profile', $data);
}

public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];

        return view('list_user', $data);
    }

public function create()
{
    session();
    $kelasModel = new kelasModel();
    $kelas = $this->kelasModel->getKelas();
    $data = [
        'title' => 'Create User',
        'kelas' => $kelas,
    ];

    if (session('validation') != null) {
        $validation = session('validation');
    } else {
        $validation = \Config\Services::validation();
    }
    $data = [
        'kelas' => $kelas,
        'validation' => $validation,
        'title' => 'Create User',
    ];
    return view('create_user', $data);
}

public function edit($id){
    $user = $this->userModel->getUser($id);
    $kelas = $this->kelasModel->getKelas();

    $data = [
        'title' => 'Edit User',
        'user' => $user,
        'kelas' => $kelas,

    ];
    return view ('edit_user', $data);
}

public function store()
{
    $path = 'assets/uploads/img/';

    $foto = $this->request->getFile('foto');

    $nama = $foto->getRandomName();

    if ($foto->move($path, $nama)) {
        $foto = base_url($path . $nama);
    }
    //Validasi input
    if(!$this->validate([
        'nama' => 'required|min_length[3]|max_length[255]',
        'npm' => 'required|min_length[4]|is_natural',
        'kelas' => 'required|is_natural_no_zero',
    ])){
        $validation = \Config\Services::validation(); 
        return redirect()->to('/profile/create')->withInput()->with('validation', $this->validation);
    }

    $userModel = new UserModel();

    $this->userModel->saveUser([
        'nama' => $this->request->getVar('nama'),
        'id_kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
        'foto' => $foto
    ]);

    $data = [
        'nama' => $this->request->getVar('nama'),
        'kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
        'title' => 'Create User',
    ];

    // Setelah penyimpanan data selesai, Anda dapat mengarahkan ke halaman 'profile'.
    return redirect()->to('/user'); // Melakukan redirect ke http://localhost:8080/profile/create
}
}