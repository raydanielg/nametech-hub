@extends('layouts.app')

@section('title', 'Hackathons - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-purple-50 to-pink-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Hackathons & Competitions</h1>
                <p class="lead text-muted mb-4">Join our exciting hackathons and coding competitions. Build innovative solutions, win prizes, and connect with talented developers.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-purple btn-lg fw-bold px-4">Join Next Hackathon</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">View Past Events</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-trophy fa-3x text-purple"></i>
                    </div>
                    <h5 class="text-center fw-bold">Win Big Prizes</h5>
                    <p class="text-center text-muted small mb-3">Up to $10,000 in prizes</p>
                    <div class="text-center">
                        <span class="badge bg-purple">Register Now</span>
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
            <h2 class="display-5 fw-bold text-dark mb-4">Upcoming Hackathons</h2>
            <p class="lead text-muted">Don't miss these exciting opportunities</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-purple bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-laptop-code text-purple"></i>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Startup Weekend</h5>
                                <span class="badge bg-purple">48 hours</span>
                            </div>
                        </div>
                        <p class="card-text text-muted">Build a startup from idea to MVP in one weekend</p>
                        <button class="btn btn-purple btn-sm">Register</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-pink bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-mobile-alt text-pink"></i>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Mobile App Challenge</h5>
                                <span class="badge bg-pink">24 hours</span>
                            </div>
                        </div>
                        <p class="card-text text-muted">Create innovative mobile applications</p>
                        <button class="btn btn-pink btn-sm">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
