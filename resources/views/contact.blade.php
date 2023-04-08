@extends('layouts.main')

@include('layouts.header')
@include('layouts.footer')

@section('title', 'Contact')
@section('content')
<div class="container">
    <div class="grid gap-3 text-center">
        <div class="d-grid align-items-center gap-3">
            <a href="https://www.linkedin.com/in/lailatulkaromah" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-linkedin fa-xl"></i>
                <p>Linkedin</p>
            </a>
            <a href="https://www.instagram.com/lay_k.a" target="_blank" rel="noopener noreferrer" class="mx-3">
                <i class="fab fa-instagram fa-xl"></i>
                <p>Instagram</p>
            </a>
        </div>
    </div>
</div>
@endsection