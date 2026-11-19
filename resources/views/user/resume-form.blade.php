@extends('layouts.app')

@section('title', 'Maklumat Resume')

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

        <aside class="dashboard-sidebar">

            <a href="{{ route('user.dashboard') }}" class="sidebar-link">
                <span class="sidebar-icon">⌂</span>
                Dashboard
            </a>

            <a href="{{ route('user.templates') }}" class="sidebar-link">
                <span class="sidebar-icon">▤</span>
                Pilih Template
            </a>

            <a href="#" class="sidebar-link active">
                <span class="sidebar-icon">▧</span>
                Maklumat Resume
            </a>

            <a href="#" class="sidebar-link disabled-link">
                <span class="sidebar-icon">▣</span>
                Resume Saya
            </a>

        </aside>


        <main class="dashboard-main">

            <div class="page-heading">

                <div>
                    <h1>Maklumat Resume</h1>

                    <p>
                        Isi maklumat anda untuk menghasilkan resume profesional.
                    </p>
                </div>

                <span class="template-count">
                    {{ ucfirst(str_replace('-', ' ', $template)) }}
                </span>

            </div>


            <form action="#" method="POST" enctype="multipart/form-data">

                @csrf


                <!-- 01 MAKLUMAT PERIBADI -->

                <div class="resume-form-card">

                    <div class="form-section">

                        <div class="form-section-heading">

                            <span class="form-number">01</span>

                            <div>
                                <h2>Maklumat Peribadi</h2>
                                <p>Masukkan maklumat asas diri anda.</p>
                            </div>

                        </div>


                        <div class="form-grid">

                            <div class="form-group full-width">

                                <label for="name">
                                    Nama Penuh
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ $user->name }}"
                                    placeholder="Masukkan nama penuh"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label for="email">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ $user->email }}"
                                    placeholder="nama@email.com"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label for="phone">
                                    Nombor Telefon
                                </label>

                                <input
                                    type="text"
                                    id="phone"
                                    name="phone"
                                    placeholder="Contoh: 012-3456789"
                                >

                            </div>


                            <div class="form-group">

                                <label for="location">
                                    Lokasi
                                </label>

                                <input
                                    type="text"
                                    id="location"
                                    name="location"
                                    placeholder="Contoh: Kuala Lumpur, Malaysia"
                                >

                            </div>


                            <div class="form-group">

                                <label for="job_title">
                                    Jawatan Yang Dipohon
                                </label>

                                <input
                                    type="text"
                                    id="job_title"
                                    name="job_title"
                                    placeholder="Contoh: Web Designer"
                                >

                            </div>


                            <div class="form-group full-width">

                                <label for="photo">
                                    Gambar Profil
                                </label>

                                <input
                                    type="file"
                                    id="photo"
                                    name="photo"
                                    accept="image/png,image/jpeg,image/jpg"
                                >

                                <small class="form-help">
                                    Format JPG atau PNG. Saiz maksimum 2MB.
                                </small>

                            </div>

                        </div>

                    </div>


                    <!-- 02 PROFIL DIRI -->

                    <div class="form-section">

                        <div class="form-section-heading">

                            <span class="form-number">02</span>

                            <div>
                                <h2>Profil Diri</h2>
                                <p>Ceritakan tentang diri dan matlamat kerjaya anda.</p>
                            </div>

                        </div>


                        <div class="form-group">

                            <label for="summary">
                                Tentang Saya
                            </label>

                            <textarea
                                id="summary"
                                name="summary"
                                rows="6"
                                placeholder="Contoh: Saya merupakan seorang pelajar yang berminat dalam bidang pembangunan web dan teknologi..."
                            ></textarea>

                            <small class="form-help">
                                AI boleh membantu memperbaiki ayat profil anda.
                            </small>

                        </div>

                    </div>


                    <!-- 03 PENDIDIKAN -->

                    <div class="form-section">

                        <div class="form-section-heading">

                            <span class="form-number">03</span>

                            <div>
                                <h2>Pendidikan</h2>
                                <p>Masukkan latar belakang pendidikan anda.</p>
                            </div>

                        </div>


                        <div id="education-container">

                            <div class="dynamic-item">

                                <div class="dynamic-item-header">

                                    <strong>Pendidikan 1</strong>

                                </div>


                                <div class="form-grid">

                                    <div class="form-group">

                                        <label>Institusi</label>

                                        <input
                                            type="text"
                                            name="education[0][institution]"
                                            placeholder="Nama institusi"
                                        >

                                    </div>


                                    <div class="form-group">

                                        <label>Program / Kelulusan</label>

                                        <input
                                            type="text"
                                            name="education[0][qualification]"
                                            placeholder="Contoh: Diploma Teknologi Komputeran"
                                        >

                                    </div>


                                    <div class="form-group">

                                        <label>Tahun Mula</label>

                                        <input
                                            type="text"
                                            name="education[0][start_year]"
                                            placeholder="2024"
                                        >

                                    </div>


                                    <div class="form-group">

                                        <label>Tahun Tamat</label>

                                        <input
                                            type="text"
                                            name="education[0][end_year]"
                                            placeholder="2027"
                                        >

                                    </div>


                                    <div class="form-group full-width">

                                        <label>Pencapaian / Keputusan</label>

                                        <input
                                            type="text"
                                            name="education[0][achievement]"
                                            placeholder="Contoh: CGPA 3.50"
                                        >

                                    </div>

                                </div>

                            </div>

                        </div>


                        <button
                            type="button"
                            class="add-item-button"
                            onclick="addEducation()">

                            + Tambah Pendidikan

                        </button>

                    </div>


                    <!-- 04 PENGALAMAN KERJA -->

                    <div class="form-section">

                        <div class="form-section-heading">

                            <span class="form-number">04</span>

                            <div>
                                <h2>Pengalaman Kerja</h2>
                                <p>Masukkan pengalaman kerja atau latihan industri.</p>
                            </div>

                        </div>


                        <div id="experience-container">

                            <div class="dynamic-item">

                                <div class="dynamic-item-header">

                                    <strong>Pengalaman 1</strong>

                                </div>


                                <div class="form-grid">

                                    <div class="form-group">

                                        <label>Jawatan</label>

                                        <input
                                            type="text"
                                            name="experience[0][position]"
                                            placeholder="Contoh: Web Designer"
                                        >

                                    </div>


                                    <div class="form-group">

                                        <label>Nama Syarikat</label>

                                        <input
                                            type="text"
                                            name="experience[0][company]"
                                            placeholder="Nama syarikat"
                                        >

                                    </div>


                                    <div class="form-group">

                                        <label>Tarikh Mula</label>

                                        <input
                                            type="text"
                                            name="experience[0][start_date]"
                                            placeholder="Contoh: Januari 2025"
                                        >

                                    </div>


                                    <div class="form-group">

                                        <label>Tarikh Tamat</label>

                                        <input
                                            type="text"
                                            name="experience[0][end_date]"
                                            placeholder="Contoh: Mac 2025 / Sekarang"
                                        >

                                    </div>


                                    <div class="form-group full-width">

                                        <label>Penerangan Kerja</label>

                                        <textarea
                                            name="experience[0][description]"
                                            rows="5"
                                            placeholder="Terangkan tanggungjawab dan pengalaman anda..."
                                        ></textarea>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <button
                            type="button"
                            class="add-item-button"
                            onclick="addExperience()">

                            + Tambah Pengalaman

                        </button>

                    </div>


                    <!-- 05 KEMAHIRAN -->

                    <div class="form-section">

                        <div class="form-section-heading">

                            <span class="form-number">05</span>

                            <div>
                                <h2>Kemahiran</h2>
                                <p>Masukkan kemahiran yang anda kuasai.</p>
                            </div>

                        </div>


                        <div class="form-group">

                            <label for="skills">
                                Kemahiran
                            </label>

                            <textarea
                                id="skills"
                                name="skills"
                                rows="5"
                                placeholder="Contoh: HTML, CSS, JavaScript, PHP, Laravel, MySQL"
                            ></textarea>

                            <small class="form-help">
                                Asingkan setiap kemahiran dengan koma.
                            </small>

                        </div>

                    </div>


                    <!-- 06 PROJEK -->

                    <div class="form-section">

                        <div class="form-section-heading">

                            <span class="form-number">06</span>

                            <div>
                                <h2>Projek</h2>
                                <p>Masukkan projek yang pernah anda hasilkan.</p>
                            </div>

                        </div>


                        <div id="project-container">

                            <div class="dynamic-item">

                                <div class="dynamic-item-header">

                                    <strong>Projek 1</strong>

                                </div>


                                <div class="form-grid">

                                    <div class="form-group">

                                        <label>Nama Projek</label>

                                        <input
                                            type="text"
                                            name="projects[0][name]"
                                            placeholder="Contoh: Sistem Resume AI"
                                        >

                                    </div>


                                    <div class="form-group">

                                        <label>Teknologi Digunakan</label>

                                        <input
                                            type="text"
                                            name="projects[0][technology]"
                                            placeholder="Contoh: Laravel, MySQL, JavaScript"
                                        >

                                    </div>


                                    <div class="form-group full-width">

                                        <label>Penerangan Projek</label>

                                        <textarea
                                            name="projects[0][description]"
                                            rows="4"
                                            placeholder="Terangkan projek yang telah anda hasilkan..."
                                        ></textarea>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <button
                            type="button"
                            class="add-item-button"
                            onclick="addProject()">

                            + Tambah Projek

                        </button>

                    </div>


                    <!-- 07 SIJIL DAN PENCAPAIAN -->

                    <div class="form-section">

                        <div class="form-section-heading">

                            <span class="form-number">07</span>

                            <div>
                                <h2>Sijil & Pencapaian</h2>
                                <p>Masukkan sijil, anugerah atau pencapaian anda.</p>
                            </div>

                        </div>


                        <div id="achievement-container">

                            <div class="dynamic-item">

                                <div class="dynamic-item-header">

                                    <strong>Pencapaian 1</strong>

                                </div>


                                <div class="form-grid">

                                    <div class="form-group">

                                        <label>Nama Sijil / Pencapaian</label>

                                        <input
                                            type="text"
                                            name="achievements[0][name]"
                                            placeholder="Contoh: Sijil Kompetensi Digital"
                                        >

                                    </div>


                                    <div class="form-group">

                                        <label>Penganjur</label>

                                        <input
                                            type="text"
                                            name="achievements[0][organization]"
                                            placeholder="Nama organisasi"
                                        >

                                    </div>


                                    <div class="form-group">

                                        <label>Tahun</label>

                                        <input
                                            type="text"
                                            name="achievements[0][year]"
                                            placeholder="2026"
                                        >

                                    </div>

                                </div>

                            </div>

                        </div>


                        <button
                            type="button"
                            class="add-item-button"
                            onclick="addAchievement()">

                            + Tambah Sijil / Pencapaian

                        </button>

                    </div>


                    <!-- 08 BAHASA -->

                    <div class="form-section">

                        <div class="form-section-heading">

                            <span class="form-number">08</span>

                            <div>
                                <h2>Bahasa</h2>
                                <p>Masukkan bahasa yang anda boleh gunakan.</p>
                            </div>

                        </div>


                        <div class="form-group">

                            <label for="languages">
                                Bahasa
                            </label>

                            <textarea
                                id="languages"
                                name="languages"
                                rows="4"
                                placeholder="Contoh: Bahasa Melayu - Baik, Bahasa Inggeris - Baik"
                            ></textarea>

                        </div>

                    </div>


                    <!-- 09 PAUTAN -->

                    <div class="form-section">

                        <div class="form-section-heading">

                            <span class="form-number">09</span>

                            <div>
                                <h2>Pautan Profesional</h2>
                                <p>Masukkan pautan portfolio atau akaun profesional.</p>
                            </div>

                        </div>


                        <div class="form-grid">

                            <div class="form-group">

                                <label for="linkedin">
                                    LinkedIn
                                </label>

                                <input
                                    type="url"
                                    id="linkedin"
                                    name="linkedin"
                                    placeholder="https://linkedin.com/in/..."
                                >

                            </div>


                            <div class="form-group">

                                <label for="github">
                                    GitHub
                                </label>

                                <input
                                    type="url"
                                    id="github"
                                    name="github"
                                    placeholder="https://github.com/..."
                                >

                            </div>


                            <div class="form-group full-width">

                                <label for="portfolio">
                                    Portfolio / Website
                                </label>

                                <input
                                    type="url"
                                    id="portfolio"
                                    name="portfolio"
                                    placeholder="https://..."
                                >

                            </div>

                        </div>

                    </div>


                    <!-- ACTION -->

                    <div class="form-actions">

                        <a
                            href="{{ route('user.templates') }}"
                            class="form-back-button">

                            ← Tukar Template

                        </a>


                        <button
                            type="submit"
                            class="form-submit-button">

                            Jana Resume

                            <span>→</span>

                        </button>

                    </div>

                </div>

            </form>

        </main>

    </div>

