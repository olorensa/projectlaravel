@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <p> Rekap Data Pemasukan</p>
                <a href="{{route('pemasukan.create')}}" class="btn border-primary">Tambah Data</a>
                </div>


                <div class="card-body">
                    <div class="table-responsive"></div>
                    <table class="table table-hover" id="data-table">
                        <thead class="thead-dark">
                            <th>Sumber Pemasukan</th>
                            <th>Tanggal Pemasukan</th>
                            <th>Nominal</th>
                            <th>Pilihan</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->sumber_pemasukan}}</td>
                                <td>{{$item->tanggal_masuk}}</td>
                                <td>{{$item->nominal}}</td>
                                <td>
                                    <a href="{{route('pemasukan.show', $item->id)}}" class="btn border-primary">Detail</a>
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