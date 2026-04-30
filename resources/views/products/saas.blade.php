@extends('layouts.app')

@section('title', 'SaaS Products - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-cyan-50 to-blue-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">SaaS Products</h1>
                <p class="lead text-muted mb-4">Our proprietary software solutions designed to help startups and businesses operate more efficiently. Built by entrepreneurs, for entrepreneurs.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-cyan btn-lg fw-bold px-4">Explore Products</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Request Demo</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-cloud fa-3x text-cyan"></i>
                    </div>
                    <h5 class="text-center fw-bold">Cloud-Based</h5>
                    <p class="text-center text-muted small mb-3">Ready to use solutions</p>
                    <div class="text-center">
                        <span class="badge bg-cyan">5 Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Our Products</h2>
            <p class="lead text-muted">Software solutions to accelerate your growth</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-cyan bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-chart-bar fa-2x text-cyan"></i>
                        </div>
                        <h5 class="card-title fw-bold">HubMetrics</h5>
                        <p class="card-text text-muted small">Analytics dashboard for startups</p>
                        <button class="btn btn-cyan btn-sm">Learn More</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-tasks fa-2x text-success"></i>
                        </div>
                        <h5 class="card-title fw-bold">TaskFlow</h5>
                        <p class="card-text text-muted small">Project management for teams</p>
                        <button class="btn btn-success btn-sm">Learn More</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-purple bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-envelope fa-2x text-purple"></i>
                        </div>
                        <h5 class="card-title fw-bold">MailHub</h5>
                        <p class="card-text text-muted small">Email marketing automation</p>
                        <button class="btn btn-purple btn-sm">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
