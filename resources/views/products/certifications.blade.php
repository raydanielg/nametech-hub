@extends('layouts.app')

@section('title', 'Certifications - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-50 to-indigo-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Industry Certifications</h1>
                <p class="lead text-muted mb-4">Get certified in entrepreneurship, technology, and business skills. Our certifications are recognized by industry leaders and investors.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-blue btn-lg fw-bold px-4">Get Certified</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">View Programs</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-certificate fa-3x text-blue"></i>
                    </div>
                    <h5 class="text-center fw-bold">Industry Recognized</h5>
                    <p class="text-center text-muted small mb-3">Boost your credibility</p>
                    <div class="text-center">
                        <span class="badge bg-blue">Available Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certification Programs -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Certification Programs</h2>
            <p class="lead text-muted">Choose your path to professional recognition</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="bg-blue bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-rocket fa-2x text-blue"></i>
                        </div>
                        <h5 class="card-title fw-bold">Startup Founder</h5>
                        <p class="card-text text-muted small">Complete entrepreneurship certification</p>
                        <button class="btn btn-blue btn-sm">Learn More</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-code fa-2x text-success"></i>
                        </div>
                        <h5 class="card-title fw-bold">Full-Stack Developer</h5>
                        <p class="card-text text-muted small">Modern web development certification</p>
                        <button class="btn btn-success btn-sm">Learn More</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="bg-purple bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-chart-line fa-2x text-purple"></i>
                        </div>
                        <h5 class="card-title fw-bold">Digital Marketer</h5>
                        <p class="card-text text-muted small">Digital marketing mastery certification</p>
                        <button class="btn btn-purple btn-sm">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
