@extends('layouts.app')

@section('content')
    @include('landing.partials.header')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
                <div>
                    <h1 class="fw-bold mb-2">COMPARE PLANS (Summary Table)</h1>
                    <p class="text-muted mb-0">PRICING FAQ (Quick Answers)</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/membership">Hub Membership</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/launchpad">Launchpad Program</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/scale">Scale Program</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/academy">Academy Courses</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/studio">Studio Services</a>
                    <a class="btn btn-dark btn-sm" href="/pricing/compare">Compare Plans</a>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 mt-4">
                <div class="card-body p-4 p-lg-5">
                    <h2 class="h5 fw-bold mb-3">Hub Membership Comparison</h2>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th>Free</th>
                                    <th>Day Pass</th>
                                    <th>Hot Desk</th>
                                    <th>Dedicated Desk</th>
                                    <th>Private Office</th>
                                    <th>Virtual</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Price (monthly)</td><td>$0</td><td>$10/day</td><td>$49</td><td>$149</td><td>$499</td><td>$29</td></tr>
                                <tr><td>Coworking access</td><td>❌</td><td>✅ (1 day)</td><td>✅ 24/7</td><td>✅ 24/7</td><td>✅ Private</td><td>❌</td></tr>
                                <tr><td>Meeting room (hours)</td><td>0</td><td>0</td><td>5 hrs</td><td>10 hrs</td><td>20 hrs</td><td>2 hrs</td></tr>
                                <tr><td>Dedicated desk</td><td>❌</td><td>❌</td><td>❌</td><td>✅</td><td>✅ (room)</td><td>❌</td></tr>
                                <tr><td>Mail handling</td><td>❌</td><td>❌</td><td>✅</td><td>✅</td><td>✅</td><td>✅</td></tr>
                                <tr><td>Business address</td><td>❌</td><td>❌</td><td>❌</td><td>❌</td><td>✅</td><td>✅</td></tr>
                                <tr><td>Event discount</td><td>10%</td><td>10%</td><td>20%</td><td>30%</td><td>40%</td><td>15%</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">Program Comparison</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th>Launchpad (Incubation)</th>
                                    <th>Scale (Acceleration)</th>
                                    <th>Academy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Duration</td><td>6 months</td><td>3 months</td><td>Varies</td></tr>
                                <tr><td>Price</td><td>$1,500 or 3% equity</td><td>$5,000 or 5-7% equity</td><td>$29–1,499</td></tr>
                                <tr><td>Coworking access</td><td>✅ Hot Desk</td><td>✅ Dedicated Desk</td><td>❌ (extra)</td></tr>
                                <tr><td>Mentorship</td><td>✅ Weekly</td><td>✅ Intensive</td><td>❌ (except Pro+)</td></tr>
                                <tr><td>Investor access</td><td>✅ Basic</td><td>✅ Full</td><td>❌</td></tr>
                                <tr><td>Demo Day</td><td>✅ Public</td><td>✅ Investor-only</td><td>❌</td></tr>
                                <tr><td>Certificate</td><td>✅</td><td>✅</td><td>✅</td></tr>
                                <tr><td>Target stage</td><td>Idea/Early-stage</td><td>Revenue/Growth</td><td>Learning</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">Studio Engagement Comparison</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Pricing</th>
                                    <th>Risk</th>
                                    <th>Best For</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="fw-bold">Fixed Price</td><td>One-time payment</td><td>Shared</td><td>Clear requirements</td></tr>
                                <tr><td class="fw-bold">Time & Materials</td><td>Hourly ($50-150)</td><td>Client pays actual</td><td>Evolving scope</td></tr>
                                <tr><td class="fw-bold">Milestone-Based</td><td>Per milestone</td><td>Balanced</td><td>Most projects</td></tr>
                                <tr><td class="fw-bold">Retainer</td><td>Monthly ($2k-10k)</td><td>Predictable</td><td>Long-term support</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">PRICING FAQ (Quick Answers)</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Question</th>
                                    <th>Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Is there a free trial for Hub membership?</td><td>Yes – 3 days free for Hot Desk</td></tr>
                                <tr><td>Do Launchpad fees include coworking?</td><td>Yes – Hot Desk included for 6 months</td></tr>
                                <tr><td>Can I upgrade my membership mid-month?</td><td>Yes – prorated charges apply</td></tr>
                                <tr><td>Does Academy offer refunds?</td><td>7-day money-back guarantee for courses</td></tr>
                                <tr><td>How do I get a Studio quote?</td><td>Free consultation – contact Studio team</td></tr>
                                <tr><td>Are there discounts for nonprofits?</td><td>Yes – 25% off for verified NGOs</td></tr>
                                <tr><td>Do you offer scholarships?</td><td>Yes – multiple scholarship programs</td></tr>
                                <tr><td>What payment methods are accepted?</td><td>Credit card, bank transfer, mobile money (M-Pesa, etc.)</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">COMPLETE PRICING SUMMARY TABLE (At a Glance)</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Price Range</th>
                                    <th>Payment Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Hub Membership</td><td>$0–499/month</td><td>Monthly, Annual</td></tr>
                                <tr><td>Launchpad</td><td>$0–1,500 (or equity)</td><td>Upfront, Installment</td></tr>
                                <tr><td>Scale</td><td>$0–5,000 (or equity)</td><td>Upfront, Revenue share</td></tr>
                                <tr><td>Academy Courses</td><td>$0–1,499</td><td>One-time, Subscription</td></tr>
                                <tr><td>Studio Services</td><td>$500–500,000+</td><td>Fixed, Milestone, T&M, Retainer</td></tr>
                                <tr><td>Enterprise Plans</td><td>Custom (15k–500k+)</td><td>Annual contract</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-3 p-lg-4 bg-dark text-white rounded-4 mt-4">
                        <div class="fw-bold">Hii ndio complete pricing structure ya NAMTECH-HUB kwa kila sub-menu ya Pricing.</div>
                        <div class="small text-white-50 mt-1">Kila bidhaa ina bei yake, maelezo ya kiwango, na chaguzi mbalimbali za malipo. Tayari kwa kuwekwa kwenye landing page.</div>
                        <a class="btn btn-light btn-sm mt-3" href="{{ route('company.contact') }}">Talk to Sales / Support</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('landing.partials.footer')
@endsection
