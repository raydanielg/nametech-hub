@extends('layouts.app')

@section('title', 'Resource Library - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-50 to-indigo-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Resource Library</h1>
                <p class="lead text-muted mb-4">Access our comprehensive collection of templates, guides, toolkits, and resources designed to accelerate your startup journey.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-primary btn-lg fw-bold px-4">Browse Resources</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Request Resource</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-book-open fa-3x text-primary"></i>
                    </div>
                    <h5 class="text-center fw-bold">500+ Resources</h5>
                    <p class="text-center text-muted small mb-3">Templates, guides, and tools for founders</p>
                    <div class="text-center">
                        <span class="badge bg-primary">Updated Daily</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Search and Filter -->
<section class="py-8 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="bg-white rounded-4 shadow-sm p-4">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="fas fa-search text-muted"></i>
                                </span>
                                <input type="text" class="form-control border-start-0" placeholder="Search resources...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select">
                                <option>All Categories</option>
                                <option>Business Plans</option>
                                <option>Marketing</option>
                                <option>Legal</option>
                                <option>Finance</option>
                                <option>Technology</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Resource Categories -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Browse by Category</h2>
            <p class="lead text-muted">Find exactly what you need organized by topic</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-briefcase fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold">Business Plans</h5>
                    <p class="card-text text-muted small">Templates and examples for creating compelling business plans</p>
                    <span class="badge bg-primary">45 Resources</span>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="bg-success bg-opacity-10 rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-bullhorn fa-2x text-success"></i>
                    </div>
                    <h5 class="card-title fw-bold">Marketing</h5>
                    <p class="card-text text-muted small">Marketing strategies, templates, and growth hacking guides</p>
                    <span class="badge bg-success">62 Resources</span>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="bg-warning bg-opacity-10 rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-gavel fa-2x text-warning"></i>
                    </div>
                    <h5 class="card-title fw-bold">Legal</h5>
                    <p class="card-text text-muted small">Legal templates, compliance guides, and contract examples</p>
                    <span class="badge bg-warning">38 Resources</span>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="bg-info bg-opacity-10 rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-chart-line fa-2x text-info"></i>
                    </div>
                    <h5 class="card-title fw-bold">Finance</h5>
                    <p class="card-text text-muted small">Financial models, fundraising templates, and budget guides</p>
                    <span class="badge bg-info">51 Resources</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Resources -->
<section class="py-16 bg-light">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Featured Resources</h2>
            <p class="lead text-muted">Most popular and highly recommended resources</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-success bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-file-alt text-success"></i>
                            </div>
                            <div class="flex-grow-1">
                                <span class="badge bg-success mb-2">Business Plan</span>
                                <h5 class="card-title fw-bold">Startup Business Plan Template</h5>
                                <p class="card-text text-muted small">Comprehensive template with examples and financial projections</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-download"></i> 2.3k downloads</small>
                            <button class="btn btn-success btn-sm">Download</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-file-alt text-primary"></i>
                            </div>
                            <div class="flex-grow-1">
                                <span class="badge bg-primary mb-2">Pitch Deck</span>
                                <h5 class="card-title fw-bold">Investor Pitch Deck Template</h5>
                                <p class="card-text text-muted small">Professional pitch deck template with 15+ slides</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-download"></i> 1.8k downloads</small>
                            <button class="btn btn-primary btn-sm">Download</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-warning bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-file-alt text-warning"></i>
                            </div>
                            <div class="flex-grow-1">
                                <span class="badge bg-warning mb-2">Financial</span>
                                <h5 class="card-title fw-bold">Startup Financial Model</h5>
                                <p class="card-text text-muted small">Excel template with 3-year projections and scenarios</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fas fa-download"></i> 1.5k downloads</small>
                            <button class="btn btn-warning btn-sm">Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-primary text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Contribute Your Resources</h2>
        <p class="lead mb-6">Share your expertise by contributing templates and guides to help other founders</p>
        <button class="btn btn-light btn-lg fw-bold px-4 text-dark">Submit Resource</button>
    </div>
</section>
@endsection
