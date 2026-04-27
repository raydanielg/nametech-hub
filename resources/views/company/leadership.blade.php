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
                <li class="breadcrumb-item active">Leadership</li>
            </ol>
        </nav>
        <div class="text-center">
            <h1 class="display-4 fw-bold text-dark mb-3">Meet Our Leadership</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Visionaries, innovators, and industry experts dedicated to building the future of entrepreneurship.</p>
        </div>
    </div>
</section>

<!-- Executive Team -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Executive Team</span>
            <h2 class="h1 fw-bold text-dark mt-2">The Visionaries</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden text-center h-100 hover-lift">
                    <div style="height: 300px; background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                        <div class="h-100 d-flex align-items-center justify-content-center">
                            <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-1">Dr. Sarah Chen</h4>
                        <p class="text-success fw-medium mb-3">Chief Executive Officer</p>
                        <p class="text-muted small mb-3">Former VP at Google with 20+ years in tech. PhD in Computer Science from MIT.</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 36px; height: 36px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 36px; height: 36px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden text-center h-100 hover-lift">
                    <div style="height: 300px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);">
                        <div class="h-100 d-flex align-items-center justify-content-center">
                            <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-1">Michael Okonkwo</h4>
                        <p class="text-success fw-medium mb-3">Chief Operations Officer</p>
                        <p class="text-muted small mb-3">Ex-McKinsey consultant with expertise in scaling operations across Africa.</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 36px; height: 36px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 36px; height: 36px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden text-center h-100 hover-lift">
                    <div style="height: 300px; background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);">
                        <div class="h-100 d-flex align-items-center justify-content-center">
                            <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-1">Amara Diallo</h4>
                        <p class="text-success fw-medium mb-3">Chief Innovation Officer</p>
                        <p class="text-muted small mb-3">Tech entrepreneur with 3 exits. Former CTO at multiple unicorns.</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 36px; height: 36px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                            <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle" style="width: 36px; height: 36px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Department Heads -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Department Heads</span>
            <h2 class="h1 fw-bold text-dark mt-2">Our Experts</h2>
        </div>
        <div class="row g-4">
            @php
            $heads = [
                ['name' => 'James Mwangi', 'role' => 'Head of Startups', 'color' => '#f59e0b'],
                ['name' => 'Fatima Al-Rashid', 'role' => 'Head of Academy', 'color' => '#ec4899'],
                ['name' => 'David Osei', 'role' => 'Head of Partnerships', 'color' => '#14b8a6'],
                ['name' => 'Priya Sharma', 'role' => 'Head of Technology', 'color' => '#6366f1'],
                ['name' => 'Jean-Pierre Dubois', 'role' => 'Head of Investment', 'color' => '#f97316'],
                ['name' => 'Nia Johnson', 'role' => 'Head of Marketing', 'color' => '#84cc16'],
            ];
            @endphp
            @foreach ($heads as $head)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm rounded-4 text-center h-100 p-3 hover-lift">
                    <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background: {{ $head['color'] }}20;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="{{ $head['color'] }}" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <h6 class="fw-bold mb-1">{{ $head['name'] }}</h6>
                    <p class="text-success small mb-0">{{ $head['role'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Advisory Board -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-success fw-bold text-uppercase tracking-wider small">Guidance</span>
            <h2 class="h1 fw-bold text-dark mt-2">Advisory Board</h2>
        </div>
        <div class="row g-4">
            @php
            $advisors = [
                ['name' => 'Prof. Wangari Maathai Jr.', 'role' => 'Environmental Innovation', 'org' => 'Green Earth Initiative'],
                ['name' => 'Elon Musa', 'role' => 'Technology Strategy', 'org' => 'Future Tech Labs'],
                ['name' => 'Oprah Winfred', 'role' => 'Community Building', 'org' => 'OW Network'],
                ['name' => 'Aliko Dangote', 'role' => 'Business Growth', 'org' => 'Dangote Group'],
            ];
            @endphp
            @foreach ($advisors as $advisor)
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 bg-dark text-white rounded-4 h-100 p-4 hover-lift">
                    <div class="rounded-circle bg-white bg-opacity-10 mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <h5 class="fw-bold mb-1">{{ $advisor['name'] }}</h5>
                    <p class="text-success small mb-2">{{ $advisor['role'] }}</p>
                    <p class="small opacity-75">{{ $advisor['org'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Join Team CTA -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="card border-0 bg-success text-white rounded-4 p-5 text-center overflow-hidden position-relative">
            <div class="position-relative" style="z-index: 2;">
                <h2 class="display-5 fw-bold mb-3">Want to Join Our Team?</h2>
                <p class="lead mb-4 opacity-75">We're always looking for passionate individuals who want to make a difference.</p>
                <a href="{{ route('company.careers') }}" class="btn btn-white btn-lg px-5 fw-bold" style="background: white; color: #10b981;">View Open Positions</a>
            </div>
            <div class="position-absolute top-0 end-0 opacity-10" style="margin: -30px;">
                <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="m22 21-3-3"/><path d="m16 15 3 3"/></svg>
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
    .tracking-wider {
        letter-spacing: 0.1em;
    }
</style>

@endsection
