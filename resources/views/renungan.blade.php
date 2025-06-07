@extends('layouts.app')

@section('title', $renungan->judul ?? 'Renungan Detail')
<!-- Renungan Detail Page -->
@section('content')
    <div class="container py-5">
        <h1>{{ optional($renungan)->judul }}</h1>
        <p><strong>Ayat:</strong> {{ optional($renungan)->ayat }}</p>
        <p>{{ optional($renungan)->isi }}</p>
        <p><small>Posted by {{ optional(optional($renungan)->user)->name ?? 'Unknown' }}</small></p>
        <a href="{{ route('home') }}" class="btn btn-secondary">Back to Home</a>
    </div>
 @endsection
