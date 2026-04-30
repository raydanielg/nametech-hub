@extends('layouts.app')

@section('title', 'Webinars - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-emerald-50 to-teal-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Expert Webinars</h1>
                <p class="lead text-muted mb-4">Learn from industry experts through our exclusive webinar series covering startup growth, technology trends, and business innovation.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-success btn-lg fw-bold px-4">Join Next Webinar</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Browse Archive</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-video fa-3x text-success"></i>
                    </div>
                    <h5 class="text-center fw-bold">Next Webinar</h5>
                    <p class="text-center text-muted small mb-3">Scaling Your Startup: From MVP to Market Leader</p>
                    <div class="text-center">
                        <span class="badge bg-success">Live in 2 days</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Webinars -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Upcoming Webinars</h2>
            <p class="lead text-muted">Register now for our upcoming live sessions</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="fas fa-rocket text-success"></i>
                            </div>
                            <div>
                                <span class="badge bg-success">Upcoming</span>
                                <small class="text-muted d-block">Dec 15, 2024 • 2:00 PM</small>
                            </div>
                        </div>
                        <h5 class="card-title fw-bold">Startup Funding 101</h5>
                        <p class="card-text text-muted">Learn the essentials of raising capital for your startup from seed to series A.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-users"></i> 247 registered</small>
                            <button class="btn btn-success btn-sm">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="fas fa-code text-primary"></i>
                            </div>
                            <div>
                                <span class="badge bg-primary">Technical</span>
                                <small class="text-muted d-block">Dec 18, 2024 • 3:00 PM</small>
                            </div>
                        </div>
                        <h5 class="card-title fw-bold">Building Scalable APIs</h5>
                        <p class="card-text text-muted">Best practices for designing and implementing robust APIs that can scale.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-users"></i> 189 registered</small>
                            <button class="btn btn-success btn-sm">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="fas fa-chart-line text-warning"></i>
                            </div>
                            <div>
                                <span class="badge bg-warning">Business</span>
                                <small class="text-muted d-block">Dec 22, 2024 • 1:00 PM</small>
                            </div>
                        </div>
                        <h5 class="card-title fw-bold">Digital Marketing Strategies</h5>
                        <p class="card-text text-muted">Effective marketing strategies for startups on a limited budget.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-users"></i> 312 registered</small>
                            <button class="btn btn-success btn-sm">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Past Webinars -->
<section class="py-16 bg-light">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Past Webinars</h2>
            <p class="lead text-muted">Watch recordings of our previous sessions</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="ratio ratio-16x9 bg-dark rounded mb-3">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-play-circle text-white fa-3x"></i>
                            </div>
                        </div>
                        <h6 class="card-title fw-bold">Product-Market Fit</h6>
                        <p class="card-text text-muted small">Finding the perfect market for your product</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-eye"></i> 1.2k views</small>
                            <button class="btn btn-outline-success btn-sm">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="ratio ratio-16x9 bg-dark rounded mb-3">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-play-circle text-white fa-3x"></i>
                            </div>
                        </div>
                        <h6 class="card-title fw-bold">Team Building</h6>
                        <p class="card-text text-muted small">Hiring and retaining top talent</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-eye"></i> 987 views</small>
                            <button class="btn btn-outline-success btn-sm">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="ratio ratio-16x9 bg-dark rounded mb-3">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-play-circle text-white fa-3x"></i>
                            </div>
                        </div>
                        <h6 class="card-title fw-bold">Legal Basics</h6>
                        <p class="card-text text-muted small">Essential legal knowledge for founders</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-eye"></i> 756 views</small>
                            <button class="btn btn-outline-success btn-sm">Watch</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <button class="btn btn-outline-dark btn-lg fw-bold px-4">View All Past Webinars</button>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-success text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Become a Webinar Speaker</h2>
        <p class="lead mb-6">Share your expertise with our community of entrepreneurs and innovators</p>
        <button class="btn btn-light btn-lg fw-bold px-4 text-dark">Apply to Speak</button>
    </div>
</section>
@endsection
