@extends('layouts.app')

@section('content')
    @include('landing.partials.header')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
                <div>
                    <h1 class="fw-bold mb-2">SCALE PROGRAM (Acceleration – 3 Months)</h1>
                    <p class="text-muted mb-0">Pricing Model</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/membership">Hub Membership</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/launchpad">Launchpad Program</a>
                    <a class="btn btn-dark btn-sm" href="/pricing/scale">Scale Program</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/academy">Academy Courses</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/studio">Studio Services</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/compare">Compare Plans</a>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 mt-4">
                <div class="card-body p-4 p-lg-5">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Option</th>
                                    <th>Price</th>
                                    <th>Best For</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="fw-bold">Fee Track</td><td>$5,000 (one-time)</td><td>Startups with revenue but prefer to keep equity</td></tr>
                                <tr><td class="fw-bold">Equity Track</td><td>$0 upfront + 5-7% equity</td><td>Startups raising or planning to raise funding</td></tr>
                                <tr><td class="fw-bold">Revenue Share Track</td><td>5% of monthly revenue (capped at $15k)</td><td>Revenue-generating startups</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">What's Included</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Included</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>3 months premium dedicated desk</td><td>✅ Yes</td></tr>
                                <tr><td>1:1 mentorship from scale experts (growth, fundraising)</td><td>✅ Yes (12 sessions)</td></tr>
                                <tr><td>Investor matchmaking & pitch coaching</td><td>✅ Yes</td></tr>
                                <tr><td>Fundraising CRM access</td><td>✅ Yes</td></tr>
                                <tr><td>Due diligence preparation support</td><td>✅ Yes</td></tr>
                                <tr><td>PR & media exposure</td><td>✅ Yes</td></tr>
                                <tr><td>Access to international accelerator network</td><td>✅ Yes</td></tr>
                                <tr><td>Legal for term sheets & investment docs</td><td>✅ Yes</td></tr>
                                <tr><td>Demo Day (exclusive investor-only event)</td><td>✅ Yes</td></tr>
                                <tr><td>$25k credits from partners</td><td>✅ Yes</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row g-4 mt-1">
                        <div class="col-lg-7">
                            <h3 class="h6 fw-bold mb-3">Eligibility Requirements for Scale</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Requirement</th>
                                            <th>Threshold</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>Minimum monthly recurring revenue (MRR)</td><td>$5,000+</td></tr>
                                        <tr><td>Minimum team size</td><td>2+ full-time founders</td></tr>
                                        <tr><td>Product</td><td>Live with paying customers</td></tr>
                                        <tr><td>Traction</td><td>6+ months of operation</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="p-3 p-lg-4 bg-dark text-white rounded-4 h-100">
                                <div class="fw-bold">Ready to scale?</div>
                                <div class="small text-white-50 mt-1">If you meet the thresholds, we will schedule a qualification call and pick the right track.</div>
                                <a class="btn btn-light btn-sm mt-3" href="{{ route('company.contact') }}">Book a Call</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('landing.partials.footer')
@endsection
