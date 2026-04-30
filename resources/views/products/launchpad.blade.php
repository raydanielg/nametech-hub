@extends('layouts.app')

@section('title', 'Launchpad Program - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-emerald-50 to-teal-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Launchpad Program</h1>
                <p class="lead text-muted mb-4">Our flagship 6-month incubation program designed to transform your startup idea into a viable business. Get mentorship, funding, and resources.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-success btn-lg fw-bold px-4">Apply Now</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Download Brochure</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-rocket fa-3x text-success"></i>
                    </div>
                    <h5 class="text-center fw-bold">Next Cohort</h5>
                    <p class="text-center text-muted small mb-3">Starting Jan 2025</p>
                    <div class="text-center">
                        <span class="badge bg-success">Applications Open</span>
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
            <h2 class="display-5 fw-bold text-dark mb-4">What You Get</h2>
            <p class="lead text-muted">Everything you need to launch successfully</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-user-tie fa-2x text-success"></i>
                    </div>
                    <h5 class="card-title fw-bold">1:1 Mentorship</h5>
                    <p class="card-text text-muted small">Weekly sessions with industry experts</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold">Seed Funding</h5>
                    <p class="card-text text-muted small">Up to $50,000 investment</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-purple bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-building fa-2x text-purple"></i>
                    </div>
                    <h5 class="card-title fw-bold">Office Space</h5>
                    <p class="card-text text-muted small">Free desk at Innovation Hub</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-orange bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-network-wired fa-2x text-orange"></i>
                    </div>
                    <h5 class="card-title fw-bold">Network Access</h5>
                    <p class="card-text text-muted small">Connect with investors and partners</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program Structure -->
<section class="py-16 bg-light">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">6-Month Journey</h2>
            <p class="lead text-muted">Structured program to ensure your success</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-success bg-opacity-10 rounded p-3 me-3">
                                <span class="fw-bold text-success">Months 1-2</span>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Validation</h5>
                                <p class="card-text text-muted">Validate your idea, conduct market research, and define your MVP</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-primary bg-opacity-10 rounded p-3 me-3">
                                <span class="fw-bold text-primary">Months 3-4</span>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Development</h5>
                                <p class="card-text text-muted">Build your MVP, acquire first customers, and iterate based on feedback</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-purple bg-opacity-10 rounded p-3 me-3">
                                <span class="fw-bold text-purple">Month 5</span>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Growth</h5>
                                <p class="card-text text-muted">Scale your operations, optimize metrics, and prepare for funding</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-orange bg-opacity-10 rounded p-3 me-3">
                                <span class="fw-bold text-orange">Month 6</span>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Demo Day</h5>
                                <p class="card-text text-muted">Pitch to investors, graduate from the program, and join our alumni network</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
