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
                <li class="breadcrumb-item active">Careers</li>
            </ol>
        </nav>
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-3">Join Our Team</h1>
                <p class="lead text-muted">Build your career while building the future. We're looking for passionate individuals who want to make a real impact.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="#openings" class="btn btn-success btn-lg px-4 fw-bold">View Openings</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Join Us -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Benefits</span>
            <h2 class="h1 fw-bold text-dark mt-2">Why Work With Us</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Flexible Hours</h4>
                    <p class="text-muted">Work when you're most productive. We believe in results, not clock-watching.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Competitive Pay</h4>
                    <p class="text-muted">Above-market salaries with performance bonuses and equity options.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="m22 21-3-3"/><path d="m16 15 3 3"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Health & Wellness</h4>
                    <p class="text-muted">Comprehensive health insurance, gym memberships, and mental health support.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Learning Budget</h4>
                    <p class="text-muted">Annual budget for courses, conferences, and professional development.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Remote Work</h4>
                    <p class="text-muted">Work from anywhere. We support distributed teams across time zones.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M12 8a3 3 0 0 1 3-3h6v12h-6a3 3 0 0 0-3 3v-1a3 3 0 0 0-3-3H3V5h6a3 3 0 0 1 3 3z"/><path d="M12 12v.01"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Paid Time Off</h4>
                    <p class="text-muted">Generous vacation days, parental leave, and paid holidays.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Open Positions -->
<section id="openings" class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Current Openings</span>
            <h2 class="h1 fw-bold text-dark mt-2">Open Positions</h2>
        </div>

        <!-- Filter Buttons -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
            <button class="btn btn-success px-4">All</button>
            <button class="btn btn-outline-secondary px-4">Engineering</button>
            <button class="btn btn-outline-secondary px-4">Product</button>
            <button class="btn btn-outline-secondary px-4">Design</button>
            <button class="btn btn-outline-secondary px-4">Marketing</button>
            <button class="btn btn-outline-secondary px-4">Operations</button>
        </div>

        @php
        $jobs = [
            ['title' => 'Senior Full Stack Developer', 'dept' => 'Engineering', 'type' => 'Full-time', 'location' => 'Remote', 'experience' => '5+ years'],
            ['title' => 'Product Manager', 'dept' => 'Product', 'type' => 'Full-time', 'location' => 'Nairobi/Lagos', 'experience' => '3+ years'],
            ['title' => 'UX/UI Designer', 'dept' => 'Design', 'type' => 'Full-time', 'location' => 'Remote', 'experience' => '3+ years'],
            ['title' => 'Growth Marketing Lead', 'dept' => 'Marketing', 'type' => 'Full-time', 'location' => 'Cape Town', 'experience' => '4+ years'],
            ['title' => 'Startup Success Manager', 'dept' => 'Operations', 'type' => 'Full-time', 'location' => 'Nairobi', 'experience' => '3+ years'],
            ['title' => 'DevOps Engineer', 'dept' => 'Engineering', 'type' => 'Full-time', 'location' => 'Remote', 'experience' => '4+ years'],
            ['title' => 'Content Strategist', 'dept' => 'Marketing', 'type' => 'Contract', 'location' => 'Remote', 'experience' => '2+ years'],
            ['title' => 'Finance Manager', 'dept' => 'Operations', 'type' => 'Full-time', 'location' => 'Lagos', 'experience' => '5+ years'],
        ];
        @endphp

        <div class="row g-4">
            @foreach ($jobs as $job)
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <span class="badge bg-success bg-opacity-10 text-success mb-2">{{ $job['dept'] }}</span>
                            <h5 class="fw-bold mb-1">{{ $job['title'] }}</h5>
                        </div>
                        <a href="#" class="btn btn-outline-success btn-sm rounded-pill px-3">Apply</a>
                    </div>
                    <div class="d-flex flex-wrap gap-3 text-muted small">
                        <span class="d-flex align-items-center"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>{{ $job['type'] }}</span>
                        <span class="d-flex align-items-center"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>{{ $job['location'] }}</span>
                        <span class="d-flex align-items-center"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-1"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>{{ $job['experience'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <p class="text-muted">Don't see a perfect fit? We're always looking for great talent.</p>
            <a href="mailto:careers@example.com" class="btn btn-outline-dark fw-bold px-4">Send General Application</a>
        </div>
    </div>
</section>

<!-- Culture Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="rounded-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('sampelsimaes/photovoltaics-factory-engineer-using-vr-tech-build-models_482257-125969.jpg') }}" alt="Team Culture" class="w-100 object-fit-cover" style="height: 400px;">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <span class="text-success fw-bold text-uppercase tracking-wider small">Culture</span>
                <h2 class="h1 fw-bold text-dark mt-2 mb-4">Life at Our Hub</h2>
                <p class="text-muted mb-4">We're more than just colleagues - we're a community of innovators, dreamers, and doers. Our culture is built on collaboration, continuous learning, and making a real difference.</p>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex align-items-center">
                        <span class="bg-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                        <span>Weekly innovation workshops</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="bg-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                        <span>Quarterly team retreats</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="bg-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                        <span>Access to startup events & network</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <span class="bg-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 24px; height: 24px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                        <span>Mentorship from industry leaders</span>
                    </li>
                </ul>
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
</style>

@endsection
