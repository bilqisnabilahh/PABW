<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporFasilitas extends Controller
{
    public function form() {
        return view('FormFasilitas');
    }

    public function proses(Request $requestdata) {
        $judullaporan = $requestdata->input('judullaporan');
        $lokasi = $requestdata->input('lokasi');
        $deskripsi = $requestdata->input('deskripsi');
        $tanggalkejadian = $requestdata->input('tanggalkejadian');
        $buktifoto = $requestdata->file('buktifoto');

        return view('hasilFasilitas', compact('judullaporan', 'lokasi', 'deskripsi', 'tanggalkejadian', 'buktifoto'));
    }
}