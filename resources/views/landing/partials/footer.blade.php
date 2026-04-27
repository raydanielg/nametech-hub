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
                        <a href="#" class="text-white-50 hover-text-white" aria-label="Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="#" class="text-white-50 hover-text-white" aria-label="Instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                        </a>
                        <a href="#" class="text-white-50 hover-text-white" aria-label="Twitter">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
                        </a>
                        <a href="#" class="text-white-50 hover-text-white" aria-label="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                        </a>
                        <a href="#" class="text-white-50 hover-text-white" aria-label="YouTube">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>
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
</style>
