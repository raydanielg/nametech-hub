@extends('layouts.app')

@section('content')
@include('landing.partials.header')

<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-success text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('company.about') }}" class="text-success text-decoration-none">Company</a></li>
                <li class="breadcrumb-item active">Leadership</li>
            </ol>
        </nav>
        <div class="text-center">
            <h1 class="display-4 fw-bold text-dark mb-3">Meet Our Leadership</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Visionaries, innovators, and industry experts dedicated to building the future of entrepreneurship.</p>
        </div>
    </div>
</section>

<!-- Organization Structure -->

<!-- TIER 1 — BOARD OF DIRECTORS -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-primary fw-bold text-uppercase tracking-wider small">Tier 1</span>
            <h2 class="h1 fw-bold text-dark mt-2">Board of Directors</h2>
            <div class="mx-auto mt-2" style="width: 60px; height: 4px; background: #007bff;"></div>
        </div>

        <!-- Board President -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-5">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-primary border-4">
                    <div class="card-body p-5">
                        <div class="rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 120px; height: 120px; background: #007bff10; border: 2px solid #007bff;">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#007bff" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <h3 class="fw-bold text-dark mb-1">Amro Al-Fayyi</h3>
                        <p class="text-primary fw-bold text-uppercase small tracking-widest mb-0">Board President</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Board Members -->
        <div class="row g-4 justify-content-center">
            <div class="col-md-5">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-primary border-4">
                    <div class="card-body p-4">
                        <div class="skeleton-avatar mx-auto mb-3 shadow-sm">
                            <div class="skeleton-pulse rounded-circle w-100 h-100"></div>
                        </div>
                        <h4 class="fw-bold text-dark mb-1">Sarah Ibrahim</h4>
                        <p class="text-primary fw-bold text-uppercase small tracking-widest mb-0">Board Member</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-primary border-4">
                    <div class="card-body p-4">
                        <div class="skeleton-avatar mx-auto mb-3 shadow-sm">
                            <div class="skeleton-pulse rounded-circle w-100 h-100"></div>
                        </div>
                        <h4 class="fw-bold text-dark mb-1">Leodgar Kachebonaho</h4>
                        <p class="text-primary fw-bold text-uppercase small tracking-widest mb-0">Board Member</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TIER 2 — DIRECTOR -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-info fw-bold text-uppercase tracking-wider small">Tier 2</span>
            <h2 class="h1 fw-bold text-dark mt-2">Director</h2>
            <div class="mx-auto mt-2" style="width: 60px; height: 4px; background: #0dcaf0;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-info border-4">
                    <div class="card-body p-5">
                        <div class="rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm overflow-hidden" style="width: 150px; height: 150px; border: 3px solid #0dcaf0;">
                            <img src="{{ asset('team/20b500e7-6844-4267-bc7d-5e9caa6e0521.jfif') }}" alt="Nafidh Ally" class="w-100 h-100 object-fit-cover">
                        </div>
                        <h3 class="fw-bold text-dark mb-1">Nafidh Ally</h3>
                        <p class="text-info fw-bold text-uppercase small tracking-widest mb-0">Director</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TIER 3 — EXECUTIVE LEADERSHIP (C-SUITE) -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-dark fw-bold text-uppercase tracking-wider small" style="color: #6f42c1 !important;">Tier 3</span>
            <h2 class="h1 fw-bold text-dark mt-2">Executive Leadership (C-Suite)</h2>
            <div class="mx-auto mt-2" style="width: 60px; height: 4px; background: #6f42c1;"></div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-4" style="border-top-color: #6f42c1 !important;">
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center shadow-sm overflow-hidden" style="width: 120px; height: 120px; border: 3px solid #6f42c1;">
                            <img src="{{ asset('team/WhatsApp Image 2026-05-13 at 14.52.44.jpeg') }}" alt="Asia Mtonga" class="w-100 h-100 object-fit-cover">
                        </div>
                        <h4 class="fw-bold text-dark mb-1">Asia Mtonga</h4>
                        <p class="fw-bold text-uppercase small tracking-widest mb-0" style="color: #6f42c1;">Chief Executive Officer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-4" style="border-top-color: #6f42c1 !important;">
                    <div class="card-body p-4">
                        <div class="skeleton-avatar mx-auto mb-3 shadow-sm" style="border-color: #6f42c1;">
                            <div class="skeleton-pulse rounded-circle w-100 h-100" style="background: #6f42c115;"></div>
                        </div>
                        <h4 class="fw-bold text-dark mb-1">AbdulRahman</h4>
                        <p class="fw-bold text-uppercase small tracking-widest mb-0" style="color: #6f42c1;">Chief Operating Officer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-4" style="border-top-color: #6f42c1 !important;">
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center shadow-sm overflow-hidden" style="width: 120px; height: 120px; border: 3px solid #6f42c1;">
                            <img src="{{ asset('team/Yusra.jpeg') }}" alt="Yusra Abdulbastwa" class="w-100 h-100 object-fit-cover">
                        </div>
                        <h4 class="fw-bold text-dark mb-1">Yusra Abdulbastwa</h4>
                        <p class="fw-bold text-uppercase small tracking-widest mb-0" style="color: #6f42c1;">Chief Financial Officer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TIER 4 — TECHNOLOGY LEADERSHIP (CTOS) -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-danger fw-bold text-uppercase tracking-wider small">Tier 4</span>
            <h2 class="h1 fw-bold text-dark mt-2">Technology Leadership (CTOs)</h2>
            <p class="text-muted small">Reporting to the Chief Executive Officer</p>
            <div class="mx-auto mt-2" style="width: 60px; height: 4px; background: #dc3545;"></div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-danger border-4">
                    <div class="card-body p-4">
                        <div class="skeleton-avatar mx-auto mb-3 shadow-sm" style="border-color: #dc3545; width: 100px; height: 100px;">
                            <div class="skeleton-pulse rounded-circle w-100 h-100" style="background: #dc354515;"></div>
                        </div>
                        <h4 class="fw-bold text-dark mb-1">Annuary Kivruga</h4>
                        <p class="text-danger fw-bold text-uppercase small tracking-widest mb-0">Chief Technology Officer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-danger border-4">
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center shadow-sm overflow-hidden" style="width: 100px; height: 100px; border: 3px solid #dc3545;">
                            <img src="https://github.com/raydanielg.png" alt="Ezra Daniel" class="w-100 h-100 object-fit-cover">
                        </div>
                        <h4 class="fw-bold text-dark mb-1">Ezra Daniel</h4>
                        <p class="text-danger fw-bold text-uppercase small tracking-widest mb-0">Chief Technology Officer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-danger border-4">
                    <div class="card-body p-4">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center shadow-sm overflow-hidden" style="width: 120px; height: 120px; border: 3px solid #dc3545;">
                            <img src="{{ asset('team/Sharifu Ally Muumba.jpeg') }}" alt="Sharif Muhumba" class="w-100 h-100 object-fit-cover">
                        </div>
                        <h4 class="fw-bold text-dark mb-1">Sharif Muhumba</h4>
                        <p class="text-danger fw-bold text-uppercase small tracking-widest mb-0">Chief Technology Officer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TIER 5 — PROGRAMS & COMMUNITY -->
