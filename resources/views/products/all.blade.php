@extends('layouts.app')

@section('title', 'All Products - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-gray-50 to-slate-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">All Products</h1>
                <p class="lead text-muted mb-4">Explore our complete range of products and services designed to help startups and entrepreneurs succeed at every stage.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-dark btn-lg fw-bold px-4">Browse All</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Get Consultation</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-th fa-3x text-dark"></i>
                    </div>
                    <h5 class="text-center fw-bold">15+ Products</h5>
                    <p class="text-center text-muted small mb-3">Complete startup ecosystem</p>
                    <div class="text-center">
                        <span class="badge bg-dark">View All</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Overview -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Product Categories</h2>
            <p class="lead text-muted">Everything you need in one place</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">🚀 Launchpad</h5>
                        <p class="card-text text-muted">6-month incubation program for early-stage startups</p>
                        <a href="/products/launchpad" class="btn btn-outline-dark btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">📈 Scale</h5>
                        <p class="card-text text-muted">3-month growth program for established startups</p>
                        <a href="/products/scale" class="btn btn-outline-dark btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">🎓 Academy</h5>
                        <p class="card-text text-muted">Online courses and bootcamps for entrepreneurs</p>
                        <a href="/products/academy" class="btn btn-outline-dark btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">🏢 Innovation Hub</h5>
                        <p class="card-text text-muted">Coworking space and community for founders</p>
                        <a href="/products/innovation-hub" class="btn btn-outline-dark btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">💻 Digital Studio</h5>
                        <p class="card-text text-muted">Custom software development services</p>
                        <a href="/products/digital-studio" class="btn btn-outline-dark btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">☁️ SaaS Products</h5>
                        <p class="card-text text-muted">Proprietary software tools for startups</p>
                        <a href="/products/saas" class="btn btn-outline-dark btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
