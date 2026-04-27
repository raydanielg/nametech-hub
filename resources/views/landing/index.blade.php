@extends('layouts.app')

@section('content')
    @include('landing.partials.header')
    @include('landing.partials.hero')
    @include('landing.partials.programs')
    
    <!-- Placeholder for Success Stories -->
    <section class="success-stories py-5 py-lg-10 bg-light">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-5">Success Stories</h2>
            <p class="text-muted">Trusted by the community.</p>
        </div>
    </section>

    @include('landing.partials.footer')
@endsection

@push('styles')
<style>
    /* Custom styles for landing page */
    .tracking-tight { letter-spacing: -0.025em; }
    .tracking-wider { letter-spacing: 0.05em; }
    .shadow-2xl { box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); }
    .aspect-video { aspect-ratio: 16 / 9; }
</style>
@endpush
