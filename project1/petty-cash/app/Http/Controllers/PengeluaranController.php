<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
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
        $data = Pengeluaran::all();
        return view('pengeluaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengeluaran.create');
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

        Pengeluaran::create($input);
        return redirect()->route('pengeluaran.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Pengeluaran::find($id);
        return view('pengeluaran.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Pengeluaran::find($id);
        return view('pengeluaran.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = Pengeluaran::find($id);
            if($request->hasFile('bukti_transaksi'))
            {
                $path_simpan='public/images/transaksi';
                $gambar = $request->file('bukti_transaksi');
                $nama = $gambar->getClientOriginalName();
                $path = $request->file('bukti_transaksi')->storeAs($path_simpan, $nama);
                $input['bukti_transaksi'] = $nama;
            }
    
            $data->update($input);
            return redirect()->route('pengeluaran.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Pengeluaran::find($id);
        $data->delete();
        return redirect()->route('pengeluaran.index');
    }
}
