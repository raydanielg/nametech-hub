@extends('layouts.app')

@section('title', 'Mentor Directory - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-teal-50 to-cyan-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Mentor Directory</h1>
                <p class="lead text-muted mb-4">Connect with experienced mentors who can guide you through your startup journey. Get expert advice and industry insights.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-teal btn-lg fw-bold px-4">Find a Mentor</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Become a Mentor</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-user-tie fa-3x text-teal"></i>
                    </div>
                    <h5 class="text-center fw-bold">50+ Mentors</h5>
                    <p class="text-center text-muted small mb-3">Industry experts ready to help</p>
                    <div class="text-center">
                        <span class="badge bg-teal">Available Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Mentors -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Featured Mentors</h2>
            <p class="lead text-muted">Connect with our top-rated mentors</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="bg-teal bg-opacity-10 rounded-circle p-4 mx-auto mb-3" style="width: 100px; height: 100px;">
                            <i class="fas fa-user fa-3x text-teal"></i>
                        </div>
                        <h5 class="card-title fw-bold">John Smith</h5>
                        <p class="card-text text-muted small">Tech Entrepreneur • 15+ years</p>
                        <p class="card-text text-muted">Expert in SaaS, scaling, and product development</p>
                        <div class="d-flex justify-content-center gap-2 mb-3">
                            <span class="badge bg-teal">SaaS</span>
                            <span class="badge bg-primary">Scaling</span>
                        </div>
                        <button class="btn btn-teal btn-sm">Connect</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="bg-purple bg-opacity-10 rounded-circle p-4 mx-auto mb-3" style="width: 100px; height: 100px;">
                            <i class="fas fa-user fa-3x text-purple"></i>
                        </div>
                        <h5 class="card-title fw-bold">Sarah Johnson</h5>
                        <p class="card-text text-muted small">Marketing Expert • 12+ years</p>
                        <p class="card-text text-muted">Specialist in digital marketing and growth hacking</p>
                        <div class="d-flex justify-content-center gap-2 mb-3">
                            <span class="badge bg-purple">Marketing</span>
                            <span class="badge bg-success">Growth</span>
                        </div>
                        <button class="btn btn-purple btn-sm">Connect</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <div class="bg-orange bg-opacity-10 rounded-circle p-4 mx-auto mb-3" style="width: 100px; height: 100px;">
                            <i class="fas fa-user fa-3x text-orange"></i>
                        </div>
                        <h5 class="card-title fw-bold">Michael Chen</h5>
                        <p class="card-text text-muted small">Investor • 20+ years</p>
                        <p class="card-text text-muted">Venture capital and fundraising specialist</p>
                        <div class="d-flex justify-content-center gap-2 mb-3">
                            <span class="badge bg-orange">Investment</span>
                            <span class="badge bg-warning">Fundraising</span>
                        </div>
                        <button class="btn btn-orange btn-sm">Connect</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
