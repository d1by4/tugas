@extends('mainlayout.main')
@section('title', 'Work')

@section('content')
    <h2 class="justify-content-center text-center py-3">Pekerjaan</h2>
    <div class="ps-5">
        <ul>
            <li>
                <h4>
                    Saat ini saya bekerja sebagai {{ $work['work'] }} {{ $work['time'] }} di perusahaan bernama
                    <a href="https://id.timedoor.net/" target="blank" style="color: #10af13;">{{ $work['place'] }}</a>
                </h4>
            </li>
        </ul>

    </div>
@endsection
