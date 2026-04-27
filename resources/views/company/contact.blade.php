@extends('layouts.app')

@section('content')
@include('landing.partials.header')

<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-success text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('company.about') }}" class="text-success text-decoration-none">Company</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
        </nav>
        <div class="text-center">
            <h1 class="display-4 fw-bold text-dark mb-3">Get in Touch</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Have a question, partnership inquiry, or just want to say hello? We'd love to hear from you.</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <h3 class="h4 fw-bold mb-4">Contact Information</h3>
                    
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <div class="bg-success bg-opacity-10 rounded-3 p-2 me-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                                </div>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Visit Us</h6>
                                <p class="text-muted small mb-0">Innovation Hub Tower<br>123 Tech Avenue<br>Nairobi, Kenya 00100</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0">
                                <div class="bg-success bg-opacity-10 rounded-3 p-2 me-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                </div>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Email Us</h6>
                                <p class="text-muted small mb-0">info@namtechhub.com<br>support@namtechhub.com</p>
                            </div>
                        </div>
                        
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="bg-success bg-opacity-10 rounded-3 p-2 me-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                </div>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Call Us</h6>
                                <p class="text-muted small mb-0">+254 700 123 456<br>+234 800 789 012</p>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 bg-dark text-white rounded-4 p-4">
                        <h6 class="fw-bold mb-3">Office Hours</h6>
                        <p class="small mb-2"><span class="opacity-75">Monday - Friday:</span> 8:00 AM - 6:00 PM</p>
                        <p class="small mb-2"><span class="opacity-75">Saturday:</span> 10:00 AM - 2:00 PM</p>
                        <p class="small mb-0"><span class="opacity-75">Sunday:</span> Closed</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg rounded-4 p-4 p-lg-5">
                    <h3 class="h4 fw-bold mb-4">Send us a Message</h3>
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">First Name</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="John">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Last Name</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="Doe">
                            </div>
                        </div>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Email Address</label>
                                <input type="email" class="form-control form-control-lg bg-light border-0" placeholder="john@example.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Phone Number</label>
                                <input type="tel" class="form-control form-control-lg bg-light border-0" placeholder="+254 700 000 000">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-medium">Subject</label>
                            <select class="form-select form-select-lg bg-light border-0">
                                <option selected>Select a subject</option>
                                <option>General Inquiry</option>
                                <option>Partnership Opportunity</option>
                                <option>Startup Application</option>
                                <option>Media Inquiry</option>
                                <option>Careers</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-medium">Message</label>
                            <textarea class="form-control bg-light border-0" rows="6" placeholder="How can we help you?"></textarea>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" id="privacy">
                            <label class="form-check-label text-muted small" for="privacy">I agree to the <a href="#" class="text-success text-decoration-none">Privacy Policy</a> and processing of my personal data.</label>
                        </div>

                        <button type="submit" class="btn btn-success btn-lg px-5 fw-bold">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-4">
            <h3 class="h4 fw-bold">Find Us</h3>
            <p class="text-muted">We're located in the heart of Nairobi's tech district</p>
        </div>
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div style="height: 400px; background: #e5e7eb; display: flex; align-items: center; justify-content: center;">
                <div class="text-center">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="1.5" class="mb-3"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <h5 class="fw-bold text-dark">Innovation Hub Tower</h5>
                    <p class="text-muted">123 Tech Avenue, Nairobi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Other Locations -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Our Locations</span>
            <h2 class="h1 fw-bold text-dark mt-2">Other Offices</h2>
        </div>
        <div class="row g-4">
            @php
            $locations = [
                ['city' => 'Lagos', 'country' => 'Nigeria', 'address' => '45 Innovation Street, Victoria Island'],
                ['city' => 'Cape Town', 'country' => 'South Africa', 'address' => '78 Tech Park, Woodstock'],
                ['city' => 'Kigali', 'country' => 'Rwanda', 'address' => '12 KG Avenue, Kigali Heights'],
                ['city' => 'Accra', 'country' => 'Ghana', 'address' => '89 East Legon Road'],
            ];
            @endphp
            @foreach ($locations as $loc)
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                    <h5 class="fw-bold mb-1">{{ $loc['city'] }}</h5>
                    <p class="text-success small mb-2">{{ $loc['country'] }}</p>
                    <p class="text-muted small mb-0">{{ $loc['address'] }}</p>
                </div>
            </div>
            @endforeach
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
    .tracking-wider {
        letter-spacing: 0.1em;
    }
</style>

@endsection
