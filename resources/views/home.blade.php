@extends('layouts.main')

@include('layouts.header')
@include('layouts.footer')

@section('title', 'Home')
@section('content')
<div class="container ">
    <div class="d-xl-flex d-lg-flex d-md-grid d-sm-grid">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <h1>Hai, Welcome to Homepage Our Site</h1>
        </div>
        <div>
            <p>This sample page has been designed as a homepage, which can be accessed by everyone. Users can easily find what they are looking for when they first visit this website.</p>
        </div>
    </div>
</div>
@endsection