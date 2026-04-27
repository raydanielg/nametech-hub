@extends('layouts.app')

@section('content')
@include('landing.partials.header')

<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-success text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold text-dark mb-4">Our Story</h1>
                <p class="lead text-muted mb-4">We are building the future of innovation, one startup at a time. Our mission is to empower entrepreneurs with the tools, resources, and community they need to transform ideas into impactful businesses.</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('company.leadership') }}" class="btn btn-success btn-lg px-4 fw-bold">Meet the Team</a>
                    <a href="{{ route('company.contact') }}" class="btn btn-outline-dark btn-lg px-4 fw-bold">Get in Touch</a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="position-relative">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img src="{{ asset('sampelsimaes/technology-innovation-simulation-gadget-concept_53876-121153.jpg') }}" alt="About Us" class="w-100 object-fit-cover" style="height: 400px;">
                    </div>
                    <div class="position-absolute bg-success text-white rounded-4 p-4 shadow-lg" style="bottom: -20px; left: -20px; max-width: 200px;">
                        <div class="display-5 fw-bold">10+</div>
                        <div class="small">Years of Innovation</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 bg-success text-white h-100 rounded-4 p-5">
                    <div class="mb-4">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                    </div>
                    <h3 class="h2 fw-bold mb-3">Our Mission</h3>
                    <p class="lead opacity-75">To create an ecosystem where innovation thrives, connecting visionary entrepreneurs with the resources, mentorship, and capital needed to build transformative companies that solve real-world problems.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 bg-dark text-white h-100 rounded-4 p-5">
                    <div class="mb-4">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m16 12-4-4-4 4"/><path d="M12 16V8"/></svg>
                    </div>
                    <h3 class="h2 fw-bold mb-3">Our Vision</h3>
                    <p class="lead opacity-75">To become Africa's leading innovation hub, fostering a generation of tech-enabled businesses that drive economic growth, create jobs, and improve lives across the continent and beyond.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">What We Stand For</span>
            <h2 class="display-5 fw-bold text-dark mt-2">Our Core Values</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Innovation First</h4>
                    <p class="text-muted">We embrace bold ideas and creative solutions. Every challenge is an opportunity to innovate and create meaningful impact.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="m22 21-3-3"/><path d="m16 15 3 3"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Community Driven</h4>
                    <p class="text-muted">We believe in the power of collaboration. Together, we achieve more than we ever could alone.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Integrity Always</h4>
                    <p class="text-muted">Trust is our foundation. We operate with transparency, honesty, and ethical standards in everything we do.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Excellence Matters</h4>
                    <p class="text-muted">We pursue the highest standards in our work, constantly learning, improving, and delivering exceptional results.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Impact Focused</h4>
                    <p class="text-muted">We measure success by the positive change we create in businesses, communities, and lives.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Future Ready</h4>
                    <p class="text-muted">We anticipate trends, embrace change, and prepare businesses for the opportunities of tomorrow.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="display-3 fw-bold text-success">500+</div>
                <p class="text-muted fw-medium">Startups Supported</p>
            </div>
            <div class="col-6 col-lg-3">
                <div class="display-3 fw-bold text-success">$50M+</div>
                <p class="text-muted fw-medium">Capital Raised</p>
            </div>
            <div class="col-6 col-lg-3">
                <div class="display-3 fw-bold text-success">2000+</div>
                <p class="text-muted fw-medium">Jobs Created</p>
            </div>
            <div class="col-6 col-lg-3">
                <div class="display-3 fw-bold text-success">15+</div>
                <p class="text-muted fw-medium">Countries Reached</p>
            </div>
        </div>
    </div>
</section>

<!-- History Timeline -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Our Journey</span>
            <h2 class="display-5 fw-bold text-dark mt-2">Timeline of Growth</h2>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="timeline-steps">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content timeline-card">
                            <div class="timeline-year">2014</div>
                            <h5 class="fw-bold mb-2">The Beginning</h5>
                            <p class="text-muted mb-0">Started as a small co-working space with a vision to support local entrepreneurs.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content timeline-card">
                            <div class="timeline-year">2017</div>
                            <h5 class="fw-bold mb-2">First Incubation Program</h5>
                            <p class="text-muted mb-0">Launched our flagship startup incubation program, supporting 20 companies in the first cohort.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content timeline-card">
                            <div class="timeline-year">2019</div>
                            <h5 class="fw-bold mb-2">Regional Expansion</h5>
                            <p class="text-muted mb-0">Expanded operations to 5 countries, establishing partnerships with leading tech companies.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content timeline-card">
                            <div class="timeline-year">2022</div>
                            <h5 class="fw-bold mb-2">Digital Academy Launch</h5>
                            <p class="text-muted mb-0">Introduced online learning platform, reaching thousands of entrepreneurs globally.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content timeline-card">
                            <div class="timeline-year">2024</div>
                            <h5 class="fw-bold mb-2">Industry Leader</h5>
                            <p class="text-muted mb-0">Recognized as a top innovation hub in Africa, supporting 500+ startups and counting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="card border-0 bg-dark text-white rounded-4 p-5 text-center">
            <h2 class="display-5 fw-bold mb-3">Ready to Join Our Ecosystem?</h2>
            <p class="lead mb-4 opacity-75">Whether you're a founder, investor, or partner, there's a place for you in our community.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('company.become-partner') }}" class="btn btn-success btn-lg px-5 fw-bold">Become a Partner</a>
                <a href="{{ route('company.careers') }}" class="btn btn-outline-light btn-lg px-5 fw-bold">Join Our Team</a>
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
    .object-fit-cover {
        object-fit: cover;
    }
    .tracking-wider {
        letter-spacing: 0.1em;
    }
    .timeline-steps {
        position: relative;
        padding-left: 52px;
    }
    .timeline-steps::before {
        content: "";
        position: absolute;
        top: 8px;
        bottom: 8px;
        left: 18px;
        width: 2px;
        background: linear-gradient(
            to bottom,
            rgba(16, 185, 129, 0),
            rgba(16, 185, 129, 0.35),
            rgba(16, 185, 129, 0)
        );
    }
    .timeline-item {
        position: relative;
        padding-bottom: 18px;
    }
    .timeline-item:last-child {
        padding-bottom: 0;
    }
    .timeline-dot {
        position: absolute;
        left: 10px;
        top: 26px;
        width: 18px;
        height: 18px;
        border-radius: 9999px;
        background: #ffffff;
        border: 3px solid #10b981;
        box-shadow: 0 0 0 7px rgba(16, 185, 129, 0.14);
    }
    .timeline-content {
        width: 100%;
    }
    .timeline-card {
        background: #ffffff;
        border-radius: 1.25rem;
        padding: 20px 22px;
        box-shadow: 0 10px 25px rgba(17, 24, 39, 0.06);
        border: 1px solid rgba(17, 24, 39, 0.06);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .timeline-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 16px 40px rgba(17, 24, 39, 0.10);
    }
    .timeline-year {
        display: inline-block;
        font-weight: 800;
        padding: 6px 14px;
        border-radius: 9999px;
        background: #10b981;
        color: #ffffff;
        margin-bottom: 12px;
        letter-spacing: 0.02em;
    }
    @media (max-width: 576px) {
        .timeline-steps {
            padding-left: 44px;
        }
        .timeline-steps::before {
            left: 16px;
        }
        .timeline-dot {
            left: 8px;
        }
        .timeline-card {
            padding: 16px 16px;
            border-radius: 1rem;
        }
    }
</style>

@endsection
