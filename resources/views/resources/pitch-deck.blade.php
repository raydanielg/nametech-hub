@extends('layouts.app')

@section('title', 'Pitch Deck Templates - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-purple-50 to-pink-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Pitch Deck Templates</h1>
                <p class="lead text-muted mb-4">Professional pitch deck templates designed by investors. Make a lasting impression with compelling presentations.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-purple btn-lg fw-bold px-4">Download Templates</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">View Examples</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-presentation fa-3x text-purple"></i>
                    </div>
                    <h5 class="text-center fw-bold">Investor-Approved</h5>
                    <p class="text-center text-muted small mb-3">Templates that get funded</p>
                    <div class="text-center">
                        <span class="badge bg-purple">10+ Templates</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Template Categories -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Template Categories</h2>
            <p class="lead text-muted">Choose the right template for your stage</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">🌱 Seed Stage</h5>
                        <p class="card-text text-muted">Perfect for early-stage startups seeking seed funding</p>
                        <ul class="list-unstyled small text-muted">
                            <li>• 10 slides</li>
                            <li>• Problem-solution focus</li>
                            <li>• Team emphasis</li>
                        </ul>
                        <button class="btn btn-purple btn-sm">Download</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">📈 Series A</h5>
                        <p class="card-text text-muted">For startups with traction seeking Series A funding</p>
                        <ul class="list-unstyled small text-muted">
                            <li>• 15 slides</li>
                            <li>• Metrics and growth</li>
                            <li>• Market size</li>
                        </ul>
                        <button class="btn btn-purple btn-sm">Download</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">🚀 Growth Stage</h5>
                        <p class="card-text text-muted">For established startups scaling rapidly</p>
                        <ul class="list-unstyled small text-muted">
                            <li>• 20 slides</li>
                            <li>• Financial projections</li>
                            <li>• Competitive analysis</li>
                        </ul>
                        <button class="btn btn-purple btn-sm">Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
