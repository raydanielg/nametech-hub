@extends('layouts.app')

@section('content')
    @include('landing.partials.header')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
                <div>
                    <h1 class="fw-bold mb-2">NAMTECH ACADEMY (Courses & Bootcamps)</h1>
                    <p class="text-muted mb-0">Individual Course Pricing</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/membership">Hub Membership</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/launchpad">Launchpad Program</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/scale">Scale Program</a>
                    <a class="btn btn-dark btn-sm" href="/pricing/academy">Academy Courses</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/studio">Studio Services</a>
                    <a class="btn btn-outline-dark btn-sm" href="/pricing/compare">Compare Plans</a>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 mt-4">
                <div class="card-body p-4 p-lg-5">
                    <h2 class="h5 fw-bold mb-3">Individual Course Pricing</h2>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Duration</th>
                                    <th>Price</th>
                                    <th>Certificate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Web Development Fundamentals</td><td>4 weeks</td><td>$99</td><td>✅ Yes</td></tr>
                                <tr><td>Frontend Development (React)</td><td>6 weeks</td><td>$149</td><td>✅ Yes</td></tr>
                                <tr><td>Backend Development (Node.js/Python)</td><td>6 weeks</td><td>$149</td><td>✅ Yes</td></tr>
                                <tr><td>Full Stack Development (Complete)</td><td>12 weeks</td><td>$299</td><td>✅ Yes</td></tr>
                                <tr><td>UI/UX Design Fundamentals</td><td>4 weeks</td><td>$99</td><td>✅ Yes</td></tr>
                                <tr><td>Data Science & Analytics</td><td>8 weeks</td><td>$199</td><td>✅ Yes</td></tr>
                                <tr><td>Cybersecurity Basics</td><td>5 weeks</td><td>$129</td><td>✅ Yes</td></tr>
                                <tr><td>Mobile App Development (Flutter)</td><td>6 weeks</td><td>$149</td><td>✅ Yes</td></tr>
                                <tr><td>AI & Machine Learning Intro</td><td>8 weeks</td><td>$249</td><td>✅ Yes</td></tr>
                                <tr><td>Product Management for Tech</td><td>4 weeks</td><td>$99</td><td>✅ Yes</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">Bootcamps (Intensive)</h2>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Bootcamp</th>
                                    <th>Duration</th>
                                    <th>Price</th>
                                    <th>Format</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Full Stack Immersive</td><td>12 weeks (full-time)</td><td>$1,499</td><td>In-person + Virtual</td></tr>
                                <tr><td>Data Science Intensive</td><td>10 weeks (full-time)</td><td>$1,299</td><td>Virtual</td></tr>
                                <tr><td>UI/UX Career Track</td><td>8 weeks (full-time)</td><td>$999</td><td>In-person</td></tr>
                                <tr><td>Cybersecurity Professional</td><td>10 weeks (weekends)</td><td>$899</td><td>Hybrid</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">Subscription Model (Unlimited Learning)</h2>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Plan</th>
                                    <th>Price (Monthly)</th>
                                    <th>Price (Annual)</th>
                                    <th>Access</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="fw-bold">Basic</td><td>$29/month</td><td>$290/year</td><td>Any 1 course at a time</td></tr>
                                <tr><td class="fw-bold">Pro</td><td>$49/month</td><td>$490/year</td><td>Unlimited access to all courses</td></tr>
                                <tr><td class="fw-bold">Pro+</td><td>$79/month</td><td>$790/year</td><td>Unlimited courses + 1:1 tutoring (2hrs/month)</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">Corporate/Academy for Teams</h2>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Plan</th>
                                    <th>Price per seat (mo)</th>
                                    <th>Minimum seats</th>
                                    <th>Features</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="fw-bold">Team Plan</td><td>$39</td><td>5 seats</td><td>All Pro features + team dashboard</td></tr>
                                <tr><td class="fw-bold">Enterprise Academy</td><td>Custom pricing</td><td>20+ seats</td><td>Custom curriculum + reporting + API access</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4">

                    <h2 class="h5 fw-bold mb-3">Free Courses (Always Free)</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Intro to Coding</td><td>2 hours</td></tr>
                                <tr><td>HTML & CSS Basics</td><td>3 hours</td></tr>
                                <tr><td>How to Build a Startup</td><td>1 hour</td></tr>
                                <tr><td>Intro to UI/UX</td><td>2 hours</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-3 p-lg-4 bg-dark text-white rounded-4 mt-4">
                        <div class="fw-bold">Start learning today</div>
                        <div class="small text-white-50 mt-1">Pick a course, join a bootcamp, or subscribe for unlimited learning.</div>
                        <a class="btn btn-light btn-sm mt-3" href="{{ route('company.contact') }}">Enroll / Ask a Question</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('landing.partials.footer')
@endsection
