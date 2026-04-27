@extends('layouts.app')

@section('content')
@include('landing.partials.header')

<div class="py-10 bg-light">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="text-success text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog.latest') }}" class="text-success text-decoration-none">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $category }}</li>
                    </ol>
                </nav>

                <h1 class="display-4 fw-bold text-dark mb-4">{{ $title }}</h1>
                <p class="lead text-muted mb-5">Discover the latest stories, tutorials, and insights from the NAMTECH-HUB community.</p>

                <!-- Featured Post -->
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-5">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div style="height: 100%; min-height: 250px; background: #e5e7eb; display: flex; align-items: center; justify-content: center;">
                                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="text-muted"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body p-4 d-flex flex-column h-100">
                                <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1 small fw-bold mb-3 w-fit-content" style="width: fit-content;">Featured</span>
                                <h2 class="card-title fw-bold mb-3">The Future of Innovation in Africa</h2>
                                <p class="card-text text-muted flex-grow-1">How technology is reshaping the startup landscape across the continent and what it means for the next generation of founders.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                    </div>
                                    <div class="small">
                                        <div class="fw-bold text-dark">NAMTECH Team</div>
                                        <div class="text-muted">Oct 24, 2023 · 8 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Posts Grid -->
                <div class="row g-4">
                    @for ($i = 1; $i <= 6; $i++)
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-lift">
                            <div style="height: 200px; background: #f3f4f6; display: flex; align-items: center; justify-content: center;">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" class="text-muted opacity-50"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                            </div>
                            <div class="card-body p-4">
                                <span class="text-success fw-bold small text-uppercase tracking-wider mb-2 d-block">{{ $category }}</span>
                                <h4 class="card-title fw-bold mb-3">Building a Scalable Business Model</h4>
                                <p class="card-text text-muted small">Learn the key principles of creating a business that can grow sustainably in today's competitive market.</p>
                                <a href="#" class="btn btn-link text-success p-0 fw-bold text-decoration-none mt-3">Read More →</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                <!-- Pagination -->
                <nav class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link border-0 rounded-circle mx-1" href="#"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg></a></li>
                        <li class="page-item active"><a class="page-link border-0 rounded-circle mx-1 bg-success text-white" href="#">1</a></li>
                        <li class="page-item"><a class="page-link border-0 rounded-circle mx-1 text-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link border-0 rounded-circle mx-1 text-dark" href="#">3</a></li>
                        <li class="page-item"><a class="page-link border-0 rounded-circle mx-1 text-dark" href="#"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg></a></li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="sticky-top" style="top: 100px; z-index: 10;">
                    <!-- Search Widget -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                        <h5 class="fw-bold mb-3">Search Blog</h5>
                        <div class="input-group">
                            <input type="text" class="form-control border-light bg-light" placeholder="Search keywords...">
                            <button class="btn btn-success"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg></button>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                        <h5 class="fw-bold mb-3">Categories</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="{{ route('blog.stories') }}" class="text-decoration-none text-dark d-flex justify-content-between align-items-center p-2 rounded-2 hover-bg-light"><span>Startup Stories</span> <span class="badge bg-light text-muted rounded-pill">12</span></a></li>
                            <li class="mb-2"><a href="{{ route('blog.tutorials') }}" class="text-decoration-none text-dark d-flex justify-content-between align-items-center p-2 rounded-2 hover-bg-light"><span>Tech Tutorials</span> <span class="badge bg-light text-muted rounded-pill">25</span></a></li>
                            <li class="mb-2"><a href="{{ route('blog.insights') }}" class="text-decoration-none text-dark d-flex justify-content-between align-items-center p-2 rounded-2 hover-bg-light"><span>Industry Insights</span> <span class="badge bg-light text-muted rounded-pill">18</span></a></li>
                            <li class="mb-2"><a href="{{ route('blog.announcements') }}" class="text-decoration-none text-dark d-flex justify-content-between align-items-center p-2 rounded-2 hover-bg-light"><span>Announcements</span> <span class="badge bg-light text-muted rounded-pill">8</span></a></li>
                        </ul>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="card border-0 bg-success text-white rounded-4 p-4 mb-4 shadow-sm overflow-hidden position-relative">
                        <div class="position-relative" style="z-index: 2;">
                            <h5 class="fw-bold mb-2">Join our Newsletter</h5>
                            <p class="small opacity-75 mb-4">Get the latest insights and updates delivered straight to your inbox.</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control border-0 bg-white bg-opacity-10 text-white placeholder-white shadow-none" placeholder="Email address">
                                </div>
                                <button type="submit" class="btn btn-white w-100 fw-bold" style="background: white; color: #10b981;">Subscribe Now</button>
                            </form>
                        </div>
                        <div class="position-absolute top-0 end-0 opacity-10" style="margin-right: -20px; margin-top: -20px;">
                            <svg width="120" height="120" viewBox="0 0 24 24" fill="currentColor"><path d="M22 17a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9.5C2 7 4 5 6.5 5H18c2.5 0 4 2 4 4.5V17zM21 9.5c0-1.6-1-2.5-2.5-2.5H6.5C5 7 4 7.9 4 9.5v.5l8 5 8-5v-.5z"/></svg>
                        </div>
                    </div>

                    <!-- Recent Posts Widget -->
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h5 class="fw-bold mb-3">Recent Posts</h5>
                        <div class="d-flex mb-3">
                            <div class="rounded-3 bg-light me-3" style="width: 60px; height: 60px; min-width: 60px;"></div>
                            <div>
                                <a href="#" class="text-decoration-none text-dark fw-bold small d-block mb-1">Top 10 Tools for Startups in 2024</a>
                                <span class="text-muted extra-small" style="font-size: 0.7rem;">Oct 20, 2023</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="rounded-3 bg-light me-3" style="width: 60px; height: 60px; min-width: 60px;"></div>
                            <div>
                                <a href="#" class="text-decoration-none text-dark fw-bold small d-block mb-1">Mastering React Hooks</a>
                                <span class="text-muted extra-small" style="font-size: 0.7rem;">Oct 18, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.1) !important;
    }
    .hover-bg-light:hover {
        background-color: #f8fafc;
    }
    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        font-size: 1.2rem;
        line-height: 1;
        vertical-align: middle;
    }
    .placeholder-white::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }
    .w-fit-content {
        width: fit-content;
    }
    .bg-light {
        background-color: #f8fafc !important;
    }
</style>

@endsection
