@extends('layouts.app')

@section('content')
@include('landing.partials.header')

<!-- Hero Section -->
<section class="py-5" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
    <div class="container py-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('company.about') }}" class="text-white text-decoration-none">Company</a></li>
                <li class="breadcrumb-item active text-white">Become a Partner</li>
            </ol>
        </nav>
        <div class="text-center text-white">
            <h1 class="display-4 fw-bold mb-3">Become a Partner</h1>
            <p class="lead opacity-75 mx-auto" style="max-width: 700px;">Join our ecosystem of innovators, investors, and industry leaders shaping the future of technology in Africa.</p>
        </div>
    </div>
</section>

<!-- Partnership Types -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Partnership Opportunities</span>
            <h2 class="h1 fw-bold text-dark mt-2">How You Can Partner</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Corporate Partner</h4>
                    <p class="text-muted small mb-3">Access top-tier startups, innovation programs, and talent pipeline for your organization.</p>
                    <ul class="list-unstyled small text-muted mb-3">
                        <li class="mb-1">• Startup sourcing</li>
                        <li class="mb-1">• Innovation workshops</li>
                        <li class="mb-1">• Talent recruitment</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Investor Partner</h4>
                    <p class="text-muted small mb-3">Get exclusive access to vetted, investment-ready startups across various sectors.</p>
                    <ul class="list-unstyled small text-muted mb-3">
                        <li class="mb-1">• Deal flow access</li>
                        <li class="mb-1">• Due diligence support</li>
                        <li class="mb-1">• Portfolio services</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="m22 21-3-3"/><path d="m16 15 3 3"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Academic Partner</h4>
                    <p class="text-muted small mb-3">Collaborate on research, curriculum development, and student entrepreneurship.</p>
                    <ul class="list-unstyled small text-muted mb-3">
                        <li class="mb-1">• Research collaboration</li>
                        <li class="mb-1">• Student programs</li>
                        <li class="mb-1">• Faculty exchange</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 hover-lift">
                    <div class="bg-success bg-opacity-10 rounded-3 p-3 mb-3 d-inline-flex" style="width: fit-content;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                    </div>
                    <h4 class="fw-bold mb-2">Technology Partner</h4>
                    <p class="text-muted small mb-3">Provide tools, infrastructure, and technical expertise to our startup ecosystem.</p>
                    <ul class="list-unstyled small text-muted mb-3">
                        <li class="mb-1">• Cloud credits</li>
                        <li class="mb-1">• API access</li>
                        <li class="mb-1">• Technical mentorship</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Benefits -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="rounded-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('sampelsimaes/man-wearing-vr-headset-outdoor-futuristic-technology_53876-105391.jpg') }}" alt="Partnership" class="w-100 object-fit-cover" style="height: 450px;">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <span class="text-success fw-bold text-uppercase tracking-wider small">Why Partner</span>
                <h2 class="h1 fw-bold text-dark mt-2 mb-4">Benefits of Partnership</h2>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-success rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span class="fw-bold">Access to 500+ Startups</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-success rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span class="fw-bold">Brand Visibility</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-success rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span class="fw-bold">Talent Pipeline</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-success rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span class="fw-bold">Innovation Insights</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-success rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span class="fw-bold">Network Events</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-success rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 24px; height: 24px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>
                            <span class="fw-bold">Deal Flow Access</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg rounded-4 p-4 p-lg-5">
                    <div class="text-center mb-4">
                        <h2 class="h3 fw-bold">Apply to Become a Partner</h2>
                        <p class="text-muted">Fill out the form below and our partnerships team will get back to you within 48 hours.</p>
                    </div>
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Organization Name</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="Company/Institution Name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Organization Type</label>
                                <select class="form-select form-select-lg bg-light border-0">
                                    <option selected>Select type</option>
                                    <option>Corporation</option>
                                    <option>Investment Firm</option>
                                    <option>University/Research</option>
                                    <option>Technology Company</option>
                                    <option>Government</option>
                                    <option>NGO/Foundation</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Contact Person</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="Full Name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Job Title</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="Your Position">
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Email Address</label>
                                <input type="email" class="form-control form-control-lg bg-light border-0" placeholder="email@company.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Phone Number</label>
                                <input type="tel" class="form-control form-control-lg bg-light border-0" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Partnership Type</label>
                                <select class="form-select form-select-lg bg-light border-0">
                                    <option selected>Select partnership</option>
                                    <option>Corporate Partner</option>
                                    <option>Investor Partner</option>
                                    <option>Academic Partner</option>
                                    <option>Technology Partner</option>
                                    <option>Strategic Partner</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Website</label>
                                <input type="url" class="form-control form-control-lg bg-light border-0" placeholder="https://www.company.com">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-medium">Tell us about your organization and partnership goals</label>
                            <textarea class="form-control bg-light border-0" rows="5" placeholder="Describe your organization, your goals for partnership, and how you see us working together..."></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-medium">What value can you bring to our ecosystem?</label>
                            <textarea class="form-control bg-light border-0" rows="4" placeholder="Describe the resources, expertise, or opportunities you can offer to our startups and community..."></textarea>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" id="terms">
                            <label class="form-check-label text-muted small" for="terms">I agree to the <a href="#" class="text-success text-decoration-none">Terms of Partnership</a> and have authority to submit this application.</label>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg px-5 fw-bold">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Current Partners -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Trust</span>
            <h2 class="h1 fw-bold text-dark mt-2">Trusted By Industry Leaders</h2>
        </div>
        <div class="row g-4 align-items-center justify-content-center">
            @php
            $currentPartners = ['Google', 'Microsoft', 'Amazon', 'IBM', 'Oracle', 'SAP', 'Salesforce', 'Intel'];
            @endphp
            @foreach ($currentPartners as $partner)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm rounded-4 p-4 text-center hover-lift">
                    <h6 class="fw-bold text-muted mb-0">{{ $partner }}</h6>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('company.partners') }}" class="btn btn-outline-dark fw-bold px-4">View All Partners</a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">FAQ</span>
            <h2 class="h1 fw-bold text-dark mt-2">Common Questions</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-6">
                @php
                $faqs = [
                    ['q' => 'How long does the partnership review process take?', 'a' => 'We typically review applications within 5-7 business days and schedule a call to discuss the partnership further.'],
                    ['q' => 'What are the costs associated with partnership?', 'a' => 'Partnership terms vary based on the type and scope. We offer flexible arrangements tailored to mutual value creation.'],
                    ['q' => 'Can we partner if we are outside Africa?', 'a' => 'Yes! We welcome global partners who want to engage with the African innovation ecosystem.'],
                ];
                @endphp
                @foreach ($faqs as $faq)
                <div class="card border-0 shadow-sm rounded-4 p-4 mb-3">
                    <h6 class="fw-bold mb-2">{{ $faq['q'] }}</h6>
                    <p class="text-muted small mb-0">{{ $faq['a'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.15) !important;
    }
    .object-fit-cover {
        object-fit: cover;
    }
    .tracking-wider {
        letter-spacing: 0.1em;
    }
</style>

@endsection
