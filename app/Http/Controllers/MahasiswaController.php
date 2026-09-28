<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function form() {
        return view('FormMahasiswa');
    }

    public function proses(Request $requestdata) {
        $nim = $requestdata->input('nim');
        $nama = $requestdata->input('nama');
        $prodi = $requestdata->input('prodi');
        $semester = $requestdata->input('semester');

        return view('hasil2', compact('nim', 'nama', 'prodi', 'semester'));
    }
}