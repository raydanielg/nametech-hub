@extends('layouts.app')

@section('title', 'Community Forum - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-teal-50 to-cyan-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Community Forum</h1>
                <p class="lead text-muted mb-4">Connect with fellow entrepreneurs, ask questions, share experiences, and get advice from our vibrant community of founders and experts.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-teal btn-lg fw-bold px-4">Join Discussion</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Browse Topics</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-comments fa-3x text-teal"></i>
                    </div>
                    <h5 class="text-center fw-bold">Active Community</h5>
                    <p class="text-center text-muted small mb-3">500+ members online</p>
                    <div class="text-center">
                        <span class="badge bg-teal">Join Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Forum Categories -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Forum Categories</h2>
            <p class="lead text-muted">Find discussions that interest you</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-teal bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-lightbulb text-teal"></i>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Startup Ideas</h5>
                                <span class="badge bg-teal">245 topics</span>
                            </div>
                        </div>
                        <p class="card-text text-muted small">Share and validate your startup ideas</p>
                        <button class="btn btn-teal btn-sm">View Topics</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-purple bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-code text-purple"></i>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Technical Help</h5>
                                <span class="badge bg-purple">189 topics</span>
                            </div>
                        </div>
                        <p class="card-text text-muted small">Get help with development and tech</p>
                        <button class="btn btn-purple btn-sm">View Topics</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-orange bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-dollar-sign text-orange"></i>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Funding</h5>
                                <span class="badge bg-orange">156 topics</span>
                            </div>
                        </div>
                        <p class="card-text text-muted small">Discuss fundraising and investment</p>
                        <button class="btn btn-orange btn-sm">View Topics</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
