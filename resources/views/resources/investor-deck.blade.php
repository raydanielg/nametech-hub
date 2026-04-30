@extends('layouts.app')

@section('title', 'Investor Deck Guide - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-emerald-50 to-teal-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Investor Deck Guide</h1>
                <p class="lead text-muted mb-4">Complete guide to creating compelling investor presentations. Learn what investors look for and how to structure your pitch for maximum impact.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-emerald btn-lg fw-bold px-4">Download Guide</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">View Examples</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-chart-pie fa-3x text-emerald"></i>
                    </div>
                    <h5 class="text-center fw-bold">Investor-Ready</h5>
                    <p class="text-center text-muted small mb-3">Templates that get funded</p>
                    <div class="text-center">
                        <span class="badge bg-emerald">Proven Success</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Deck Structure -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Perfect Deck Structure</h2>
            <p class="lead text-muted">10 essential slides every investor deck needs</p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-emerald me-2">1</span>
                                    <h6 class="card-title fw-bold mb-0">Cover Slide</h6>
                                </div>
                                <p class="card-text text-muted small">Company name, logo, and one-line pitch</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-emerald me-2">2</span>
                                    <h6 class="card-title fw-bold mb-0">Problem</h6>
                                </div>
                                <p class="card-text text-muted small">Clear problem statement with market size</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-emerald me-2">3</span>
                                    <h6 class="card-title fw-bold mb-0">Solution</h6>
                                </div>
                                <p class="card-text text-muted small">Your product and how it solves the problem</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-emerald me-2">4</span>
                                    <h6 class="card-title fw-bold mb-0">Market Size</h6>
                                </div>
                                <p class="card-text text-muted small">TAM, SAM, SOM with supporting data</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
