@extends('layouts.main')

@include('layouts.header')
@include('layouts.footer')

@section('title', 'About')
@section('content')
<div class="container">
    <div class="d-grid gap-2 text-center">
        <div class="d-flex justify-content-center">
            <img class="w-25 rounded" src="{{ asset('assets/img/photo.jpg') }}" alt="photo">
        </div>
        <h1>I am Lailatul Karomah</h1>
        <h5>Front End Developer at PT KODE INOVASI TEKNOLOGI</h5>
    </div>
</div>
@endsection