@extends('layouts.app')

@section('title', 'NAMTECH Academy - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-indigo-50 to-purple-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">NAMTECH Academy</h1>
                <p class="lead text-muted mb-4">Master entrepreneurship and technology skills through our comprehensive online courses and bootcamps. Learn from industry experts.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-indigo btn-lg fw-bold px-4">Browse Courses</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Start Learning</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-indigo"></i>
                    </div>
                    <h5 class="text-center fw-bold">5000+ Students</h5>
                    <p class="text-center text-muted small mb-3">Learn at your own pace</p>
                    <div class="text-center">
                        <span class="badge bg-indigo">Enroll Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Course Categories -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Course Categories</h2>
            <p class="lead text-muted">Explore our wide range of courses</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="bg-indigo bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-rocket fa-2x text-indigo"></i>
                    </div>
                    <h5 class="card-title fw-bold">Entrepreneurship</h5>
                    <p class="card-text text-muted small">Start and grow your business</p>
                    <span class="badge bg-indigo">15 Courses</span>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-code fa-2x text-success"></i>
                    </div>
                    <h5 class="card-title fw-bold">Development</h5>
                    <p class="card-text text-muted small">Learn programming and web dev</p>
                    <span class="badge bg-success">20 Courses</span>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="bg-purple bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-bullhorn fa-2x text-purple"></i>
                    </div>
                    <h5 class="card-title fw-bold">Marketing</h5>
                    <p class="card-text text-muted small">Digital marketing strategies</p>
                    <span class="badge bg-purple">12 Courses</span>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="bg-orange bg-opacity-10 rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-chart-line fa-2x text-orange"></i>
                    </div>
                    <h5 class="card-title fw-bold">Business</h5>
                    <p class="card-text text-muted small">Finance and management</p>
                    <span class="badge bg-orange">18 Courses</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Courses -->
<section class="py-16 bg-light">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Featured Courses</h2>
            <p class="lead text-muted">Most popular courses among our students</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-indigo bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-play text-indigo"></i>
                            </div>
                            <div class="flex-grow-1">
                                <span class="badge bg-indigo mb-2">Bestseller</span>
                                <h5 class="card-title fw-bold">Startup Fundamentals</h5>
                                <p class="card-text text-muted small">Complete guide to starting your business</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-users"></i> 1,234 students</small>
                            <button class="btn btn-indigo btn-sm">Enroll Now</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-success bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-play text-success"></i>
                            </div>
                            <div class="flex-grow-1">
                                <span class="badge bg-success mb-2">New</span>
                                <h5 class="card-title fw-bold">Web Development Bootcamp</h5>
                                <p class="card-text text-muted small">Learn HTML, CSS, JavaScript, and more</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-users"></i> 892 students</small>
                            <button class="btn btn-success btn-sm">Enroll Now</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-purple bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-play text-purple"></i>
                            </div>
                            <div class="flex-grow-1">
                                <span class="badge bg-purple mb-2">Popular</span>
                                <h5 class="card-title fw-bold">Digital Marketing Mastery</h5>
                                <p class="card-text text-muted small">Complete digital marketing strategies</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-users"></i> 756 students</small>
                            <button class="btn btn-purple btn-sm">Enroll Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
