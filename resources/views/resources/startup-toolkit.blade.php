@extends('layouts.app')

@section('title', 'Startup Toolkit - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-purple-50 to-pink-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Startup Toolkit</h1>
                <p class="lead text-muted mb-4">Essential tools, templates, and resources every startup founder needs to succeed. From ideation to scaling.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-purple btn-lg fw-bold px-4">Get Started</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">View All Tools</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-toolbox fa-3x text-purple"></i>
                    </div>
                    <h5 class="text-center fw-bold">Complete Toolkit</h5>
                    <p class="text-center text-muted small mb-3">Everything you need in one place</p>
                    <div class="text-center">
                        <span class="badge bg-purple">25+ Tools</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Toolkit Categories -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Toolkit Categories</h2>
            <p class="lead text-muted">Organized tools for every stage of your startup journey</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-purple bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-lightbulb fa-2x text-purple"></i>
                        </div>
                        <h5 class="card-title fw-bold">Ideation</h5>
                        <p class="card-text text-muted small">Validate your idea and find product-market fit</p>
                        <button class="btn btn-purple btn-sm">Explore Tools</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-rocket fa-2x text-success"></i>
                        </div>
                        <h5 class="card-title fw-bold">Launch</h5>
                        <p class="card-text text-muted small">Build and launch your MVP successfully</p>
                        <button class="btn btn-success btn-sm">Explore Tools</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-primary bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold">Growth</h5>
                        <p class="card-text text-muted small">Scale your user base and revenue</p>
                        <button class="btn btn-primary btn-sm">Explore Tools</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift">
                    <div class="card-body p-4 text-center">
                        <div class="bg-warning bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                            <i class="fas fa-dollar-sign fa-2x text-warning"></i>
                        </div>
                        <h5 class="card-title fw-bold">Funding</h5>
                        <p class="card-text text-muted small">Prepare for fundraising and investor pitches</p>
                        <button class="btn btn-warning btn-sm">Explore Tools</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Tools -->
<section class="py-16 bg-light">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Featured Tools</h2>
            <p class="lead text-muted">Most popular and essential startup tools</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-purple bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-file-alt text-purple fa-lg"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="card-title fw-bold">Lean Canvas Template</h5>
                                <p class="card-text text-muted">One-page business plan template for quick validation</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <small class="text-muted"><i class="fas fa-download"></i> 3.2k downloads</small>
                                    <button class="btn btn-purple btn-sm">Download</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="bg-success bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-file-alt text-success fa-lg"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="card-title fw-bold">Financial Model Template</h5>
                                <p class="card-text text-muted">3-year financial projections with scenarios</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <small class="text-muted"><i class="fas fa-download"></i> 2.8k downloads</small>
                                    <button class="btn btn-success btn-sm">Download</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
