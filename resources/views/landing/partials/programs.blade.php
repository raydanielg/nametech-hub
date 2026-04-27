<section class="programs-section py-5 py-lg-10 bg-white">
    <div class="container">
        <div class="text-center mb-5 mb-lg-10">
            <h2 class="display-5 fw-bold text-dark mb-3">Our Programs</h2>
            <p class="text-muted fs-5 mx-auto" style="max-width: 600px;">
                Accelerate your growth with our world-class incubation and training programs.
            </p>
        </div>

        <div class="row g-4">
            @foreach($programs as $program)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden group">
                    <div class="card-img-top bg-light d-flex align-items-center justify-content-center p-5" style="height: 200px;">
                         <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/></svg>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-2 rounded-pill small">{{ $program->duration }}</span>
                            <span class="fw-bold text-dark fs-5">${{ number_format($program->price) }}</span>
                        </div>
                        <h4 class="card-title fw-bold text-dark mb-3">{{ $program->title }}</h4>
                        <p class="card-text text-muted mb-4">{{ $program->description }}</p>
                        <a href="#" class="btn btn-outline-success w-100 fw-bold py-2 rounded-3 group-hover:bg-success group-hover:text-white transition-all">Apply to Program</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .group:hover .btn-outline-success {
        background-color: #10b981 !important;
        color: white !important;
        border-color: #10b981 !important;
    }
</style>
