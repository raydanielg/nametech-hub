<footer class="footer-section bg-dark text-white animate__animated animate__fadeInUp">
    {{-- Main Footer Content - 6 Columns --}}
    <div class="container py-5 py-lg-6">
        <div class="row g-4 g-lg-5">
            {{-- COLUMN 1: Brand --}}
            <div class="col-6 col-md-4 col-lg-2">
                <h6 class="text-uppercase fw-bold small mb-3 mb-lg-4 tracking-wider">Brand</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 text-white-50 small">
                    <li><a href="{{ route('landing') }}" class="text-reset text-decoration-none hover-text-white footer-menu-link">Home</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Social Media</a></li>
                    <li><a href="{{ route('company.contact') }}" class="text-reset text-decoration-none hover-text-white footer-menu-link">Contact</a></li>
                    <li><a href="#newsletter" class="text-reset text-decoration-none hover-text-white footer-menu-link">Newsletter</a></li>
                </ul>
            </div>

            {{-- COLUMN 2: Products --}}
            <div class="col-6 col-md-4 col-lg-2">
                <h6 class="text-uppercase fw-bold small mb-3 mb-lg-4 tracking-wider">Products</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 text-white-50 small">
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Academy</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Launchpad</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Scale</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Studio</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">SaaS</a></li>
                </ul>
            </div>

            {{-- COLUMN 3: Resources --}}
            <div class="col-6 col-md-4 col-lg-2">
                <h6 class="text-uppercase fw-bold small mb-3 mb-lg-4 tracking-wider">Resources</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 text-white-50 small">
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Library</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Toolkit</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Webinars</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Events</a></li>
                    <li><a href="{{ route('blog.latest') }}" class="text-reset text-decoration-none hover-text-white footer-menu-link">Blog</a></li>
                </ul>
            </div>

            {{-- COLUMN 4: Company --}}
            <div class="col-6 col-md-4 col-lg-2">
                <h6 class="text-uppercase fw-bold small mb-3 mb-lg-4 tracking-wider">Company</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 text-white-50 small">
                    <li><a href="{{ route('company.about') }}" class="text-reset text-decoration-none hover-text-white footer-menu-link">About Us</a></li>
                    <li><a href="{{ route('company.leadership') }}" class="text-reset text-decoration-none hover-text-white footer-menu-link">Leadership</a></li>
                    <li><a href="{{ route('company.careers') }}" class="text-reset text-decoration-none hover-text-white footer-menu-link">Careers</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Press</a></li>
                    <li><a href="{{ route('company.partners') }}" class="text-reset text-decoration-none hover-text-white footer-menu-link">Partners</a></li>
                </ul>
            </div>

            {{-- COLUMN 5: Support --}}
            <div class="col-6 col-md-4 col-lg-2">
                <h6 class="text-uppercase fw-bold small mb-3 mb-lg-4 tracking-wider">Support</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 text-white-50 small">
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Help Center</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">FAQ</a></li>
                    <li><a href="{{ route('company.contact') }}" class="text-reset text-decoration-none hover-text-white footer-menu-link">Contact Form</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Ticket</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Status</a></li>
                </ul>
            </div>

            {{-- COLUMN 6: Legal --}}
            <div class="col-6 col-md-4 col-lg-2">
                <h6 class="text-uppercase fw-bold small mb-3 mb-lg-4 tracking-wider">Legal</h6>
                <ul class="list-unstyled d-flex flex-column gap-2 text-white-50 small">
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Terms</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Privacy</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Cookies</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">Disclaimer</a></li>
                    <li><a href="#" class="text-reset text-decoration-none hover-text-white footer-menu-link">GDPR</a></li>
                    <li><a href="{{ url('/sitemap.xml') }}" class="text-reset text-decoration-none hover-text-white footer-menu-link">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Newsletter Signup Bar --}}
    <div class="footer-newsletter border-top border-secondary py-4" id="newsletter">
        <div class="container">
            <div class="row align-items-center g-3">
                <div class="col-lg-4">
                    <h6 class="fw-bold mb-0">Subscribe to our newsletter</h6>
                </div>
                <div class="col-lg-8">
                    <form class="d-flex flex-column flex-sm-row gap-2" action="#" method="POST">
                        @csrf
                        <input type="email" name="email" class="form-control bg-dark border-secondary text-white small flex-grow-1" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-primary fw-bold px-4">Subscribe</button>
                    </form>
                    <p class="text-white-50 small mt-2 mb-0">No spam. Unsubscribe anytime.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Bar: Copyright | Social Icons | Payment Methods | Built with --}}
    <div class="footer-bottom border-top border-secondary py-4">
        <div class="container">
            <div class="row align-items-center g-3">
                {{-- Copyright --}}
                <div class="col-md-6 col-lg-3">
                    <p class="text-white-50 small mb-0">&copy; {{ date('Y') }} NAMTECH-HUB. All rights reserved.</p>
                </div>

                {{-- Social Icons --}}
                <div class="col-md-6 col-lg-3 text-md-center">
                    <div class="social-links d-flex gap-3 justify-content-lg-center">
                        <a href="https://facebook.com/namtechhub" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Facebook">
                            <img src="{{ asset('icons/facebook.svg') }}" alt="" aria-hidden="true">
                        </a>
                        <a href="https://instagram.com/namtechhub" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Instagram">
                            <img src="{{ asset('icons/instagram.svg') }}" alt="" aria-hidden="true">
                        </a>
                        <a href="https://twitter.com/namtechhub" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Twitter">
                            <img src="{{ asset('icons/twitter.svg') }}" alt="" aria-hidden="true">
                        </a>
                        <a href="https://linkedin.com/company/namtechhub" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="LinkedIn">
                            <img src="{{ asset('icons/linkedin.svg') }}" alt="" aria-hidden="true">
                        </a>
                        <a href="https://youtube.com/@namtechhub" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="YouTube">
                            <img src="{{ asset('icons/youtube.svg') }}" alt="" aria-hidden="true">
                        </a>
                        <a href="https://github.com/namtechhub" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="GitHub">
                            <img src="{{ asset('icons/github.svg') }}" alt="" aria-hidden="true">
                        </a>
                    </div>
                </div>

                {{-- Payment Methods --}}
                <div class="col-md-6 col-lg-3 text-lg-center">
                    <div class="payment-methods d-flex gap-2 justify-content-lg-center align-items-center">
                        <span class="badge bg-secondary text-dark small">Visa</span>
                        <span class="badge bg-secondary text-dark small">Mastercard</span>
                        <span class="badge bg-secondary text-dark small">PayPal</span>
                        <span class="badge bg-secondary text-dark small">M-Pesa</span>
                    </div>
                </div>

                {{-- Built With --}}
                <div class="col-md-6 col-lg-3 text-lg-end">
                    <span class="text-white-50 small">Powered by NAMTECH-HUB</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .hover-text-white:hover { 
        color: white !important; 
        transition: color 0.2s ease; 
    }
    .footer-menu-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .footer-menu-link::before {
        content: ">";
        color: rgba(255, 255, 255, 0.35);
    }
    .footer-newsletter .form-control:focus {
        background-color: #212529;
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .tracking-wider {
        letter-spacing: 0.05em;
    }
    .social-icon {
        width: 40px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 9999px;
        background: rgba(255, 255, 255, 0.08);
        color: rgba(255, 255, 255, 0.7);
        transition: background-color 0.2s ease, color 0.2s ease, transform 0.2s ease;
        text-decoration: none;
        flex: 0 0 auto;
    }
    .social-icon img {
        width: 20px;
        height: 20px;
        display: block;
        flex: 0 0 auto;
        transition: transform 0.2s ease;
    }
    .social-icon:hover {
        background: rgba(255, 255, 255, 0.15);
        color: white;
        transform: translateY(-2px) scale(1.08);
    }
    .social-icon:hover img {
        transform: scale(1.1);
    }
    .social-icon:focus-visible {
        outline: none;
        box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.3);
    }
</style>