</div>


<script>

let educationCount = 1;
let experienceCount = 1;
let projectCount = 1;
let achievementCount = 1;


function addEducation() {

    const container =
        document.getElementById('education-container');

    const html = `

        <div class="dynamic-item">

            <div class="dynamic-item-header">

                <strong>Pendidikan ${educationCount + 1}</strong>

                <button
                    type="button"
                    class="remove-item-button"
                    onclick="this.closest('.dynamic-item').remove()">

                    Buang

                </button>

            </div>


            <div class="form-grid">

                <div class="form-group">

                    <label>Institusi</label>

                    <input
                        type="text"
                        name="education[${educationCount}][institution]"
                        placeholder="Nama institusi"
                    >

                </div>


                <div class="form-group">

                    <label>Program / Kelulusan</label>

                    <input
                        type="text"
                        name="education[${educationCount}][qualification]"
                        placeholder="Contoh: Diploma"
                    >

                </div>


                <div class="form-group">

                    <label>Tahun Mula</label>

                    <input
                        type="text"
                        name="education[${educationCount}][start_year]"
                        placeholder="2024"
                    >

                </div>


                <div class="form-group">

                    <label>Tahun Tamat</label>

                    <input
                        type="text"
                        name="education[${educationCount}][end_year]"
                        placeholder="2027"
                    >

                </div>


                <div class="form-group full-width">

                    <label>Pencapaian / Keputusan</label>

                    <input
                        type="text"
                        name="education[${educationCount}][achievement]"
                        placeholder="Contoh: CGPA 3.50"
                    >

                </div>

            </div>

        </div>

    `;

    container.insertAdjacentHTML('beforeend', html);

    educationCount++;
}


