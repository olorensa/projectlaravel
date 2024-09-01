<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Umur Saya</title>
</head>
<body>
    <h1>Login sesuai umur</h1>
    <hr>
    @if(session('error'))
        <div  style="color: ">
            {{ session('error') }}
        </div>
    @endif


    <div class="allert" style="color"
        <form action="{{route('proses')}}" method="POST">
        @csrf
        <label for="">Berapa Umur Kamu?</label>
        <input type="'number" name="umur" id="umur">
        <button type="submit">Login</button>
    </form>
</body>
</html> -->


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4 m-4">
        <form action ="{{ route('proses') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Berapa Umur Kamu?</label>
                <input type="number" name="umur" id="umur" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Cek Umur</button>
            </div>
        </form>

    </div>
</div>


@endsection