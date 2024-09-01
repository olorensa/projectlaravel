@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Input Data Pemasukan') }}</div>

                <form action="{{route('pemasukan.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Sumber Dana/Pemasukan</label>
                        <input type="text" name="sumber_pemasukan" required class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Tanggal masuk</label>
                        <input type="date" name="tanggal_masuk" required class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Nominal (IDR)</label>
                        <input type="number" name="nominal" required class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Bukti Transaksi</label>
                        <input type="file" name="bukti_transaksi" required class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Keterangan</label>
                        <textarea name="keterangan" id="content" class="form-control"></textarea>
                    </div>
                    <div class="card-footer"></div>
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
