@extends('layouts.app')

@section('title', 'Innovation Hub - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-green-50 to-emerald-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Innovation Hub</h1>
                <p class="lead text-muted mb-4">Our state-of-the-art coworking space designed for innovators, entrepreneurs, and creators. Collaborate, innovate, and grow in a vibrant ecosystem.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-success btn-lg fw-bold px-4">Book a Tour</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">View Membership Plans</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-building fa-3x text-success"></i>
                    </div>
                    <h5 class="text-center fw-bold">Premium Facilities</h5>
                    <p class="text-center text-muted small mb-3">5000+ sqft of innovation space</p>
                    <div class="text-center">
                        <span class="badge bg-success">Open Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Hub Features</h2>
            <p class="lead text-muted">Everything you need to build and grow your startup</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-wifi fa-2x text-success"></i>
                    </div>
                    <h5 class="card-title fw-bold">High-Speed Internet</h5>
                    <p class="card-text text-muted small">Fiber optic connectivity throughout the hub</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-door-open fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold">24/7 Access</h5>
                    <p class="card-text text-muted small">Round-the-clock access for members</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-purple bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-users fa-2x text-purple"></i>
                    </div>
                    <h5 class="card-title fw-bold">Meeting Rooms</h5>
                    <p class="card-text text-muted small">Bookable meeting and conference rooms</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <div class="bg-orange bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-coffee fa-2x text-orange"></i>
                    </div>
                    <h5 class="card-title fw-bold">Coffee & Lounge</h5>
                    <p class="card-text text-muted small">Fully stocked kitchen and lounge areas</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Membership Plans -->
<section class="py-16 bg-light">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Membership Plans</h2>
            <p class="lead text-muted">Choose the plan that fits your needs</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <h5 class="card-title fw-bold">Hot Desk</h5>
                        <h3 class="text-success fw-bold">$150<span class="text-muted fw-normal">/month</span></h3>
                        <ul class="list-unstyled my-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Access to common areas</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>High-speed WiFi</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Coffee & tea</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Community events</li>
                        </ul>
                        <button class="btn btn-outline-success w-100">Choose Plan</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm border-success border-2">
                    <div class="card-body p-4 text-center">
                        <span class="badge bg-success mb-2">POPULAR</span>
                        <h5 class="card-title fw-bold">Dedicated Desk</h5>
                        <h3 class="text-success fw-bold">$300<span class="text-muted fw-normal">/month</span></h3>
                        <ul class="list-unstyled my-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Everything in Hot Desk</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Your own desk</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Storage locker</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>10 hours meeting room</li>
                        </ul>
                        <button class="btn btn-success w-100">Choose Plan</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <h5 class="card-title fw-bold">Private Office</h5>
                        <h3 class="text-success fw-bold">$800<span class="text-muted fw-normal">/month</span></h3>
                        <ul class="list-unstyled my-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Everything in Dedicated Desk</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private office space</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Unlimited meeting rooms</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Dedicated internet line</li>
                        </ul>
                        <button class="btn btn-outline-success w-100">Choose Plan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
