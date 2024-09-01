@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <p> Detail Pemasukan</p>
                </div>

                <div class="card-body">
                    <class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>Sumber Pemasukan</th>
                                <td>{{$data->sumber_pemasukan}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Pemasukan</th>
                                <td>{{$data->tanggal_masuk}}</td>
                            </tr>
                            <tr>
                                <th>Nominal</th>
                                <td>{{$data->nominal}}</td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td>{!! ($data->keterangan) !!}</td>
                            </tr>
                            <tr>
                                <th>Bukti Transkasi</th>
                                <td><img src="{{asset('storage/images/transaksi/'.$data->bukti_transaksi)}}" alt="bukti transaksi" width="200px"></td>
                            </tr>
                        </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('pemasukan.edit', $data->id)}}" class="btn btn-warning m-2">Edit</a>

                    <form action="{{route('pemasukan.destroy', $data->id)}}"method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin akan dihapus?')">Hapus</button>
                    </form>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection