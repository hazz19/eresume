@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')

<header class="navbar">

    <a href="{{ route('admin.dashboard') }}" class="brand">
        ERESUME - ADMIN
    </a>

    <nav>
        <span class="user-name">{{ Auth::user()->name }}</span>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link">Log Keluar</button>
        </form>
    </nav>

</header>

<main class="dashboard-container">

    <h1>Dashboard Admin</h1>

    <p class="dashboard-description">
        Selamat datang ke sistem pengurusan EResume.
    </p>

    <section class="dashboard-cards">

        <div class="dashboard-card">
            <h3>Pengurusan Pengguna</h3>
            <p>Urus maklumat dan akaun pengguna sistem.</p>
            <h2>{{ $totalUsers }}</h2>
            <span>Jumlah Pengguna</span>
        </div>

        <div class="dashboard-card">
            <h3>Pengurusan Template</h3>
            <p>Urus template resume yang tersedia dalam sistem.</p>
            <span>Pengurusan Template</span>
        </div>

    </section>

</main>

@endsection