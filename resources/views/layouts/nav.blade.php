@php
    $contact = \App\Models\Contact::all()->keyBy('key');
@endphp
<header class="m-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="/src/img/reky-logo.svg" alt="" class="logo">
            </a>
            <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-primary"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end gap-3 flex-column flex-md-row align-items-start align-items-md-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item p-1">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link {{ request()->is('service*') ? 'active' : '' }}" href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link {{ request()->is('portofolio*') ? 'active' : '' }}" href="{{ route('portofolio') }}">Portofolio</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link {{ request()->is('contact*') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <div>
                    <a href="{{ $contact->get('wa-utama')->url }}" target="_blank" class="btn btn-primary btn-nav">Chat Now!</a>
                </div>
            </div>
        </div>
    </nav>
</header>