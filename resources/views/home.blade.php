@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')

<header class="navbar">

    <a href="{{ route('home') }}" class="brand">
        <img src="{{ asset('images/logo.png') }}" alt="HAResume">
    </a>

    <nav>

        @auth

            @if(Auth::user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('user.dashboard') }}">Dashboard</a>
            @endif

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link">Log Keluar</button>
            </form>

        @else

            <a href="{{ route('login') }}">Log Masuk</a>
            <a href="{{ route('register') }}">Daftar</a>

        @endauth

    </nav>

</header>

<div class="top-space"></div>

<section class="hero">

    <div class="hero-image">
        <div class="image-placeholder main-placeholder"></div>
    </div>

    <div class="hero-content">

        <h1>
            Sistem Penjanaan Dokumen Kerjaya (Resume)
            Berasaskan Kecerdasan Buatan (AI)
        </h1>

        <p>
            Jana resume profesional dengan bantuan AI dalam
            beberapa langkah mudah.
        </p>

        @auth

            @if(Auth::user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}" class="start-button">
                    DASHBOARD
                </a>
            @else
                <a href="{{ route('user.dashboard') }}" class="start-button">
                    MULA
                </a>
            @endif

        @else

            <a href="{{ route('login') }}" class="start-button">
                MULA
            </a>

        @endauth

    </div>

</section>

<section class="features">

    <div class="feature-item">
        <div class="image-placeholder"></div>
    </div>

    <div class="feature-item">
        <div class="image-placeholder"></div>
    </div>

    <div class="feature-item">
        <div class="image-placeholder"></div>
    </div>

</section>

@endsection