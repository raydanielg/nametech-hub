@extends('layouts.app')

@section('title', 'Events Calendar - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-orange-50 to-red-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Events Calendar</h1>
                <p class="lead text-muted mb-4">Join our workshops, networking events, and startup meetups. Connect with entrepreneurs and industry experts.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-orange btn-lg fw-bold px-4">View Calendar</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Register for Events</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-calendar-alt fa-3x text-orange"></i>
                    </div>
                    <h5 class="text-center fw-bold">Next Event</h5>
                    <p class="text-center text-muted small mb-3">Startup Networking Night</p>
                    <div class="text-center">
                        <span class="badge bg-orange">Dec 20, 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Upcoming Events</h2>
            <p class="lead text-muted">Don't miss out on these exciting opportunities</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-orange bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-users text-orange"></i>
                            </div>
                            <div>
                                <span class="badge bg-orange">Networking</span>
                                <small class="text-muted d-block">Dec 20, 2024 • 6:00 PM</small>
                            </div>
                        </div>
                        <h5 class="card-title fw-bold">Startup Networking Night</h5>
                        <p class="card-text text-muted">Connect with fellow entrepreneurs and potential co-founders.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-map-marker-alt"></i> NAMTECH-HUB</small>
                            <button class="btn btn-orange btn-sm">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-purple bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-chalkboard-teacher text-purple"></i>
                            </div>
                            <div>
                                <span class="badge bg-purple">Workshop</span>
                                <small class="text-muted d-block">Dec 22, 2024 • 2:00 PM</small>
                            </div>
                        </div>
                        <h5 class="card-title fw-bold">Pitch Perfect Workshop</h5>
                        <p class="card-text text-muted">Learn to craft and deliver compelling investor pitches.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-map-marker-alt"></i> Online</small>
                            <button class="btn btn-purple btn-sm">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-trophy text-success"></i>
                            </div>
                            <div>
                                <span class="badge bg-success">Competition</span>
                                <small class="text-muted d-block">Jan 5, 2025 • 9:00 AM</small>
                            </div>
                        </div>
                        <h5 class="card-title fw-bold">Startup Pitch Competition</h5>
                        <p class="card-text text-muted">Compete for funding and mentorship opportunities.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-map-marker-alt"></i> Main Hall</small>
                            <button class="btn btn-success btn-sm">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
