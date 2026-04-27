<section class="hero-section position-relative overflow-hidden d-flex align-items-center py-5 py-lg-10" style="min-height: 85vh; background: #f9fafb;">
    <!-- Animated Background Elements (Subtle for this clean design) -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 1; opacity: 0.1;">
        <div id="particles-js" class="w-100 h-100"></div>
    </div>

    <div class="container position-relative" style="z-index: 10;">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <!-- Announcement Badge -->
                <div class="d-inline-flex align-items-center bg-white rounded-pill px-3 py-1 shadow-sm border mb-5 animate-fade-in">
                    <span class="badge bg-primary rounded-pill me-2 px-3 py-1" style="background-color: #1e40af !important;">New</span>
                    <a href="#" class="text-dark text-decoration-none small fw-medium d-flex align-items-center">
                        Flowbite is out! See what's new <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ms-1"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                </div>

                <!-- Hero Title -->
                <h1 class="display-3 fw-bolder text-dark mb-4 tracking-tight animate-fade-up">
                    We invest in the world’s potential
                </h1>
                
                <!-- Hero Description -->
                <p class="lead text-muted mx-auto mb-5 fs-5 fw-normal" style="max-width: 800px;">
                    Here at NAMTECH-HUB we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
                </p>
                
                <!-- Hero Actions -->
                <div class="d-flex flex-wrap justify-content-center gap-3 mb-5 mb-lg-10 animate-fade-up" style="animation-delay: 0.2s;">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 py-3 fw-bold shadow-sm border-0 d-flex align-items-center gap-2" style="background-color: #1e40af;">
                        Learn more <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <button class="btn btn-outline-dark btn-lg px-4 py-3 fw-bold bg-white d-flex align-items-center gap-2 border-opacity-10">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="m22 8-6 4 6 4V8Z"/><rect width="14" height="12" x="2" y="6" rx="2" ry="2"/></svg>
                        Watch video
                    </button>
                </div>

                <!-- Featured In Section -->
                <div class="featured-in mt-5 animate-fade-in" style="animation-delay: 0.4s;">
                    <p class="text-uppercase text-muted small fw-bold tracking-widest mb-4">Featured In</p>
                    <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 gap-md-5 opacity-50 grayscale-icons">
                        <div class="d-flex align-items-center gap-2 h4 mb-0 text-dark fw-bold">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33zM9.75 15.02V8.48l5.98 3.27-5.98 3.27z"/></svg>
                            YouTube
                        </div>
                        <div class="d-flex align-items-center gap-2 h4 mb-0 text-dark fw-bold">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M13.56 19.35A6.17 6.17 0 0 1 11.5 20a6.34 6.34 0 0 1-4.48-1.85A6.16 6.16 0 0 1 5.15 13.5v-2.3a6.16 6.16 0 0 1 1.87-4.48 6.34 6.34 0 0 1 4.48-1.87 6.17 6.17 0 0 1 4.48 1.87A6.16 6.16 0 0 1 17.85 11.2v2.3a6.16 6.16 0 0 1-1.87 4.48 6.34 6.34 0 0 1-2.42 1.37zM11.5 7.15a4.35 4.35 0 0 0-3.08 1.28 4.22 4.35 0 0 0-1.28 3.07v2.3a4.22 4.35 0 0 0 1.28 3.08A4.35 4.35 0 0 0 11.5 18.15a4.35 4.35 0 0 0 3.08-1.28A4.22 4.22 0 0 0 15.85 13.8v-2.3a4.22 4.22 0 0 0-1.28-3.07A4.35 4.35 0 0 0 11.5 7.15z"/></svg>
                            Product Hunt
                        </div>
                        <div class="d-flex align-items-center gap-2 h4 mb-0 text-dark fw-bold">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.584 1.32-1.31 1.637.042.203.064.41.064.618 0 2.304-2.84 4.172-6.354 4.172-3.513 0-6.353-1.868-6.353-4.172 0-.197.021-.393.06-.583-.751-.312-1.35-.92-1.35-1.672 0-.968.786-1.754 1.754-1.754.463 0 .876.177 1.18.47 1.201-.84 2.844-1.393 4.654-1.472l.872-4.088a.125.125 0 0 1 .141-.097l2.871.606z"/></svg>
                            reddit
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
