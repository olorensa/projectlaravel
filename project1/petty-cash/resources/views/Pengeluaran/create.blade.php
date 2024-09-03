@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Input Data Pengeluaran') }}</div>

                <form action="{{route('pengeluaran.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Pemohon</label>
                        <input type="text" name="pemohon" required class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Kebutuhan</label>
                        <input type="text" name="kebutuhan" required class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Tanggal keluar</label>
                        <input type="date" name="tanggal_pengeluaran" required class="form-control">
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
                        <textarea name="keterangan" required class="form-control"></textarea>
                    </div>
                    <div class="card-footer"></div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
