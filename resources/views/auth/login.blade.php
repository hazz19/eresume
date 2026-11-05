@extends('layouts.app')

@section('title', 'Log Masuk')

@section('content')

<header class="simple-navbar">

    <a href="{{ route('home') }}" class="brand">
        Sistem Penjanaan Dokumen Kerjaya (Resume) Berasaskan
        Kecerdasan Buatan (AI)
    </a>

</header>

<main class="auth-container">

    <div class="auth-card">

        <h1>LOG MASUK</h1>

        @if ($errors->any())
            <div class="error-message">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">

            @csrf

            <input
                type="email"
                name="email"
                placeholder="Masukkan Emel"
                value="{{ old('email') }}"
                required
            >

            <input
                type="password"
                name="password"
                placeholder="Masukkan Kata Laluan"
                required
            >

            <button type="submit" class="auth-button">
                Log Masuk
            </button>

        </form>

        <a href="#" class="forgot-password">
            Lupa Kata Laluan?
        </a>

        <div class="separator">
            <span></span>
            <p>Atau</p>
            <span></span>
        </div>

        <a href="{{ route('register') }}" class="auth-button register-button">
            Daftar Akaun
        </a>

        <p class="auth-footer">
            Belum mempunyai akaun?
            <a href="{{ route('register') }}">Daftar Sekarang</a>
        </p>

    </div>

</main>

@endsection