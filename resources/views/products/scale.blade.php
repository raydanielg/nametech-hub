@extends('layouts.app')

@section('title', 'Scale Program - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-orange-50 to-red-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Scale Program</h1>
                <p class="lead text-muted mb-4">3-month intensive growth program for established startups. Accelerate your growth with expert guidance and resources.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-orange btn-lg fw-bold px-4">Apply to Scale</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Learn More</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-chart-line fa-3x text-orange"></i>
                    </div>
                    <h5 class="text-center fw-bold">Growth Focused</h5>
                    <p class="text-center text-muted small mb-3">For startups with traction</p>
                    <div class="text-center">
                        <span class="badge bg-orange">Apply Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program Benefits -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Scale Benefits</h2>
            <p class="lead text-muted">Everything you need to accelerate growth</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-orange bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-tachometer-alt fa-2x text-orange"></i>
                    </div>
                    <h5 class="card-title fw-bold">Growth Strategy</h5>
                    <p class="card-text text-muted small">Custom growth plans for your startup</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-handshake fa-2x text-success"></i>
                    </div>
                    <h5 class="card-title fw-bold">Partnerships</h5>
                    <p class="card-text text-muted small">Strategic partnership opportunities</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold">Series A Ready</h5>
                    <p class="card-text text-muted small">Prepare for next round funding</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-purple bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-users fa-2x text-purple"></i>
                    </div>
                    <h5 class="card-title fw-bold">Team Building</h5>
                    <p class="card-text text-muted small">Hire and retain top talent</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
