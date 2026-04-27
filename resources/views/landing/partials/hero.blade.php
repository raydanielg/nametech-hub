<section class="hero-section position-relative overflow-hidden d-flex align-items-center py-5 py-lg-10" style="min-height: 85vh; background: #ffffff;">
    <!-- Animated Network Background -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;">
        <div id="hero-particles" class="w-100 h-100"></div>
    </div>

    <div class="container position-relative" style="z-index: 10;">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <!-- Dynamic Announcement Badge -->
                @if($announcement)
                <div class="d-inline-flex align-items-center bg-white rounded-pill px-3 py-1 shadow-sm border mb-5 animate-fade-in" style="z-index: 20; position: relative;">
                    <span class="badge bg-success rounded-pill me-2 px-3 py-1" style="background-color: #10b981 !important;">{{ $announcement->badge_text }}</span>
                    <a href="{{ $announcement->url }}" class="text-dark text-decoration-none small fw-medium d-flex align-items-center">
                        {{ $announcement->content }} 
                        @if($announcement->link_text)
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ms-1"><path d="m9 18 6-6-6-6"/></svg>
                        @endif
                    </a>
                </div>
                @endif

                <!-- Hero Title -->
                <h1 class="display-3 fw-bolder text-dark mb-4 tracking-tight animate-fade-up">
                    We invest in the world’s potential
                </h1>
                
                <!-- Hero Description -->
                <p class="lead text-muted mx-auto mb-5 fs-5 fw-normal" style="max-width: 800px;">
                    Here at NAMTECH-HUB we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
                </p>
                
                <!-- Hero Actions -->
                <div class="d-flex flex-wrap justify-content-center gap-3 animate-fade-up" style="animation-delay: 0.2s; position: relative; z-index: 20;">
                    <a href="{{ route('register') }}" class="btn btn-success btn-lg px-4 py-3 fw-bold shadow-sm border-0 d-flex align-items-center gap-2" style="background-color: #10b981;">
                        Learn more <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <button class="btn btn-outline-dark btn-lg px-4 py-3 fw-bold bg-white d-flex align-items-center gap-2 border-opacity-10 btn-watch-video">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="video-icon"><path d="m22 8-6 4 6 4V8Z"/><rect width="14" height="12" x="2" y="6" rx="2" ry="2"/></svg>
                        Watch video
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .btn-watch-video {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.1);
    }
    .btn-watch-video:hover {
        background-color: #10b981 !important;
        color: white !important;
        border-color: #10b981 !important;
        box-shadow: 0 10px 15px -3px rgba(16, 185, 129, 0.2);
        transform: translateY(-2px);
    }
    .btn-watch-video:hover .video-icon {
        color: white !important;
    }
    
    .animate-fade-in { animation: fadeIn 1s ease-out forwards; opacity: 0; }
    .animate-fade-up { animation: fadeUp 0.8s ease-out forwards; opacity: 0; }
    
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

    #hero-particles {
        background-image: radial-gradient(circle at 2px 2px, rgba(0,0,0,0.02) 1px, transparent 0);
        background-size: 40px 40px;
    }
</style>

<!-- Particles.js for high-end network animation -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS('hero-particles', {
        "particles": {
            "number": { "value": 100, "density": { "enable": true, "value_area": 800 } },
            "color": { "value": "#10b981" },
            "shape": { "type": "circle" },
            "opacity": { "value": 0.3, "random": true },
            "size": { "value": 2, "random": true },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#10b981",
                "opacity": 0.15,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1.5,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": { "enable": true, "rotateX": 600, "rotateY": 1200 }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": { "enable": true, "mode": "grab" },
                "onclick": { "enable": true, "mode": "push" },
                "resize": true
            },
            "modes": {
                "grab": { "distance": 200, "line_linked": { "opacity": 0.4 } }
            }
        },
        "retina_detect": true
    });
</script>

<style>
    .grayscale-icons div {
        filter: grayscale(1);
        transition: all 0.3s;
    }
    .grayscale-icons div:hover {
        filter: grayscale(0);
        opacity: 1 !important;
    }
    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
        opacity: 0;
    }
    .animate-fade-up {
        animation: fadeUp 0.8s ease-out forwards;
        opacity: 0;
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<!-- Particles.js for subtle dots -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS('particles-js', {
        "particles": {
            "number": { "value": 40, "density": { "enable": true, "value_area": 800 } },
            "color": { "value": "#6b7280" },
            "shape": { "type": "circle" },
            "opacity": { "value": 0.2, "random": false },
            "size": { "value": 2, "random": true },
            "line_linked": { "enable": false },
            "move": { "enable": true, "speed": 1, "direction": "none", "random": true, "straight": false, "out_mode": "out", "bounce": false }
        },
        "interactivity": { "events": { "onhover": { "enable": false } } },
        "retina_detect": true
    });
</script>

<style>
    .text-gradient {
        background: linear-gradient(90deg, #10b981 0%, #34d399 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .btn-glow:hover {
        box-shadow: 0 0 20px rgba(16, 185, 129, 0.4);
        transform: translateY(-2px);
        transition: all 0.3s;
    }
    .hover-bg-light:hover {
        background: rgba(255, 255, 255, 0.05);
        color: white;
    }
    
    /* Animations */
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }
    
    .pulse {
        animation: pulse-dot 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    @keyframes pulse-dot {
        0%, 100% { opacity: 1; }
        50% { opacity: .5; }
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 4s infinite;
    }
    @keyframes pulse-slow {
        0%, 100% { transform: translate(-50%, -50%) scale(1); }
        50% { transform: translate(-50%, -50%) scale(1.05); }
    }

    /* Tech Lines */
    .line {
        position: absolute;
        background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.2), transparent);
        height: 1px;
        width: 100%;
        animation: line-move 8s linear infinite;
    }
    .line-1 { top: 20%; animation-delay: 0s; }
    .line-2 { top: 50%; animation-delay: 2s; }
    .line-3 { top: 80%; animation-delay: 4s; }
    
    @keyframes line-move {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    .leading-tight { line-height: 1.1; }
</style>

<!-- Particles.js for dots effect -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS('particles-js', {
        "particles": {
            "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
            "color": { "value": "#10b981" },
            "shape": { "type": "circle" },
            "opacity": { "value": 0.5, "random": false },
            "size": { "value": 3, "random": true },
            "line_linked": { "enable": true, "distance": 150, "color": "#10b981", "opacity": 0.2, "width": 1 },
            "move": { "enable": true, "speed": 2, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": { "onhover": { "enable": true, "mode": "grab" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }
        },
        "retina_detect": true
    });
</script>
