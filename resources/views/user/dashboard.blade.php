@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="dashboard-page">

    <header class="dashboard-header">

        <a href="{{ route('user.dashboard') }}" class="ha-logo">
            <img src="{{ asset('images/logo.png') }}" alt="HAResume">
        </a>

        <div class="header-actions">

            <span class="profile-name">
                <span class="profile-icon">●</span>
                {{ Auth::user()->name }}
            </span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="logout-button">
                    Log Keluar
                </button>
            </form>

        </div>

    </header>


    <div class="dashboard-layout">

        <!-- SIDEBAR -->

        <aside class="dashboard-sidebar">

            <a href="{{ route('user.dashboard') }}"
               class="sidebar-link active">

                <span class="sidebar-icon">⌂</span>
                Dashboard

            </a>


            <a href="{{ route('user.templates') }}"
               class="sidebar-link">

                <span class="sidebar-icon">▤</span>
                Pilih Template

            </a>


            <a href="#"
               class="sidebar-link disabled-link">

                <span class="sidebar-icon">▧</span>
                Maklumat Resume

            </a>


            <a href="#"
               class="sidebar-link disabled-link">

                <span class="sidebar-icon">▣</span>
                Resume Saya

            </a>

        </aside>


        <!-- MAIN CONTENT -->

        <main class="dashboard-main">

            <div class="page-heading">

                <div>

                    <h1>
                        Selamat Datang, {{ Auth::user()->name }}!
                    </h1>

                    <p>
                        Urus dan bina resume profesional anda dengan mudah.
                    </p>

                </div>

            </div>


            <!-- WELCOME CARD -->

            <div class="user-welcome-card">

                <div class="user-welcome-content">

                    <span class="user-welcome-label">
                        HDResume
                    </span>

                    <h2>
                        Bina Resume Profesional Anda
                    </h2>

                    <p>
                        Pilih template yang sesuai, masukkan maklumat diri
                        dan hasilkan resume yang lebih kemas dengan bantuan AI.
                    </p>

                    <a href="{{ route('user.templates') }}"
                       class="user-primary-button">

                        Mula Bina Resume
                        <span>→</span>

                    </a>

                </div>


                <div class="user-welcome-preview">

                    <div class="mini-resume">

                        <div class="mini-resume-top">

                            <div class="mini-avatar"></div>

                            <div class="mini-name">

                                <div></div>
                                <span></span>

                            </div>

                        </div>


                        <div class="mini-title"></div>

                        <div class="mini-line"></div>
                        <div class="mini-line short"></div>


                        <div class="mini-title"></div>

                        <div class="mini-line"></div>
                        <div class="mini-line"></div>
                        <div class="mini-line short"></div>

                    </div>

                </div>

            </div>


            <!-- RINGKASAN -->

            <div class="page-heading dashboard-subheading">

                <div>

                    <h2>Ringkasan</h2>

                    <p>
                        Ringkasan aktiviti resume anda.
                    </p>

                </div>

            </div>


            <div class="user-stat-grid">

                <div class="user-stat-card">

                    <div class="user-stat-icon">
                        ▤
                    </div>

                    <div>

                        <span>Resume Saya</span>

                        <strong>
                            {{ $resumeCount ?? 0 }}
                        </strong>

                    </div>

                </div>


                <div class="user-stat-card">

                    <div class="user-stat-icon">
                        ▣
                    </div>

                    <div>

                        <span>Template</span>

                        <strong>
                            {{ $templateCount ?? 4 }}
                        </strong>

                    </div>

                </div>


                <div class="user-stat-card">

                    <div class="user-stat-icon">
                        ✓
                    </div>

                    <div>

                        <span>Status Resume</span>

                        <strong class="status-text">

                            @if(($resumeCount ?? 0) > 0)
                                Tersedia
                            @else
                                Belum Dibina
                            @endif

                        </strong>

                    </div>

                </div>

            </div>


            <!-- AKTIVITI -->

            <div class="user-dashboard-grid">


                <!-- MULAKAN RESUME -->

                <div class="user-dashboard-card">

                    <div class="user-card-heading">

                        <div>

                            <h2>Mulakan Sekarang</h2>

                            <p>
                                Ikuti langkah mudah untuk menghasilkan resume.
                            </p>

                        </div>

                    </div>


                    <div class="resume-step-list">


                        <div class="user-resume-step">

                            <div class="user-step-number">
                                1
                            </div>

                            <div>

                                <h3>Pilih Template</h3>

                                <p>
                                    Pilih template resume yang sesuai
                                    dengan gaya anda.
                                </p>

                            </div>

                        </div>


                        <div class="user-resume-step">

                            <div class="user-step-number">
                                2
                            </div>

                            <div>

                                <h3>Isi Maklumat</h3>

                                <p>
                                    Masukkan maklumat peribadi,
                                    pendidikan dan kemahiran.
                                </p>

                            </div>

                        </div>


                        <div class="user-resume-step">

                            <div class="user-step-number">
                                3
                            </div>

                            <div>

                                <h3>Jana Resume</h3>

                                <p>
                                    Hasilkan resume dengan bantuan
                                    AI.
                                </p>

                            </div>

                        </div>


                    </div>


                    <a href="{{ route('user.templates') }}"
                       class="user-secondary-button">

                        Pilih Template
                        <span>→</span>

                    </a>

                </div>


                <!-- RESUME TERKINI -->

                <div class="user-dashboard-card">

                    <div class="user-card-heading">

                        <div>

                            <h2>Resume Terkini</h2>

                            <p>
                                Resume yang anda hasilkan.
                            </p>

                        </div>

                    </div>


                    @if(isset($recentResume) && $recentResume)

                        <div class="user-recent-resume">

                            <div class="user-recent-icon">
                                ▤
                            </div>

                            <div class="user-recent-info">

                                <h3>
                                    {{ $recentResume->name ?? 'Resume Saya' }}
                                </h3>

                                <p>
                                    Dikemaskini baru-baru ini
                                </p>

                            </div>

                            <a href="#"
                               class="user-view-button">

                                Lihat

                            </a>

                        </div>

                    @else

                        <div class="user-empty-resume">

                            <div class="user-empty-icon">
                                +
                            </div>

                            <h3>
                                Belum ada resume
                            </h3>

                            <p>
                                Anda belum menghasilkan sebarang resume.
                            </p>

                            <a href="{{ route('user.templates') }}"
                               class="user-empty-button">

                                Pilih Template

                            </a>

                        </div>

                    @endif

                </div>


            </div>

        </main>

    </div>

</div>

@endsection