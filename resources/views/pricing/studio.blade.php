@extends('layouts.app')

@section('content')
    @include('landing.partials.header')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
                <div>
                    <h1 class="fw-bold mb-2">STUDIO SERVICES (Custom Digital Products)</h1>
                    <p class="text-muted mb-0">Pricing Model: Project-Based (No Fixed Prices)</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/membership">Hub Membership</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/launchpad">Launchpad Program</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/scale">Scale Program</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/academy">Academy Courses</a>
                    <a class="btn btn-dark btn-sm" href="/pricing/studio">Studio Services</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/compare">Compare Plans</a>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 mt-4">
                <div class="card-body p-4 p-lg-5">
                    <div class="mb-4">
                        <div class="fw-bold">Every project is unique. Studio provides custom quotes based on:</div>
                        <div class="text-muted mt-2">Project complexity</div>
                        <div class="text-muted">Timeline</div>
                        <div class="text-muted">Technology stack</div>
                        <div class="text-muted">Team size required</div>
                        <div class="text-muted">Maintenance & support needs</div>
                    </div>

                    <h2 class="h5 fw-bold mb-3">Estimated Price Ranges</h2>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Project Type</th>
                                    <th>Complexity</th>
                                    <th>Estimated Price Range</th>
                                    <th>Typical Timeline</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Landing Page / Brochure Website</td><td>Simple</td><td>$500–2,000</td><td>1-2 weeks</td></tr>
                                <tr><td>Business Website (5-10 pages)</td><td>Basic</td><td>$2,000–5,000</td><td>2-4 weeks</td></tr>
                                <tr><td>Custom Web Application</td><td>Medium</td><td>$5,000–15,000</td><td>4-8 weeks</td></tr>
                                <tr><td>E-commerce Platform</td><td>Medium</td><td>$8,000–20,000</td><td>6-10 weeks</td></tr>
                                <tr><td>Mobile App (iOS/Android single)</td><td>Medium</td><td>$10,000–25,000</td><td>8-12 weeks</td></tr>
                                <tr><td>Cross-Platform Mobile App (both)</td><td>High</td><td>$15,000–40,000</td><td>10-14 weeks</td></tr>
                                <tr><td>Enterprise SaaS Platform</td><td>High</td><td>$25,000–75,000</td><td>12-20 weeks</td></tr>
                                <tr><td>E-government / Civic Tech Platform</td><td>High</td><td>$30,000–100,000+</td><td>16-24 weeks</td></tr>
                                <tr><td>AI/ML Powered Platform</td><td>Enterprise</td><td>$50,000–150,000+</td><td>20-30 weeks</td></tr>
                                <tr><td>Complete Digital Transformation</td><td>Enterprise</td><td>$100,000–500,000+</td><td>6-12 months</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">Engagement Models</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Description</th>
                                    <th>Best For</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="fw-bold">Fixed Price</td><td>One-time payment for defined scope</td><td>Well-defined projects with clear requirements</td></tr>
                                <tr><td class="fw-bold">Time & Materials</td><td>Pay per hour ($50–150/hour depending on seniority)</td><td>Projects with evolving requirements</td></tr>
                                <tr><td class="fw-bold">Milestone-Based</td><td>Pay per completed milestone (e.g., 25% upfront, 25% at design, 25% at dev, 25% at launch)</td><td>Most projects – balanced risk</td></tr>
                                <tr><td class="fw-bold">Retainer</td><td>Monthly fee for ongoing support ($2,000–10,000/month)</td><td>Long-term partnership, maintenance</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">Junior Developer Program (Discounted)</h2>
                    <div class="text-muted mb-3">Academy graduates building their portfolio:</div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Project Type</th>
                                    <th>Discount</th>
                                    <th>Conditions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>MVP for nonprofit/social impact</td><td>Up to 50% off</td><td>Must be verified NGO</td></tr>
                                <tr><td>Student/graduate startup</td><td>30% off</td><td>Must have Academy alumni</td></tr>
                                <tr><td>Open source projects</td><td>Free (with attribution)</td><td>Must be publicly beneficial</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-3 p-lg-4 bg-dark text-white rounded-4 mt-4">
                        <div class="fw-bold">Want a quote?</div>
                        <div class="small text-white-50 mt-1">Free consultation – contact Studio team</div>
                        <a class="btn btn-light btn-sm mt-3" href="{{ route('company.contact') }}">Request a Quote</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('landing.partials.footer')
@endsection
