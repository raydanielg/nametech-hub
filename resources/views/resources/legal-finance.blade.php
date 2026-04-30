@extends('layouts.app')

@section('title', 'Legal & Finance - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-slate-50 to-gray-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Legal & Finance</h1>
                <p class="lead text-muted mb-4">Essential legal and financial resources for startups. Templates, guides, and compliance tools to protect and grow your business.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-slate btn-lg fw-bold px-4">Browse Resources</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Get Expert Help</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-balance-scale fa-3x text-slate"></i>
                    </div>
                    <h5 class="text-center fw-bold">Compliance Ready</h5>
                    <p class="text-center text-muted small mb-3">Legal templates included</p>
                    <div class="text-center">
                        <span class="badge bg-slate">Protected</span>
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
            <h2 class="display-5 fw-bold text-dark mb-4">Resource Categories</h2>
            <p class="lead text-muted">Everything you need for legal and financial compliance</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-slate bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-file-contract text-slate"></i>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Legal Templates</h5>
                                <p class="card-text text-muted small">Founder agreements, NDAs, terms of service</p>
                                <button class="btn btn-slate btn-sm">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-green bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-calculator text-green"></i>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Financial Models</h5>
                                <p class="card-text text-muted small">Budget templates, financial projections</p>
                                <button class="btn btn-green btn-sm">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-blue bg-opacity-10 rounded p-3 me-3">
                                <i class="fas fa-shield-alt text-blue"></i>
                            </div>
                            <div>
                                <h5 class="card-title fw-bold">Compliance Guides</h5>
                                <p class="card-text text-muted small">GDPR, data protection, regulations</p>
                                <button class="btn btn-blue btn-sm">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
