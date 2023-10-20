@extends('mainlayout.main')
@section('title', 'Home')


@section('content')
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mx-auto p-5">
                    <h2>Ini halaman home</h2>
                    <h3>Selamat datang</h3>
                    <h3>{{ $intro['nama'] }}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