<section class="py-5 bg-white mb-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Tier 5</span>
            <h2 class="h1 fw-bold text-dark mt-2">Programs & Community</h2>
            <p class="text-muted small">Reporting to the Chief Operating Officer</p>
            <div class="mx-auto mt-2" style="width: 60px; height: 4px; background: #198754;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden text-center hover-lift border-top border-success border-4">
                    <div class="card-body p-5">
                        <div class="rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 100px; height: 100px; background: #19875410; border: 2px solid #198754;">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#198754" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <h3 class="fw-bold text-dark mb-1">Godfrey Shora</h3>
                        <p class="text-success fw-bold text-uppercase small tracking-widest mb-2">Community & Programs Lead</p>
                        <p class="text-muted small mb-0">Hub Ecosystem | Member Engagement | Program Delivery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Department Heads -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Department Heads</span>
            <h2 class="h1 fw-bold text-dark mt-2">Our Experts</h2>
        </div>
        <div class="row g-4">
            @for ($i = 0; $i < 6; $i++)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm rounded-4 text-center h-100 p-3 hover-lift">
                    <div class="skeleton-avatar mx-auto mb-3 shadow-sm" style="width: 80px; height: 80px; border-color: #10b981;">
                        <div class="skeleton-pulse rounded-circle w-100 h-100" style="background: #10b98115;"></div>
                    </div>
                    <div class="skeleton-line mx-auto mb-2" style="width: 80%; height: 12px; background: #e5e7eb; border-radius: 4px;"></div>
                    <div class="skeleton-line mx-auto" style="width: 60%; height: 10px; background: #f3f4f6; border-radius: 4px;"></div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Advisory Board -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Guidance</span>
            <h2 class="h1 fw-bold text-dark mt-2">Advisory Board</h2>
        </div>
        <div class="row g-4">
            @for ($i = 0; $i < 4; $i++)
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 bg-dark text-white rounded-4 h-100 p-4 hover-lift shadow-lg">
                    <div class="skeleton-avatar mb-3" style="width: 60px; height: 60px; border-color: rgba(255,255,255,0.2);">
                        <div class="skeleton-pulse rounded-circle w-100 h-100" style="background: rgba(255,255,255,0.1);"></div>
                    </div>
                    <div class="skeleton-line mb-2" style="width: 70%; height: 14px; background: rgba(255,255,255,0.1); border-radius: 4px;"></div>
                    <div class="skeleton-line mb-2" style="width: 50%; height: 10px; background: rgba(16, 185, 129, 0.2); border-radius: 4px;"></div>
                    <div class="skeleton-line" style="width: 40%; height: 10px; background: rgba(255,255,255,0.05); border-radius: 4px;"></div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Join Team CTA -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="card border-0 bg-success text-white rounded-4 p-5 text-center overflow-hidden position-relative">
            <div class="position-relative" style="z-index: 2;">
                <h2 class="display-5 fw-bold mb-3">Want to Join Our Team?</h2>
                <p class="lead mb-4 opacity-75">We're always looking for passionate individuals who want to make a difference.</p>
                <a href="{{ route('company.careers') }}" class="btn btn-white btn-lg px-5 fw-bold" style="background: white; color: #10b981;">View Open Positions</a>
            </div>
            <div class="position-absolute top-0 end-0 opacity-10" style="margin: -30px;">
                <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="m22 21-3-3"/><path d="m16 15 3 3"/></svg>
            </div>
        </div>
    </div>
</section>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.15) !important;
    }
    .tracking-wider {
        letter-spacing: 0.1em;
    }

    /* Skeleton Loading Effect */
    .skeleton-avatar {
        width: 90px;
        height: 90px;
        border: 2px solid #007bff;
        border-radius: 50%;
        padding: 3px;
        overflow: hidden;
    }
    
    .skeleton-pulse {
        background: #007bff15;
        animation: skeleton-pulse 1.5s infinite ease-in-out;
    }

    .skeleton-line {
        animation: skeleton-pulse 1.5s infinite ease-in-out;
    }

    @keyframes skeleton-pulse {
        0% { opacity: 0.5; }
        50% { opacity: 1; }
        100% { opacity: 0.5; }
    }
</style>

@endsection
