@extends('layouts.app')

@section('content')
    @include('landing.partials.header')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
                <div>
                    <h1 class="fw-bold mb-2">HUB MEMBERSHIP</h1>
                    <p class="text-muted mb-0">Membership Tiers</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-dark btn-sm" href="/pricing/membership">Hub Membership</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/launchpad">Launchpad Program</a>
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
                                    <th>Tier</th>
                                    <th>Price (Monthly)</th>
                                    <th>Price (Annual)</th>
                                    <th>Best For</th>
                                    <th>Features</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Free</td>
                                    <td>$0</td>
                                    <td>$0</td>
                                    <td>Students, first-time visitors</td>
                                    <td>
                                        <div>• Access to community events</div>
                                        <div>• Limited to 2 events/month</div>
                                        <div>• No desk access</div>
                                        <div>• Basic forum access</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Day Pass</td>
                                    <td>$10/day</td>
                                    <td>N/A</td>
                                    <td>Occasional users</td>
                                    <td>
                                        <div>• Hot desk for 1 day</div>
                                        <div>• Wi-Fi access</div>
                                        <div>• Coffee/tea included</div>
                                        <div>• Event discounts</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Hot Desk</td>
                                    <td>$49/month</td>
                                    <td>$490/year(save98)</td>
                                    <td>Freelancers, remote workers</td>
                                    <td>
                                        <div>• Open workspace access</div>
                                        <div>• 24/7 building access</div>
                                        <div>• 5 hours meeting room/month</div>
                                        <div>• Print 50 pages/month</div>
                                        <div>• Mail handling</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Dedicated Desk</td>
                                    <td>$149/month</td>
                                    <td>$1,490/year(save298)</td>
                                    <td>Startup teams, power users</td>
                                    <td>
                                        <div>• Assigned desk</div>
                                        <div>• Lockable storage</div>
                                        <div>• 10 hours meeting room/month</div>
                                        <div>• Print 200 pages/month</div>
                                        <div>• Priority event registration</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Private Office</td>
                                    <td>$499/month</td>
                                    <td>$4,990/year(save998)</td>
                                    <td>Startup teams (2-4 people)</td>
                                    <td>
                                        <div>• Lockable private room</div>
                                        <div>• 4 desks included</div>
                                        <div>• 20 hours meeting room/month</div>
                                        <div>• Unlimited printing</div>
                                        <div>• Mail handling + signage</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Virtual Membership</td>
                                    <td>$29/month</td>
                                    <td>$290/year(save58)</td>
                                    <td>Remote founders, investors</td>
                                    <td>
                                        <div>• Business address usage</div>
                                        <div>• Mail forwarding</div>
                                        <div>• 2 hours meeting room/month</div>
                                        <div>• Event discounts</div>
                                        <div>• Community access</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">Additional Add-ons (for any tier)</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Add-on</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Additional meeting room hour</td>
                                    <td>$15/hour</td>
                                </tr>
                                <tr>
                                    <td>Large event space rental (100+ ppl)</td>
                                    <td>$200/halfday,$350/full day</td>
                                </tr>
                                <tr>
                                    <td>Printing beyond limit</td>
                                    <td>$0.10/page</td>
                                </tr>
                                <tr>
                                    <td>Mail forwarding (outside city)</td>
                                    <td>$10/month</td>
                                </tr>
                                <tr>
                                    <td>Locker rental</td>
                                    <td>$15/month</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row g-3 mt-2">
                        <div class="col-md-8">
                            <div class="p-3 p-lg-4 bg-white border rounded-4">
                                <h3 class="h6 fw-bold mb-2">Quick start</h3>
                                <div class="text-muted small">Choose a tier, pay monthly or annual, then you get your access credentials and onboarding within 24 hours.</div>
                                <div class="text-muted small mt-2">Payment methods: Credit card, bank transfer, mobile money (M-Pesa, etc.)</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 p-lg-4 bg-dark text-white rounded-4 h-100">
                                <div class="fw-bold">Need help choosing?</div>
                                <div class="small text-white-50 mt-1">Tell us your goal and schedule. We will recommend the best tier.</div>
                                <a class="btn btn-light btn-sm mt-3" href="{{ route('company.contact') }}">Contact</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('landing.partials.footer')
@endsection