function addExperience() {

    const container =
        document.getElementById('experience-container');

    const html = `

        <div class="dynamic-item">

            <div class="dynamic-item-header">

                <strong>Pengalaman ${experienceCount + 1}</strong>

                <button
                    type="button"
                    class="remove-item-button"
                    onclick="this.closest('.dynamic-item').remove()">

                    Buang

                </button>

            </div>


            <div class="form-grid">

                <div class="form-group">

                    <label>Jawatan</label>

                    <input
                        type="text"
                        name="experience[${experienceCount}][position]"
                        placeholder="Contoh: Web Designer"
                    >

                </div>


                <div class="form-group">

                    <label>Nama Syarikat</label>

                    <input
                        type="text"
                        name="experience[${experienceCount}][company]"
                        placeholder="Nama syarikat"
                    >

                </div>


                <div class="form-group">

                    <label>Tarikh Mula</label>

                    <input
                        type="text"
                        name="experience[${experienceCount}][start_date]"
                        placeholder="Januari 2025"
                    >

                </div>


                <div class="form-group">

                    <label>Tarikh Tamat</label>

                    <input
                        type="text"
                        name="experience[${experienceCount}][end_date]"
                        placeholder="Mac 2025"
                    >

                </div>


                <div class="form-group full-width">

                    <label>Penerangan Kerja</label>

                    <textarea
                        name="experience[${experienceCount}][description]"
                        rows="5"
                        placeholder="Terangkan pengalaman kerja anda..."
                    ></textarea>

                </div>

            </div>

        </div>

    `;

    container.insertAdjacentHTML('beforeend', html);

    experienceCount++;
}


