@extends('layouts.app')

@section('title', 'Bootcamps - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-red-50 to-orange-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Intensive Bootcamps</h1>
                <p class="lead text-muted mb-4">Immersive, hands-on training programs designed to accelerate your learning. Master new skills in weeks, not months.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-red btn-lg fw-bold px-4">Join Bootcamp</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">View Schedule</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-fire fa-3x text-red"></i>
                    </div>
                    <h5 class="text-center fw-bold">Intensive Learning</h5>
                    <p class="text-center text-muted small mb-3">2-4 week programs</p>
                    <div class="text-center">
                        <span class="badge bg-red">Enrolling Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Bootcamps -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Upcoming Bootcamps</h2>
            <p class="lead text-muted">Join our intensive training programs</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-red bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-code text-red"></i>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Full-Stack Development</h5>
                                <span class="badge bg-red">4 weeks</span>
                            </div>
                        </div>
                        <p class="card-text text-muted">Learn modern web development from scratch</p>
                        <button class="btn btn-red btn-sm">Apply Now</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-orange bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-bullhorn text-orange"></i>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Digital Marketing</h5>
                                <span class="badge bg-orange">2 weeks</span>
                            </div>
                        </div>
                        <p class="card-text text-muted">Master digital marketing strategies and tools</p>
                        <button class="btn btn-orange btn-sm">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
