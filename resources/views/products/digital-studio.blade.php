@extends('layouts.app')

@section('title', 'Digital Studio - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-50 to-indigo-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Digital Studio</h1>
                <p class="lead text-muted mb-4">Our in-house development team builds custom software solutions for startups and enterprises. From MVPs to enterprise applications.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-primary btn-lg fw-bold px-4">Start Project</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">View Portfolio</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h5 class="text-center fw-bold">Expert Developers</h5>
                    <p class="text-center text-muted small mb-3">50+ projects delivered</p>
                    <div class="text-center">
                        <span class="badge bg-primary">Available</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Our Services</h2>
            <p class="lead text-muted">End-to-end digital solutions for your business</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-primary bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-mobile-alt fa-2x text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold">Mobile Apps</h5>
                        <p class="card-text text-muted small">iOS and Android app development</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-globe fa-2x text-success"></i>
                        </div>
                        <h5 class="card-title fw-bold">Web Applications</h5>
                        <p class="card-text text-muted small">Custom web app development</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-purple bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-database fa-2x text-purple"></i>
                        </div>
                        <h5 class="card-title fw-bold">Backend Systems</h5>
                        <p class="card-text text-muted small">APIs and database architecture</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="py-16 bg-light">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Our Process</h2>
            <p class="lead text-muted">From idea to deployment in 4 simple steps</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px;">
                        <span class="fw-bold fs-4">1</span>
                    </div>
                    <h5 class="fw-bold">Discovery</h5>
                    <p class="text-muted small">Understand your requirements</p>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="text-center">
                    <div class="bg-success text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px;">
                        <span class="fw-bold fs-4">2</span>
                    </div>
                    <h5 class="fw-bold">Design</h5>
                    <p class="text-muted small">Create wireframes and prototypes</p>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="text-center">
                    <div class="bg-purple text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px;">
                        <span class="fw-bold fs-4">3</span>
                    </div>
                    <h5 class="fw-bold">Development</h5>
                    <p class="text-muted small">Build and test your solution</p>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="text-center">
                    <div class="bg-orange text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px;">
                        <span class="fw-bold fs-4">4</span>
                    </div>
                    <h5 class="fw-bold">Launch</h5>
                    <p class="text-muted small">Deploy and support your app</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
