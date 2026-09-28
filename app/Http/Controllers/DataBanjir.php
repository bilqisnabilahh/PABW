<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBanjir extends Controller
{
    public function form() {
        return view('FormBanjir');
    }

    public function proses(Request $requestdata) {
        $namapelapor = $requestdata->input('namapelapor');
        $lokasi = $requestdata->input('lokasi');
        $tinggigenanganair = $requestdata->input('tinggigenanganair');

        return view('hasilBanjir', compact('namapelapor', 'lokasi', 'tinggigenanganair'));
    }
}