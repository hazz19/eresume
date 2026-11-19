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

            <a href="{{ route('user.templates') }}"
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


            <div class="template-grid">

                <!-- PROFESSIONAL -->

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
                            onclick="openTemplateModal('Professional')">
                            Pilih Template
                        </button>

                    </div>

                </div>


                <!-- MODERN -->

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
                            onclick="openTemplateModal('Modern')">
                            Pilih Template
                        </button>

                    </div>

                </div>


                <!-- CREATIVE -->

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
                            onclick="openTemplateModal('Creative')">
                            Pilih Template
                        </button>

                    </div>

                </div>


                <!-- MINIMALIST -->

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
                            onclick="openTemplateModal('Minimalist')">
                            Pilih Template
                        </button>

                    </div>

                </div>

            </div>

        </main>

    </div>

</div>


<!-- POPUP -->

<div class="template-modal" id="templateModal">

    <div class="template-modal-overlay" onclick="closeTemplateModal()"></div>

    <div class="template-modal-box">

        <button class="modal-close"
                type="button"
                onclick="closeTemplateModal()">
            ×
        </button>

        <div class="modal-header">

            <span class="modal-badge">
                PILIH DESIGN
            </span>

            <h2 id="modalTitle">
                Pilih Design
            </h2>

            <p>
                Pilih design resume yang anda mahu gunakan.
            </p>

        </div>


        <div class="design-grid" id="designGrid">

        </div>


        <div class="modal-footer">

            <button type="button"
                    class="modal-cancel"
                    onclick="closeTemplateModal()">
                Batal
            </button>

        </div>

    </div>

</div>


<script>

    const templateDesigns = {

        Professional: [
            {
                id: 'professional-1',
                name: 'Professional Classic',
                description: 'Design formal dan kemas.',
                style: 'design-professional-1'
            },
            {
                id: 'professional-2',
                name: 'Professional Corporate',
                description: 'Sesuai untuk permohonan kerja korporat.',
                style: 'design-professional-2'
            },
            {
                id: 'professional-3',
                name: 'Professional Executive',
                description: 'Design profesional dan elegan.',
                style: 'design-professional-3'
            }
        ],

        Modern: [
            {
                id: 'modern-1',
                name: 'Modern Blue',
                description: 'Design moden dengan gaya profesional.',
                style: 'design-modern-1'
            },
            {
                id: 'modern-2',
                name: 'Modern Purple',
                description: 'Design moden dengan gaya kreatif.',
                style: 'design-modern-2'
            },
            {
                id: 'modern-3',
                name: 'Modern Clean',
                description: 'Design moden dan minimal.',
                style: 'design-modern-3'
            }
        ],

        Creative: [
            {
                id: 'creative-1',
                name: 'Creative Color',
                description: 'Design kreatif dengan penggunaan warna.',
                style: 'design-creative-1'
            },
            {
                id: 'creative-2',
                name: 'Creative Portfolio',
                description: 'Sesuai untuk bidang kreatif dan teknologi.',
                style: 'design-creative-2'
            },
            {
                id: 'creative-3',
                name: 'Creative Bold',
                description: 'Design kreatif yang lebih menyerlah.',
                style: 'design-creative-3'
            }
        ],

        Minimalist: [
            {
                id: 'minimalist-1',
                name: 'Minimalist White',
                description: 'Design putih yang bersih dan profesional.',
                style: 'design-minimalist-1'
            },
            {
                id: 'minimalist-2',
                name: 'Minimalist Simple',
                description: 'Design ringkas dan mudah dibaca.',
                style: 'design-minimalist-2'
            },
            {
                id: 'minimalist-3',
                name: 'Minimalist Elegant',
                description: 'Design minimal dengan gaya elegan.',
                style: 'design-minimalist-3'
            }
        ]

    };


    function openTemplateModal(templateName) {

        const modal = document.getElementById('templateModal');
        const title = document.getElementById('modalTitle');
        const grid = document.getElementById('designGrid');

        title.textContent = 'Design ' + templateName;

        grid.innerHTML = '';

        const designs = templateDesigns[templateName];

        designs.forEach(function(design) {

            const card = document.createElement('div');

            card.className = 'design-card';

            card.innerHTML = `

                <div class="design-preview ${design.style}">

                    <div class="mini-resume">

                        <div class="mini-top"></div>

                        <div class="mini-title"></div>

                        <div class="mini-line"></div>
                        <div class="mini-line"></div>
                        <div class="mini-line short"></div>

                        <div class="mini-title"></div>

                        <div class="mini-line"></div>
                        <div class="mini-line"></div>
                        <div class="mini-line"></div>

                        <div class="mini-title"></div>

                        <div class="mini-line"></div>
                        <div class="mini-line short"></div>

                    </div>

                </div>

                <div class="design-card-info">

                    <div>
                        <h3>${design.name}</h3>
                        <p>${design.description}</p>
                    </div>

                    <button type="button"
                            onclick="chooseDesign('${design.id}')">
                        Gunakan Design
                    </button>

                </div>

            `;

            grid.appendChild(card);

        });

        modal.classList.add('show');

        document.body.classList.add('modal-open');
    }


    function closeTemplateModal() {

        const modal = document.getElementById('templateModal');

        modal.classList.remove('show');

        document.body.classList.remove('modal-open');
    }


    function chooseDesign(templateId) {

        const formUrl =
            "{{ url('/user/resume/form') }}/" + templateId;

        window.location.href = formUrl;
    }


    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {
            closeTemplateModal();
        }

    });

</script>

@endsection