function addProject() {

    const container =
        document.getElementById('project-container');

    const html = `

        <div class="dynamic-item">

            <div class="dynamic-item-header">

                <strong>Projek ${projectCount + 1}</strong>

                <button
                    type="button"
                    class="remove-item-button"
                    onclick="this.closest('.dynamic-item').remove()">

                    Buang

                </button>

            </div>


            <div class="form-grid">

                <div class="form-group">

                    <label>Nama Projek</label>

                    <input
                        type="text"
                        name="projects[${projectCount}][name]"
                        placeholder="Nama projek"
                    >

                </div>


                <div class="form-group">

                    <label>Teknologi Digunakan</label>

                    <input
                        type="text"
                        name="projects[${projectCount}][technology]"
                        placeholder="HTML, CSS, PHP..."
                    >

                </div>


                <div class="form-group full-width">

                    <label>Penerangan Projek</label>

                    <textarea
                        name="projects[${projectCount}][description]"
                        rows="4"
                        placeholder="Terangkan projek..."
                    ></textarea>

                </div>

            </div>

        </div>

    `;

    container.insertAdjacentHTML('beforeend', html);

    projectCount++;
}


function addAchievement() {

    const container =
        document.getElementById('achievement-container');

    const html = `

        <div class="dynamic-item">

            <div class="dynamic-item-header">

                <strong>Pencapaian ${achievementCount + 1}</strong>

                <button
                    type="button"
                    class="remove-item-button"
                    onclick="this.closest('.dynamic-item').remove()">

                    Buang

                </button>

            </div>


            <div class="form-grid">

                <div class="form-group">

                    <label>Nama Sijil / Pencapaian</label>

                    <input
                        type="text"
                        name="achievements[${achievementCount}][name]"
                        placeholder="Nama sijil / pencapaian"
                    >

                </div>


                <div class="form-group">

                    <label>Penganjur</label>

                    <input
                        type="text"
                        name="achievements[${achievementCount}][organization]"
                        placeholder="Nama organisasi"
                    >

                </div>


                <div class="form-group">

                    <label>Tahun</label>

                    <input
                        type="text"
                        name="achievements[${achievementCount}][year]"
                        placeholder="2026"
                    >

                </div>

            </div>

        </div>

    `;

    container.insertAdjacentHTML('beforeend', html);

    achievementCount++;
}

</script>

@endsection