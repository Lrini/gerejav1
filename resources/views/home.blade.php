@extends('layouts.app')

@section('title', 'Home - GKPKR Kupang')

@section('content')
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Selamat Datang Di GKPKR</h1>
                <p class="lead mb-0">Setiap renungan dan kegiatan akan selalu kami update dari sini. Terimakasih</p>
            </div>
        </div>
    </header>
    <!-- Page renungan-->
    <div class="card mb-3 text-center" >
        <div class="card-body">
        @foreach ($renungans as $renungan)
            <h5 class="card-title">{{ $renungan->judul }}</h5>
            <p class="card-text">{{ $renungan->ayat }}</p>
            <p class="card-text">{{ $renungan->isi }}</p>
            <p class="card-text"><small class="text-body-secondary">{{$renungan->user->name}}</small></p>
<a href="/renungan/{{ $renungan->id }}" class="btn btn-primary">Read more..</a>

        @endforeach
        </div>
    </div>
    <!--page renungan-->
    <!--page kegiatan-->
    <div class="row g-3">
        @foreach ($kegiatans as $kegiatan)
            <div class="col-sm-6 mb-4"> <!-- Added mb-4 for spacing -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $kegiatan->judul }}</h5>
                        <p class="card-text">{{ $kegiatan->deskripsi }}</p>
                        <a href="/kegiatan/{{ $kegiatan->id }}" class="btn btn-primary">Read more..</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--page kegiatan-->
@endsection
