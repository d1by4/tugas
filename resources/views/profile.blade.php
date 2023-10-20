@extends('mainlayout.main')
@section('title', 'Profile')

@section('content')

    <h2 class="justify-content-center text-center py-3">Profil Saya</h2>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="">
                <h4>
                    <ol>
                        <li>
                            Nama : {{ $profile['nama'] }}
                        </li>
                        <li>
                            Tanggal Lahir : {{ $profile['tanggal'] }}
                        </li>
                        <li>
                            Asal : {{ $profile['asal'] }}
                        </li>
                        <li>
                            Pendidikan Terakhir : {{ $profile['pendidikan']['pendidikanTerakhir'] }}
                        </li>
                        <li>
                            Pendidikan Saat Ini : {{ $profile['pendidikan']['pendidikanSaatIni'] }}
                        </li>
                    </ol>
                </h4>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
