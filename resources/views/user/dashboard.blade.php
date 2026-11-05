
@extends('layouts.app')

@section('title', 'Pilih Template Resume')

@section('content')

<div class="dashboard-page">

    <header class="dashboard-header">

        <a href="{{ route('user.dashboard') }}" class="ha-logo">
            <img src="{{ asset('images/logo.png') }}" alt="HAResume">
        </a>

        <div class="header-actions">

            <span class="profile-name">
                <span class="profile-icon">●</span>
                {{ $user->name }}
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

            <a href="{{ route('user.dashboard') }}" class="sidebar-link">
                <span class="sidebar-icon">⌂</span>
                Dashboard
            </a>

            <a href="{{ route('user.dashboard') }}"
               class="sidebar-link active">
                <span class="sidebar-icon">▤</span>
                Pilih Template
            </a>

            <a href="#" class="sidebar-link disabled-link">
                <span class="sidebar-icon">▧</span>
                Maklumat Resume
            </a>

            <a href="#" class="sidebar-link disabled-link">
                <span class="sidebar-icon">▣</span>
                Resume Saya
            </a>

        </aside>

        <!-- MAIN CONTENT -->
        <main class="dashboard-main">

            <div class="page-heading">

                <div>
                    <h1>Pilih Template Resume</h1>

                    <p>
                        Pilih template yang sesuai dengan gaya
                        dan tujuan kerjaya anda.
                    </p>
                </div>

                <span class="template-count">4 Template</span>

            </div>

            <!-- TEMPLATE LIST -->
            <div class="template-grid">

                <!-- TEMPLATE 1 -->
                <div class="template-card">

                    <div class="template-preview preview-one">

                        <div class="resume-one">

                            <div class="resume-one-header">
                                <div class="resume-avatar"></div>

                                <div>
                                    <div class="resume-name-line"></div>
                                    <div class="resume-small-line"></div>
                                </div>
                            </div>

                            <div class="resume-section-title"></div>
                            <div class="resume-line"></div>
                            <div class="resume-line short"></div>

                            <div class="resume-section-title"></div>
                            <div class="resume-line"></div>
                            <div class="resume-line"></div>
                            <div class="resume-line short"></div>

                            <div class="resume-section-title"></div>
                            <div class="resume-line"></div>
                            <div class="resume-line short"></div>

                        </div>

                    </div>

                    <div class="template-info">
                        <div>
                            <h3>Professional</h3>
                            <p>Reka bentuk formal dan kemas.</p>
                        </div>

                        <button type="button"
                            class="choose-template"
                            onclick="selectTemplate(this, 'Professional')">
                            Pilih Template
                        </button>
                    </div>

                </div>

                <!-- TEMPLATE 2 -->
                <div class="template-card">

                    <div class="template-preview preview-two">

                        <div class="resume-two">

                            <div class="resume-two-sidebar">
                                <div class="resume-two-avatar"></div>
                                <div class="resume-two-heading"></div>
                                <div class="resume-two-line"></div>
                                <div class="resume-two-line"></div>
                                <div class="resume-two-line"></div>
                                <div class="resume-two-heading"></div>
                                <div class="resume-two-line"></div>
                                <div class="resume-two-line"></div>
                            </div>

                            <div class="resume-two-content">
                                <div class="resume-two-name"></div>
                                <div class="resume-two-subtitle"></div>

                                <div class="resume-two-title"></div>
                                <div class="resume-two-text"></div>
                                <div class="resume-two-text"></div>

                                <div class="resume-two-title"></div>
                                <div class="resume-two-text"></div>
                                <div class="resume-two-text"></div>

                                <div class="resume-two-title"></div>
                                <div class="resume-two-text"></div>
                            </div>

                        </div>

                    </div>

                    <div class="template-info">
                        <div>
                            <h3>Modern</h3>
                            <p>Reka bentuk moden dan menarik.</p>
                        </div>

                        <button type="button"
                            class="choose-template"
                            onclick="selectTemplate(this, 'Modern')">
                            Pilih Template
                        </button>
                    </div>

                </div>

                <!-- TEMPLATE 3 -->
                <div class="template-card">

                    <div class="template-preview preview-three">

                        <div class="resume-three">

                            <div class="resume-three-header">
                                <div class="resume-three-name"></div>
                                <div class="resume-three-job"></div>
                            </div>

                            <div class="resume-three-body">

                                <div class="resume-three-left">
                                    <div class="resume-three-title"></div>
                                    <div class="resume-three-line"></div>
                                    <div class="resume-three-line"></div>
                                    <div class="resume-three-line"></div>

                                    <div class="resume-three-title"></div>
                                    <div class="resume-three-line"></div>
                                    <div class="resume-three-line"></div>
                                </div>

                                <div class="resume-three-right">
                                    <div class="resume-three-title"></div>
                                    <div class="resume-three-line"></div>
                                    <div class="resume-three-line"></div>
                                    <div class="resume-three-line"></div>

                                    <div class="resume-three-title"></div>
                                    <div class="resume-three-line"></div>
                                    <div class="resume-three-line"></div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="template-info">
                        <div>
                            <h3>Creative</h3>
                            <p>Reka bentuk kreatif dan unik.</p>
                        </div>

                        <button type="button"
                            class="choose-template"
                            onclick="selectTemplate(this, 'Creative')">
                            Pilih Template
                        </button>
                    </div>

                </div>

                <!-- TEMPLATE 4 -->
                <div class="template-card">

                    <div class="template-preview preview-four">

                        <div class="resume-four">

                            <div class="resume-four-header">
                                <div class="resume-four-name"></div>
                                <div class="resume-four-line"></div>
                            </div>

                            <div class="resume-four-content">

                                <div class="resume-four-title"></div>
                                <div class="resume-four-line"></div>
                                <div class="resume-four-line"></div>

                                <div class="resume-four-title"></div>
                                <div class="resume-four-line"></div>
                                <div class="resume-four-line"></div>
                                <div class="resume-four-line"></div>

                                <div class="resume-four-title"></div>
                                <div class="resume-four-skills">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="template-info">
                        <div>
                            <h3>Minimalist</h3>
                            <p>Reka bentuk ringkas dan elegan.</p>
                        </div>

                        <button type="button"
                            class="choose-template"
                            onclick="selectTemplate(this, 'Minimalist')">
                            Pilih Template
                        </button>
                    </div>

                </div>

            </div>

            <div class="selection-message" id="selectionMessage">
                Sila pilih satu template resume untuk meneruskan.
            </div>

        </main>

    </div>

</div>

<script>
    function selectTemplate(button, templateName) {

        document.querySelectorAll('.choose-template').forEach(function(item) {
            item.textContent = 'Pilih Template';
            item.classList.remove('selected');
        });

        button.textContent = '✓ Dipilih';
        button.classList.add('selected');

        document.getElementById('selectionMessage').textContent =
            'Template ' + templateName + ' telah dipilih.';
    }
</script>

@endsection
