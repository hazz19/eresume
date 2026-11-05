@extends('layouts.app')

@section('title', 'Dashboard User')

@section('content')

<header class="navbar">

    <a href="{{ route('user.dashboard') }}" class="brand">
        ERESUME - USER
    </a>

    <nav>

        <span class="user-name">
            {{ $user->name }}
        </span>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link">
                Log Keluar
            </button>
        </form>

    </nav>

</header>

<main class="dashboard-container">

    <h1>Dashboard Pengguna</h1>

    <p class="dashboard-description">
        Selamat datang, {{ $user->name }}.
        Jana resume profesional anda menggunakan teknologi AI.
    </p>

    <section class="dashboard-cards">

        <div class="dashboard-card">

            <h3>Penjanaan Resume</h3>

            <p>
                Hasilkan resume profesional dengan bantuan
                kecerdasan buatan (AI).
            </p>

            <a href="#" class="dashboard-button">
                Jana Resume
            </a>

        </div>

        <div class="dashboard-card">

            <h3>Template Resume</h3>

            <p>
                Pilih template resume yang bersesuaian
                dengan keperluan kerjaya anda.
            </p>

            <a href="#" class="dashboard-button">
                Lihat Template
            </a>

        </div>

    </section>

</main>

@endsection