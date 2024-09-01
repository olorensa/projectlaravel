<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $data_karyawan = 'olorensa';
        return view('karyawan.index', compact('data_karyawan'));
    }
}
