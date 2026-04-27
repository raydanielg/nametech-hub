@extends('layouts.app')

@section('content')
    @include('landing.partials.header')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
                <div>
                    <h1 class="fw-bold mb-2">LAUNCHPAD PROGRAM (Incubation – 6 Months)</h1>
                    <p class="text-muted mb-0">Pricing Model: Fixed Fee + Success Fee (Two Options)</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/membership">Hub Membership</a>
                    <a class="btn btn-dark btn-sm" href="/pricing/launchpad">Launchpad Program</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/scale">Scale Program</a>
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
                                <tr>
                                    <td class="fw-bold">Standard Track</td>
                                    <td>$1,500 (one-time fee)</td>
                                    <td>Bootstrapped startups with limited budget</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Equity Track</td>
                                    <td>$0 upfront + 3% equity</td>
                                    <td>Startups with no cash but willing to give equity</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Hybrid Track</td>
                                    <td>$500 + 1.5% equity</td>
                                    <td>Balanced option</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">What's Included (All Tracks)</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Included</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>6 months coworking access (Hot Desk)</td><td>✅ Yes</td></tr>
                                <tr><td>Weekly 1:1 mentorship (industry expert)</td><td>✅ Yes (24 sessions)</td></tr>
                                <tr><td>Legal & finance advisory</td><td>✅ Yes</td></tr>
                                <tr><td>Access to investor network</td><td>✅ Yes</td></tr>
                                <tr><td>Pitch deck review & coaching</td><td>✅ Yes</td></tr>
                                <tr><td>Demo Day participation (public pitch event)</td><td>✅ Yes</td></tr>
                                <tr><td>Alumni network access (lifetime)</td><td>✅ Yes</td></tr>
                                <tr><td>$10k credits from partners (AWS, Google, etc.)</td><td>✅ Yes</td></tr>
                                <tr><td>Access to Studio prototyping support (discounted)</td><td>✅ 20% off</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row g-4 mt-1">
                        <div class="col-lg-6">
                            <h3 class="h6 fw-bold mb-3">Scholarship Options</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Scholarship</th>
                                            <th>Coverage</th>
                                            <th>Eligibility</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>Women in Tech Scholarship</td><td>100% fee waiver</td><td>Female founders</td></tr>
                                        <tr><td>Youth Innovation Scholarship</td><td>50% fee waiver</td><td>Founders under 25</td></tr>
                                        <tr><td>Social Impact Scholarship</td><td>100% fee waiver</td><td>Startups solving social problems</td></tr>
                                        <tr><td>Need-Based Scholarship</td><td>Up to 75% waiver</td><td>Financially constrained founders</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="h6 fw-bold mb-3">Payment Plan</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Plan</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>Upfront</td><td>$1,500–fullpayment–101,350)</td></tr>
                                        <tr><td>Installment (3 months)</td><td>$550/month for 3 months</td></tr>
                                        <tr><td>Installment (6 months)</td><td>$280/month for 6 months</td></tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="p-3 p-lg-4 bg-dark text-white rounded-4 mt-3">
                                <div class="fw-bold">Apply to Launchpad</div>
                                <div class="small text-white-50 mt-1">We review applications weekly and onboard new teams monthly.</div>
                                <a class="btn btn-light btn-sm mt-3" href="{{ route('company.contact') }}">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('landing.partials.footer')
@endsection
