<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function showForm (){
        return view('umur.cek_umur');
    }
    public function cekProses(Request $request){
        $request->validate([
            'umur'=>'required|integer|min:1'
        ]);

        $request->session()->put('umur', $request->umur);

        return redirect('home');
    }
}
