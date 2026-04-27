<section class="testimonials-section py-5 py-lg-10 bg-white overflow-hidden">
    <div class="container mb-5">
        <div class="d-flex justify-content-between align-items-end">
            <div>
                <span class="text-success fw-bold text-uppercase small tracking-widest mb-2 d-block">Testimonials</span>
                <h2 class="display-5 fw-bold text-dark mb-0">Trusted by the community</h2>
            </div>
        </div>
    </div>

    <!-- Scrolling Wall of Testimonials -->
    <div class="testimonial-wall position-relative mt-5">
        <!-- Track 1: Moving Right -->
        <div class="testimonial-track track-right mb-4">
            <div class="track-content">
                @foreach($testimonials as $t)
                <div class="testimonial-card shadow-sm border p-4 rounded-4 bg-light mx-2">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar bg-dark rounded-circle overflow-hidden" style="width: 48px; height: 48px;">
                                <img src="https://i.pravatar.cc/100?u={{ $t->handle }}" alt="{{ $t->name }}" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark small">{{ $t->name }}</h6>
                                <p class="text-muted mb-0 x-small">{{ $t->handle }}</p>
                            </div>
                        </div>
                        <div class="text-muted opacity-25">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </div>
                    </div>
                    <p class="testimonial-text text-dark mb-0 fs-6">
                        {{ $t->content }}
                    </p>
                </div>
                @endforeach
                <!-- Duplicate for seamless scroll -->
                @foreach($testimonials as $t)
                <div class="testimonial-card shadow-sm border p-4 rounded-4 bg-light mx-2">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar bg-dark rounded-circle overflow-hidden" style="width: 48px; height: 48px;">
                                <img src="https://i.pravatar.cc/100?u={{ $t->handle }}" alt="{{ $t->name }}" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark small">{{ $t->name }}</h6>
                                <p class="text-muted mb-0 x-small">{{ $t->handle }}</p>
                            </div>
                        </div>
                        <div class="text-muted opacity-25">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </div>
                    </div>
                    <p class="testimonial-text text-dark mb-0 fs-6">
                        {{ $t->content }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Track 2: Moving Left -->
        <div class="testimonial-track track-left">
            <div class="track-content">
                @foreach($testimonials->reverse() as $t)
                <div class="testimonial-card shadow-sm border p-4 rounded-4 bg-light mx-2">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar bg-dark rounded-circle overflow-hidden" style="width: 48px; height: 48px;">
                                <img src="https://i.pravatar.cc/100?u={{ $t->handle }}2" alt="{{ $t->name }}" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark small">{{ $t->name }}</h6>
                                <p class="text-muted mb-0 x-small">{{ $t->handle }}</p>
                            </div>
                        </div>
                        <div class="text-muted opacity-25">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </div>
                    </div>
                    <p class="testimonial-text text-dark mb-0 fs-6">
                        {{ $t->content }}
                    </p>
                </div>
                @endforeach
                <!-- Duplicate for seamless scroll -->
                @foreach($testimonials->reverse() as $t)
                <div class="testimonial-card shadow-sm border p-4 rounded-4 bg-light mx-2">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar bg-dark rounded-circle overflow-hidden" style="width: 48px; height: 48px;">
                                <img src="https://i.pravatar.cc/100?u={{ $t->handle }}2" alt="{{ $t->name }}" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark small">{{ $t->name }}</h6>
                                <p class="text-muted mb-0 x-small">{{ $t->handle }}</p>
                            </div>
                        </div>
                        <div class="text-muted opacity-25">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </div>
                    </div>
                    <p class="testimonial-text text-dark mb-0 fs-6">
                        {{ $t->content }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<style>
    .testimonial-wall {
        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }
    .testimonial-track {
        display: flex;
        overflow: hidden;
        user-select: none;
    }
    .track-content {
        display: flex;
        flex-shrink: 0;
        white-space: nowrap;
    }
    .track-right .track-content {
        animation: scroll-right 60s linear infinite;
    }
    .track-left .track-content {
        animation: scroll-left 60s linear infinite;
    }
    .testimonial-track:hover .track-content {
        animation-play-state: paused;
    }
    .testimonial-card {
        width: 350px;
        white-space: normal;
        flex-shrink: 0;
        transition: transform 0.3s, border-color 0.3s;
    }
    .testimonial-card:hover {
        transform: translateY(-5px);
        border-color: #10b981 !important;
    }
    .testimonial-text {
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 1.5;
    }
    @keyframes scroll-right {
        0% { transform: translateX(-50%); }
        100% { transform: translateX(0); }
    }
    @keyframes scroll-left {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
</style>
