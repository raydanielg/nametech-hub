@extends('layouts.app')

@section('content')
    @include('landing.partials.header')
    @include('landing.partials.hero')
    @include('landing.partials.partners')
    @include('landing.partials.pillars')
    @include('landing.partials.programs')
    
    @include('landing.partials.how-it-works')
    
    @include('landing.partials.testimonials')
    
    @include('landing.partials.footer')

    <!-- Floating Buttons -->
    <div class="position-fixed bottom-0 end-0 p-4 d-flex flex-column gap-3" style="z-index: 1000;">
        <button class="btn btn-success rounded-circle shadow-lg d-flex align-items-center justify-content-center" style="width: 56px; height: 56px; background-color: #10b981;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        </button>
        <button id="backToTop" class="btn btn-dark rounded-circle shadow-lg d-flex align-items-center justify-content-center opacity-0 transition-all" style="width: 44px; height: 44px;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="m18 15-6-6-6 6"/></svg>
        </button>
    </div>
@endsection

@push('scripts')
<script>
    const backToTop = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            backToTop.classList.remove('opacity-0');
        } else {
            backToTop.classList.add('opacity-0');
        }
    });
    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
@endpush

@push('styles')
<style>
    /* Custom styles for landing page */
    .tracking-tight { letter-spacing: -0.025em; }
    .tracking-wider { letter-spacing: 0.05em; }
    .shadow-2xl { box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); }
    .aspect-video { aspect-ratio: 16 / 9; }
</style>
@endpush
