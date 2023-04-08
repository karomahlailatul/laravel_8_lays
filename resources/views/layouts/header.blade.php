@section('header')
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">Lays</span>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a></li>
            <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link btn btn-outline-primary {{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
            <li class="nav-item"><a href="{{ url('/crud') }}" class="nav-link btn btn-outline-primary {{ request()->is('contact') ? 'active' : '' }}">CRUD</a></li>
        </ul>
    </header>
</div>
@endsection