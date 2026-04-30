@extends('layouts.app')

@section('title', 'Investor Network - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-green-50 to-emerald-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Investor Network</h1>
                <p class="lead text-muted mb-4">Connect with our network of angel investors, venture capitalists, and funding partners. Get the capital you need to grow your startup.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-green btn-lg fw-bold px-4">Meet Investors</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Apply for Funding</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-hand-holding-usd fa-3x text-green"></i>
                    </div>
                    <h5 class="text-center fw-bold">Funding Ready</h5>
                    <p class="text-center text-muted small mb-3">$50M+ available</p>
                    <div class="text-center">
                        <span class="badge bg-green">Active Network</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Investor Types -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Investor Types</h2>
            <p class="lead text-muted">Find the right funding partner for your stage</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-green bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-user-friends fa-2x text-green"></i>
                    </div>
                    <h5 class="card-title fw-bold">Angel Investors</h5>
                    <p class="card-text text-muted small">Individual investors for early-stage startups</p>
                    <span class="badge bg-green">25+ Angels</span>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-blue bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-building fa-2x text-blue"></i>
                    </div>
                    <h5 class="card-title fw-bold">VC Firms</h5>
                    <p class="card-text text-muted small">Venture capital for growth-stage startups</p>
                    <span class="badge bg-blue">15+ VCs</span>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-purple bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-coins fa-2x text-purple"></i>
                    </div>
                    <h5 class="card-title fw-bold">Family Offices</h5>
                    <p class="card-text text-muted small">Private wealth management investments</p>
                    <span class="badge bg-purple">10+ Offices</span>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-orange bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-globe fa-2x text-orange"></i>
                    </div>
                    <h5 class="card-title fw-bold">Corporate VCs</h5>
                    <p class="card-text text-muted small">Strategic corporate investments</p>
                    <span class="badge bg-orange">8+ Corporates</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
