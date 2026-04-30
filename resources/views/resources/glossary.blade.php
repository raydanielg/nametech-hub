@extends('layouts.app')

@section('title', 'Glossary - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-amber-50 to-yellow-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Startup Glossary</h1>
                <p class="lead text-muted mb-4">Understand the language of startups and technology. Comprehensive definitions of terms every entrepreneur should know.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-amber btn-lg fw-bold px-4">Browse Terms</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Search Glossary</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-book fa-3x text-amber"></i>
                    </div>
                    <h5 class="text-center fw-bold">200+ Terms</h5>
                    <p class="text-center text-muted small mb-3">Complete startup vocabulary</p>
                    <div class="text-center">
                        <span class="badge bg-amber">A-Z Guide</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Terms -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Popular Terms</h2>
            <p class="lead text-muted">Most searched startup terms</p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="glossaryAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#term1">
                                MVP (Minimum Viable Product)
                            </button>
                        </h2>
                        <div id="term1" class="accordion-collapse collapse show" data-bs-parent="#glossaryAccordion">
                            <div class="accordion-body">
                                <strong>Definition:</strong> The most basic version of a product that can be released to market with core features. It allows startups to test assumptions and gather user feedback with minimal investment.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#term2">
                                Product-Market Fit
                            </button>
                        </h2>
                        <div id="term2" class="accordion-collapse collapse" data-bs-parent="#glossaryAccordion">
                            <div class="accordion-body">
                                <strong>Definition:</strong> The point at which a company's product meets strong market demand. It's when you have the right product in the right market at the right time.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#term3">
                                Burn Rate
                            </button>
                        </h2>
                        <div id="term3" class="accordion-collapse collapse" data-bs-parent="#glossaryAccordion">
                            <div class="accordion-body">
                                <strong>Definition:</strong> The rate at which a company is spending its capital before generating positive cash flow. Usually expressed as monthly cash burn.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
