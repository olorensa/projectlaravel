@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Input Data Pengeluaran') }}</div>

                <form action="{{route('pengeluaran.update', $data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Pemohon</label>
                        <input type="text" name="pemohon" value="{{$data->pemohon}}" required class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Kebutuhan</label>
                        <input type="text" name="kebutuhan" value="{{$data->kebutuhan}}" required class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Tanggal Pengeluaran</label>
                        <input type="date" name="tanggal_pengeluaran" value="{{$data->tanggal_pengeluaran}}" required class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Nominal (IDR)</label>
                        <input type="number" name="nominal" value="{{$data->nominal}}" required class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Bukti Transaksi</label>
                        <input type="file" name="bukti_transaksi" value="{{$data->bukti_transaksi}}" class="form-control">
                    </div>
                    <div class="card-body">
                        <div class="form-group p-3"></div>
                        <label>Keterangan</label>
                        <textarea name="keterangan" id="content" class="form-control">
                            {!! ($data->keterangan) !!}
                        </textarea>
                    </div>
                    <div class="card-footer"></div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
