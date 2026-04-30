@extends('layouts.app')

@section('title', 'Help Center & FAQ - NAMTECH-HUB')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-indigo-50 to-blue-100 py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-4">Help Center & FAQ</h1>
                <p class="lead text-muted mb-4">Find answers to common questions about our programs, services, and how NAMTECH-HUB can help your startup succeed.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-indigo btn-lg fw-bold px-4">Browse FAQs</button>
                    <button class="btn btn-outline-dark btn-lg fw-bold px-4">Contact Support</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-lg p-4">
                    <div class="text-center mb-3">
                        <i class="fas fa-question-circle fa-3x text-indigo"></i>
                    </div>
                    <h5 class="text-center fw-bold">Need Help?</h5>
                    <p class="text-center text-muted small mb-3">Our support team is here for you</p>
                    <div class="text-center">
                        <span class="badge bg-indigo">24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Categories -->
<section class="py-16">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="display-5 fw-bold text-dark mb-4">Frequently Asked Questions</h2>
            <p class="lead text-muted">Quick answers to common questions</p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What is NAMTECH-HUB?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                NAMTECH-HUB is Namibia's premier startup incubator and accelerator. We provide entrepreneurs with the resources, mentorship, and funding they need to build successful businesses.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How do I apply to the Launchpad program?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can apply to Launchpad through our online application portal. The process includes submitting your business idea, team information, and a short pitch. Applications are reviewed on a rolling basis.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What types of startups do you support?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We support startups across various sectors including technology, fintech, healthtech, agritech, and social impact. We look for innovative ideas with strong growth potential and dedicated founding teams.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
