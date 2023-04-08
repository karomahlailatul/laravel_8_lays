@extends('layouts.main')

@include('layouts.header')
@include('layouts.footer')

@section('title', 'Home')
@section('content')
<div class="container ">
    <div class="d-xl-flex d-lg-flex d-md-grid d-sm-grid">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <h1>title : {{ $title }}</h1>
        </div>
            <h1>content: {{ $content }}</h1>
    </div>
</div>
@endsection