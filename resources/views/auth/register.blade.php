@extends('layouts.app')

@section('title', 'Daftar Akaun')

@section('content')

<header class="simple-navbar">

    <a href="{{ route('home') }}" class="brand">
        Sistem Penjanaan Dokumen Kerjaya (Resume) Berasaskan
        Kecerdasan Buatan (AI)
    </a>

</header>

<main class="auth-container">

    <div class="auth-card register-card">

        <h1>DAFTAR AKAUN</h1>

        @if ($errors->any())
            <div class="error-message">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST">

            @csrf

            <input
                type="text"
                name="name"
                placeholder="Masukkan Nama"
                value="{{ old('name') }}"
                required
            >

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

            <input
                type="password"
                name="password_confirmation"
                placeholder="Sahkan Kata Laluan"
                required
            >

            <button type="submit" class="auth-button">
                Daftar
            </button>

        </form>

        <p class="auth-footer">
            Sudah mempunyai akaun?
            <a href="{{ route('login') }}">Log Masuk</a>
        </p>

    </div>

</main>

@endsection