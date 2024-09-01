<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $data = Pemasukan::all();
        return view('pemasukan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemasukan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('bukti_transaksi'))
        {
            $path_simpan='public/images/transaksi';
            $gambar = $request->file('bukti_transaksi');
            $nama = $gambar->getClientOriginalName();
            $path = $request->file('bukti_transaksi')->storeAs($path_simpan, $nama);
            $input['bukti_transaksi'] = $nama;
        }

        Pemasukan::create($input);
        return redirect()->route('pemasukan.index');

        // dd($input);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Pemasukan::find($id);
        return view('pemasukan.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Pemasukan::find($id);
        return view('pemasukan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = Pemasukan::find($id);
            if($request->hasFile('bukti_transaksi'))
            {
                $path_simpan='public/images/transaksi';
                $gambar = $request->file('bukti_transaksi');
                $nama = $gambar->getClientOriginalName();
                $path = $request->file('bukti_transaksi')->storeAs($path_simpan, $nama);
                $input['bukti_transaksi'] = $nama;
            }
    
            $data->update($input);
            return redirect()->route('pemasukan.index');
    
            // dd($input);
    
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Pemasukan::find($id);
        $data->delete();
        return redirect()->route('pemasukan.index');
    }
}


