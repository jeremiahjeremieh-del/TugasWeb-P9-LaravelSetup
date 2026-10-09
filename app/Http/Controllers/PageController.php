<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $name = 'Akbar';
        $courses = ['HTML', 'CSS', 'Laravel'];

        return view('welcome', [
            'name' => $name,
            'courses' => $courses
        ]);
    }

    public function about()
    {
        $tentang = [
            'nama' => 'Akbar Jaya Utama',
            'jurusan' => 'Ilmu Komputer',
            'deskripsi' => 'Halaman ini menjelaskan informasi singkat tentang saya.'
        ];

        return view('about', ['tentang' => $tentang]);
    }

    public function contact()
    {
        $kontak = [
            'email' => 'jerketerimakerja@gmail.com',
            'telepon' => '0812-3456-7890',
            'alamat' => 'Medan, Indonesia'
        ];

        return view('contact', ['kontak' => $kontak]);
    }

    public function hello(string $nama)
    {
        return view('hello', ['nama' => ucfirst($nama)]);
    }
}