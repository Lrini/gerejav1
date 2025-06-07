@extends('layouts.app')
@section('title', 'Kegiatan - GKPKR Kupang')
@section('content')
<!-- Kegiatan Detail Page -->
    <div class="container py-5">
       <h1>{{ optional($kegiatan)->nama }}</h1>
         <p><strong>Deskripsi :</strong> {{ optional($kegiatan)->deskripsi }}</p>
         <p><strong>Tempat :</strong> {{ optional($kegiatan)->tempat}}</p>
         <p><strong>Tanggal :</strong>{{ optional($kegiatan)->waktu }}</p>
         <p><small>Posted by {{ optional(optional($kegiatan)->user)->name ?? 'Unknown' }}</small></p>
            <a href="{{ route('home') }}" class="btn btn-secondary">Back to Home</a>
    </div>
@endsection
