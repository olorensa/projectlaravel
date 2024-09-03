@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <p> Rekap Data Pengeluaran</p>
                <a href="{{route('pengeluaran.create')}}" class="btn border-primary">Tambah Data</a>
                </div>


                <div class="card-body">
                    <div class="table-responsive"></div>
                    <table class="table table-hover" id="data-table">
                        <thead class="thead-dark">
                            <th>Pemohon</th>
                            <th>Kebutuhan</th>
                            <th>Tanggal Pengeluaran</th>
                            <th>Nominal</th>
                            <th>Pilihan</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->pemohon}}</td>
                                <td>{{$item->kebutuhan}}</td>
                                <td>{{$item->tanggal_pengeluaran}}</td>
                                <td>{{$item->nominal}}</td>
                                <td>
                                    <a href="{{route('pengeluaran.show', $item->id)}}" class="btn border-primary">Detail</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection