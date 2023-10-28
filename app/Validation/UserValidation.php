<?php

namespace App\Validation;

use CodeIgniter\Validation\Rules;

class UserValidation
{
    public static $rules = [
        'nama' => 'required|min_length[3]|max_length[255]',
        'npm' => 'required|exact_length[10]|is_natural',
        'kelas' => 'required|is_natural_no_zero', // Sesuaikan dengan aturan validasi untuk kelas
    ];

    public static $messages = [
        'nama' => [
            'required' => 'Nama harus diisi.',
            'min_length' => 'Panjang nama minimal 3 karakter.',
            'max_length' => 'Panjang nama maksimal 255 karakter.',
        ],
        'npm' => [
            'required' => 'NPM harus diisi.',
            'exact_length' => 'NPM harus terdiri dari 10 karakter.',
            'is_natural' => 'NPM harus berupa angka positif.',
        ],
        'kelas' => [
            'required' => 'Kelas harus dipilih.',
            'is_natural_no_zero' => 'Kelas harus dipilih dari daftar yang tersedia.', // Sesuaikan pesan ini dengan aturan validasi kelas Anda.
        ],
    ];
}