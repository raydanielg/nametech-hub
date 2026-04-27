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
                <li class="breadcrumb-item active">Partners</li>
            </ol>
        </nav>
        <div class="text-center">
            <h1 class="display-4 fw-bold text-dark mb-3">Our Partners</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Collaborating with industry leaders to create unparalleled opportunities for our community.</p>
        </div>
    </div>
</section>

<!-- Partner Categories -->
<section class="py-5">
    <div class="container py-4">
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card border-0 bg-success text-white rounded-4 h-100 p-4">
                    <div class="mb-3">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Strategic Partners</h4>
                    <p class="opacity-75">Industry leaders who help us shape the future of innovation.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-dark text-white rounded-4 h-100 p-4">
                    <div class="mb-3">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Investors</h4>
                    <p class="opacity-75">VCs and angel investors providing capital to our startups.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-light border rounded-4 h-100 p-4">
                    <div class="mb-3 text-success">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" x2="6.01" y1="2" y2="2"/><line x1="10" x2="10.01" y1="2" y2="2"/><line x1="14" x2="14.01" y1="2" y2="2"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Technology Partners</h4>
                    <p class="text-muted">Tech companies providing tools and infrastructure.</p>
                </div>
            </div>
        </div>

        <!-- Partner Logos Grid -->
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Trusted By</span>
            <h2 class="h1 fw-bold text-dark mt-2">Industry Leaders</h2>
        </div>
        <div class="row g-4 align-items-center justify-content-center">
            @php
            $partners = [
                ['name' => 'Google', 'color' => '#4285f4'],
                ['name' => 'Microsoft', 'color' => '#00a4ef'],
                ['name' => 'Amazon', 'color' => '#ff9900'],
                ['name' => 'IBM', 'color' => '#054ada'],
                ['name' => 'Oracle', 'color' => '#f80000'],
                ['name' => 'SAP', 'color' => '#0077c8'],
                ['name' => 'Salesforce', 'color' => '#00a1e0'],
                ['name' => 'Intel', 'color' => '#0071c5'],
                ['name' => 'Cisco', 'color' => '#049fd9'],
                ['name' => 'Dell', 'color' => '#007db8'],
                ['name' => 'HP', 'color' => '#0096d6'],
                ['name' => 'VMware', 'color' => '#696566'],
            ];
            @endphp
            @foreach ($partners as $partner)
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card border-0 shadow-sm rounded-4 p-4 text-center hover-lift" style="min-height: 120px;">
                    <div class="h-100 d-flex flex-column align-items-center justify-content-center">
                        <div class="fw-bold fs-5 mb-2" style="color: {{ $partner['color'] }}">{{ $partner['name'] }}</div>
                        <span class="badge bg-light text-muted">Partner</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- University Partners -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Academic</span>
            <h2 class="h1 fw-bold text-dark mt-2">University Partners</h2>
        </div>
        <div class="row g-4">
            @php
            $universities = [
                ['name' => 'University of Cape Town', 'country' => 'South Africa'],
                ['name' => 'University of Nairobi', 'country' => 'Kenya'],
                ['name' => 'MIT', 'country' => 'USA'],
                ['name' => 'Stanford', 'country' => 'USA'],
                ['name' => 'University of Lagos', 'country' => 'Nigeria'],
                ['name' => 'University of Ghana', 'country' => 'Ghana'],
                ['name' => 'University of Dar es Salaam', 'country' => 'Tanzania'],
                ['name' => 'Addis Ababa University', 'country' => 'Ethiopia'],
            ];
            @endphp
            @foreach ($universities as $uni)
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success bg-opacity-10 rounded-3 p-2 me-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                        </div>
                        <h6 class="fw-bold mb-0">{{ $uni['name'] }}</h6>
                    </div>
                    <p class="text-muted small mb-0">{{ $uni['country'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Government Partners -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Public Sector</span>
            <h2 class="h1 fw-bold text-dark mt-2">Government Partners</h2>
        </div>
        <div class="row g-4">
            @php
            $governments = [
                ['name' => 'Ministry of ICT - Kenya', 'focus' => 'Digital Innovation'],
                ['name' => 'NITDA Nigeria', 'focus' => 'Tech Development'],
                ['name' => 'South Africa DTI', 'focus' => 'Trade & Industry'],
                ['name' => 'Rwanda Development Board', 'focus' => 'ICT Growth'],
            ];
            @endphp
            @foreach ($governments as $gov)
            <div class="col-md-6">
                <div class="card border-0 bg-dark text-white rounded-4 p-4 h-100 hover-lift">
                    <div class="d-flex align-items-center">
                        <div class="bg-white bg-opacity-10 rounded-3 p-3 me-4">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 21h18"/><path d="M5 21V7l8-4 8 4v14"/><path d="M9 10h6"/><path d="M9 14h6"/><path d="M9 18h6"/></svg>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">{{ $gov['name'] }}</h5>
                            <p class="text-success small mb-0">{{ $gov['focus'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Become Partner CTA -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="card border-0 rounded-4 p-5 text-center" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
            <h2 class="display-5 fw-bold text-white mb-3">Join Our Partner Network</h2>
            <p class="lead text-white opacity-75 mb-4 mx-auto" style="max-width: 600px;">Partner with us to access top-tier startups, innovative technologies, and a thriving entrepreneurial ecosystem.</p>
            <a href="{{ route('company.become-partner') }}" class="btn btn-white btn-lg px-5 fw-bold" style="background: white; color: #10b981;">Apply to Partner</a>
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
</style>

@endsection
