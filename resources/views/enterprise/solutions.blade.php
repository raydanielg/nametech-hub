@extends('layouts.app')

@section('content')
    @include('landing.partials.header')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                        <h1 class="fw-bold display-5 mb-3">WHAT IS NAMTECH-HUB ENTERPRISE?</h1>
                        <p class="lead text-muted mb-0">
                            NAMTECH-HUB Enterprise ni suluhisho maalum kwa mashirika makubwa – ikiwa ni pamoja na makampuni, serikali, mashirika yasiyo ya kiserikali (NGOs), na taasisi za elimu.
                            Tunatoa huduma za kiwango cha juu za:
                        </p>
                    </div>

                    <div class="card border-0 shadow-sm rounded-4 mb-5">
                        <div class="card-body p-4 p-md-5">
                            <div class="row g-3">
                                <div class="col-md-6"><div class="d-flex gap-2"><span class="text-success fw-bold">✓</span><div>Upskilling wafanyakazi</div></div></div>
                                <div class="col-md-6"><div class="d-flex gap-2"><span class="text-success fw-bold">✓</span><div>Digital transformation</div></div></div>
                                <div class="col-md-6"><div class="d-flex gap-2"><span class="text-success fw-bold">✓</span><div>Innovation-as-a-Service</div></div></div>
                                <div class="col-md-6"><div class="d-flex gap-2"><span class="text-success fw-bold">✓</span><div>Custom software development</div></div></div>
                                <div class="col-md-6"><div class="d-flex gap-2"><span class="text-success fw-bold">✓</span><div>Talent acquisition</div></div></div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2 justify-content-center mb-5">
                        <a href="#training" class="btn btn-outline-dark btn-sm fw-bold">Corporate Training</a>
                        <a href="#digital-transformation" class="btn btn-outline-dark btn-sm fw-bold">Digital Transformation</a>
                        <a href="#innovation-as-service" class="btn btn-outline-dark btn-sm fw-bold">Innovation-as-a-Service</a>
                        <a href="#startup-partnership" class="btn btn-outline-dark btn-sm fw-bold">Startup Partnership</a>
                        <a href="#case-studies" class="btn btn-outline-dark btn-sm fw-bold">Case Studies</a>
                        <a href="#request-demo" class="btn btn-success btn-sm fw-bold" style="background-color: #10b981; border-color: #10b981;">Request Demo</a>
                    </div>

                    <section id="training" class="mb-5">
                        <h2 class="fw-bold mb-3">1. CORPORATE TRAINING</h2>

                        <h5 class="fw-bold mt-4">Overview</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <tbody>
                                    <tr><th style="width: 30%">What it is</th><td>Customized technology upskilling programs for your employees</td></tr>
                                    <tr><th>Duration</th><td>1 day workshop to 12 month program</td></tr>
                                    <tr><th>Format</th><td>In-person, virtual, or hybrid</td></tr>
                                    <tr><th>Certification</th><td>NAMTECH-HUB certified (recognized by industry)</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Training Programs Available</h5>
                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr>
                                        <th>Program</th>
                                        <th>Duration</th>
                                        <th>Topics Covered</th>
                                        <th>Best For</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Digital Literacy</td><td>2 days</td><td>Basic tech skills, digital tools, online safety</td><td>Non-tech employees</td></tr>
                                    <tr><td>Data Analytics for Managers</td><td>5 days</td><td>Excel, SQL, Power BI, Tableau</td><td>Mid-level managers</td></tr>
                                    <tr><td>Software Development Bootcamp</td><td>12 weeks</td><td>Full-stack web development, mobile apps</td><td>Internal dev teams</td></tr>
                                    <tr><td>AI &amp; Automation Fundamentals</td><td>3 days</td><td>AI basics, automation tools, prompt engineering</td><td>All employees</td></tr>
                                    <tr><td>Cybersecurity Awareness</td><td>1 day</td><td>Security best practices, phishing, data protection</td><td>Entire organization</td></tr>
                                    <tr><td>Digital Product Management</td><td>5 days</td><td>Agile, roadmap, user research, metrics</td><td>Product teams</td></tr>
                                    <tr><td>Cloud Computing (AWS/Azure)</td><td>4 days</td><td>Cloud basics, deployment, cost management</td><td>IT/Dev teams</td></tr>
                                    <tr><td>Leadership in Digital Era</td><td>2 days</td><td>Digital strategy, change management, innovation culture</td><td>Executives</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Pricing – Corporate Training</h5>
                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr>
                                        <th>Program Type</th>
                                        <th>Price per Participant</th>
                                        <th>Minimum Participants</th>
                                        <th>Customization Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1-day workshop</td><td>$199</td><td>10</td><td>$500 one-time</td></tr>
                                    <tr><td>2-day workshop</td><td>$349</td><td>10</td><td>$500 one-time</td></tr>
                                    <tr><td>3-day program</td><td>$499</td><td>10</td><td>$500 one-time</td></tr>
                                    <tr><td>5-day program</td><td>$799</td><td>10</td><td>$1,000 one-time</td></tr>
                                    <tr><td>4-week part-time</td><td>$1,499</td><td>8</td><td>$1,500 one-time</td></tr>
                                    <tr><td>12-week bootcamp</td><td>$3,999</td><td>8</td><td>$2,500 one-time</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Volume Discounts (per program)</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <thead>
                                    <tr><th>Number of Participants</th><th>Discount</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>10 – 19 participants</td><td>0% (regular price)</td></tr>
                                    <tr><td>20 – 49 participants</td><td>10% off</td></tr>
                                    <tr><td>50 – 99 participants</td><td>20% off</td></tr>
                                    <tr><td>100 – 199 participants</td><td>30% off</td></tr>
                                    <tr><td>200+ participants</td><td>Custom pricing (contact us)</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Enterprise Annual Training Subscription</h5>
                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr>
                                        <th>Plan</th>
                                        <th>Annual Fee</th>
                                        <th>Includes</th>
                                        <th>Savings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Bronze</td><td>$25,000</td><td>Up to 100 training seats</td><td>N/A</td></tr>
                                    <tr><td>Silver</td><td>$45,000</td><td>Up to 200 training seats + 2 custom workshops</td><td>~$10,000</td></tr>
                                    <tr><td>Gold</td><td>$75,000</td><td>Up to 400 training seats + 5 custom workshops + 1 executive summit</td><td>~$25,000</td></tr>
                                    <tr><td>Platinum</td><td>$150,000</td><td>Unlimited training seats + 10 custom workshops + executive coaching + dedicated training manager</td><td>~$60,000</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section id="digital-transformation" class="mb-5">
                        <h2 class="fw-bold mb-3">2. DIGITAL TRANSFORMATION</h2>

                        <h5 class="fw-bold mt-4">Overview</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <tbody>
                                    <tr><th style="width: 30%">What it is</th><td>End-to-end consulting and implementation to digitize your organization</td></tr>
                                    <tr><th>Duration</th><td>3 months to 2 years (depends on scope)</td></tr>
                                    <tr><th>Deliverables</th><td>Strategy, software, processes, change management</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Digital Transformation Services</h5>
                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>Description</th>
                                        <th>Typical Timeline</th>
                                        <th>Price Range</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Digital Strategy Roadmap</td><td>Assessment + 3-5 year digital plan + prioritized initiatives</td><td>4-6 weeks</td><td>$15,000–$40,000</td></tr>
                                    <tr><td>Business Process Digitization</td><td>Move paper/offline processes to digital workflows</td><td>2-6 months</td><td>$30,000–$100,000</td></tr>
                                    <tr><td>Legacy System Migration</td><td>Move old systems to modern cloud platforms</td><td>3-9 months</td><td>$50,000–$200,000</td></tr>
                                    <tr><td>Custom ERP/Management System</td><td>Build tailored system for your operations</td><td>4-12 months</td><td>$75,000–$300,000</td></tr>
                                    <tr><td>Customer Portal / Digital Service</td><td>Web or mobile platform for your customers</td><td>3-8 months</td><td>$40,000–$150,000</td></tr>
                                    <tr><td>Data Warehouse &amp; Analytics</td><td>Centralized data + dashboards + reporting</td><td>3-6 months</td><td>$30,000–$120,000</td></tr>
                                    <tr><td>Cloud Migration</td><td>Move infrastructure to AWS/Azure/Google Cloud</td><td>2-5 months</td><td>$20,000–$80,000</td></tr>
                                    <tr><td>Change Management</td><td>Training, communication, adoption support</td><td>Ongoing</td><td>$10,000–$50,000 per phase</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Full Digital Transformation Package</h5>
                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr>
                                        <th>Package</th>
                                        <th>What's Included</th>
                                        <th>Price</th>
                                        <th>Best For</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Essential</td><td>Strategy roadmap + 1 process digitization + training</td><td>$60,000–$100,000</td><td>Mid-size organizations</td></tr>
                                    <tr><td>Professional</td><td>Strategy + 3 processes + custom portal + cloud migration + change mgmt</td><td>$150,000–$250,000</td><td>Large organizations</td></tr>
                                    <tr><td>Enterprise</td><td>Full transformation (all services) + 24/7 support + dedicated team</td><td>$300,000–$750,000+</td><td>Government, large corporations</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Payment Structure for Digital Transformation</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <thead>
                                    <tr><th>Milestone</th><th>Percentage</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>Discovery &amp; Assessment (kickoff)</td><td>20%</td></tr>
                                    <tr><td>Strategy &amp; Design approved</td><td>20%</td></tr>
                                    <tr><td>Development Phase 1 complete</td><td>25%</td></tr>
                                    <tr><td>Development Phase 2 complete</td><td>20%</td></tr>
                                    <tr><td>Launch &amp; Training complete</td><td>10%</td></tr>
                                    <tr><td>Post-launch support (3 months)</td><td>5%</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section id="innovation-as-service" class="mb-5">
                        <h2 class="fw-bold mb-3">3. INNOVATION-AS-A-SERVICE (IaaS)</h2>

                        <h5 class="fw-bold mt-4">Overview</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <tbody>
                                    <tr><th style="width: 30%">What it is</th><td>A dedicated innovation team that works exclusively for your organization</td></tr>
                                    <tr><th>How it works</th><td>We embed a team of innovators, developers, and designers to solve your challenges</td></tr>
                                    <tr><th>Duration</th><td>6 months minimum, typically 12-24 months</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">What's Included</h5>
                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr><th>Component</th><th>Description</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>Dedicated Innovation Lead</td><td>Senior person managing your innovation agenda</td></tr>
                                    <tr><td>2-5 Developers/Engineers</td><td>Build solutions for your specific needs</td></tr>
                                    <tr><td>1 UI/UX Designer</td><td>Design thinking and user experience</td></tr>
                                    <tr><td>1 Product Manager</td><td>Roadmap, backlog, stakeholder management</td></tr>
                                    <tr><td>Access to Startup Ecosystem</td><td>We scout startups that can solve your problems</td></tr>
                                    <tr><td>Monthly Innovation Report</td><td>Progress, metrics, recommendations</td></tr>
                                    <tr><td>Quarterly Innovation Summit</td><td>Present findings to your leadership</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Pricing – Innovation-as-a-Service</h5>
                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr>
                                        <th>Team Size</th>
                                        <th>Monthly Fee</th>
                                        <th>Annual Contract</th>
                                        <th>Includes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Small Team (3 people)</td><td>$15,000/month</td><td>$180,000/year</td><td>1 Innovation Lead + 2 Developers</td></tr>
                                    <tr><td>Medium Team (6 people)</td><td>$28,000/month</td><td>$336,000/year</td><td>1 Lead + 4 Devs + 1 Designer</td></tr>
                                    <tr><td>Large Team (10 people)</td><td>$45,000/month</td><td>$540,000/year</td><td>1 Lead + 7 Devs + 1 Designer + 1 PM</td></tr>
                                    <tr><td>Custom Team</td><td>Custom pricing</td><td>Custom</td><td>Tailored to your needs</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">What You Get (All Plans)</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <tbody>
                                    <tr><th style="width: 45%">Dedicated team (not shared)</th><td>✅ Yes</td></tr>
                                    <tr><th>Intellectual property owned by you</th><td>✅ Yes</td></tr>
                                    <tr><th>Weekly progress updates</th><td>✅ Yes</td></tr>
                                    <tr><th>Access to NAMTECH-HUB startups for pilots</th><td>✅ Yes</td></tr>
                                    <tr><th>Priority access to Academy talent</th><td>✅ Yes</td></tr>
                                    <tr><th>Discount on other Enterprise services</th><td>15% off</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section id="startup-partnership" class="mb-5">
                        <h2 class="fw-bold mb-3">4. STARTUP PARTNERSHIP</h2>

                        <h5 class="fw-bold mt-4">Overview</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <tbody>
                                    <tr><th style="width: 30%">What it is</th><td>Connect your enterprise with NAMTECH-HUB's startup ecosystem</td></tr>
                                    <tr><th>Benefits</th><td>Access innovation, scout acquisition targets, run pilots, co-innovate</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Partnership Models</h5>
                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr>
                                        <th>Model</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Duration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Startup Scouting</td><td>We find startups that solve your business problems</td><td>$10,000 per search</td><td>4-8 weeks</td></tr>
                                    <tr><td>Corporate Innovation Challenge</td><td>Run a competition where startups pitch to you</td><td>$25,000 + prizes</td><td>8-12 weeks</td></tr>
                                    <tr><td>Pilot Program</td><td>Run a pilot with 3-5 startups (you pay startups)</td><td>$15,000 program fee + pilot costs</td><td>3-6 months</td></tr>
                                    <tr><td>Corporate Incubator</td><td>We run an incubator inside your company</td><td>$50,000–$150,000/year</td><td>Annual</td></tr>
                                    <tr><td>Strategic Investment</td><td>We help you identify and invest in startups</td><td>Custom</td><td>Ongoing</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Annual Innovation Partnership Package</h5>
                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr><th>Package</th><th>Annual Fee</th><th>Includes</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>Explorer</td><td>$30,000</td><td>2 startup scouting reports + 1 innovation day</td></tr>
                                    <tr><td>Pioneer</td><td>$75,000</td><td>4 scouting reports + 1 innovation challenge + 2 pilots</td></tr>
                                    <tr><td>Trailblazer</td><td>$150,000</td><td>Unlimited scouting + 2 challenges + 5 pilots + corporate incubator setup</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section id="case-studies" class="mb-5">
                        <h2 class="fw-bold mb-3">5. CASE STUDIES (Enterprise Success Stories)</h2>
                        <p class="text-muted">Hizi ni examples za Enterprise clients waliotumia huduma zetu – zitawekwa kwenye website kama proof.</p>

                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr><th colspan="2">Case Study 1: Large Bank – Digital Transformation</th></tr>
                                </thead>
                                <tbody>
                                    <tr><th style="width: 30%">Client</th><td>Major commercial bank (300+ branches)</td></tr>
                                    <tr><th>Challenge</th><td>Paper-based loan processing taking 14+ days</td></tr>
                                    <tr><th>Solution</th><td>Custom digital loan management system</td></tr>
                                    <tr><th>Timeline</th><td>8 months</td></tr>
                                    <tr><th>Investment</th><td>$180,000</td></tr>
                                    <tr><th>Result</th><td>Loan approval time reduced to 2 days; 40% increase in loan applications</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr><th colspan="2">Case Study 2: Government Agency – E-Governance Platform</th></tr>
                                </thead>
                                <tbody>
                                    <tr><th style="width: 30%">Client</th><td>Ministry of Agriculture</td></tr>
                                    <tr><th>Challenge</th><td>Farmers had no digital access to subsidies and extension services</td></tr>
                                    <tr><th>Solution</th><td>Mobile app + SMS platform for farmers</td></tr>
                                    <tr><th>Timeline</th><td>10 months</td></tr>
                                    <tr><th>Investment</th><td>$250,000 (government grant funded)</td></tr>
                                    <tr><th>Result</th><td>500,000+ farmers registered; 70% reduction in subsidy processing time</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr><th colspan="2">Case Study 3: Telecom Company – Corporate Training</th></tr>
                                </thead>
                                <tbody>
                                    <tr><th style="width: 30%">Client</th><td>Leading telecom provider</td></tr>
                                    <tr><th>Challenge</th><td>Employees lacked modern digital skills</td></tr>
                                    <tr><th>Solution</th><td>12-week data analytics bootcamp for 200 employees</td></tr>
                                    <tr><th>Timeline</th><td>4 months (rolling cohorts)</td></tr>
                                    <tr><th>Investment</th><td>$60,000 (Silver annual subscription)</td></tr>
                                    <tr><th>Result</th><td>85% completion rate; 40 employees promoted or moved to digital roles</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr><th colspan="2">Case Study 4: International NGO – Custom Software</th></tr>
                                </thead>
                                <tbody>
                                    <tr><th style="width: 30%">Client</th><td>Global health NGO</td></tr>
                                    <tr><th>Challenge</th><td>No unified system to track patient data across 50 clinics</td></tr>
                                    <tr><th>Solution</th><td>Custom patient management system (web + mobile)</td></tr>
                                    <tr><th>Timeline</th><td>6 months</td></tr>
                                    <tr><th>Investment</th><td>$95,000</td></tr>
                                    <tr><th>Result</th><td>1.2 million patients tracked; real-time reporting to HQ</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section id="request-demo" class="mb-5">
                        <h2 class="fw-bold mb-3">6. REQUEST DEMO</h2>

                        <h5 class="fw-bold mt-4">How to Request an Enterprise Demo</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <thead>
                                    <tr><th style="width: 10%">Step</th><th>Action</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>1</td><td>Fill out the Enterprise Demo Request Form</td></tr>
                                    <tr><td>2</td><td>We schedule a 30-minute discovery call</td></tr>
                                    <tr><td>3</td><td>We prepare a custom demo based on your needs</td></tr>
                                    <tr><td>4</td><td>60-minute live demo with your team</td></tr>
                                    <tr><td>5</td><td>We deliver a proposal within 5 business days</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Demo Request Form Fields</h5>
                        <div class="table-responsive">
                            <table class="table table-striped bg-white align-middle">
                                <thead>
                                    <tr><th>Field</th><th>Type</th><th>Required</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>Full Name</td><td>Text</td><td>✅</td></tr>
                                    <tr><td>Job Title</td><td>Text</td><td>✅</td></tr>
                                    <tr><td>Company/Organization Name</td><td>Text</td><td>✅</td></tr>
                                    <tr><td>Company Size (employees)</td><td>Dropdown: 1-50, 51-200, 201-1000, 1000+</td><td>✅</td></tr>
                                    <tr><td>Industry</td><td>Dropdown: Banking, Telecom, Government, NGO, Healthcare, Education, Other</td><td>✅</td></tr>
                                    <tr><td>What service are you interested in?</td><td>Checkboxes: Training, Digital Transformation, IaaS, Startup Partnership, Other</td><td>✅</td></tr>
                                    <tr><td>Budget Range</td><td>Dropdown: 10k-50k, 50k-150k, 150k-500k, 500k+</td><td>❌</td></tr>
                                    <tr><td>Message</td><td>Textarea</td><td>❌</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h5 class="fw-bold mt-4">Contact Enterprise Team</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered bg-white align-middle">
                                <thead>
                                    <tr><th>Channel</th><th>Contact Info</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>Email</td><td>enterprise@namtech-hub.com</td></tr>
                                    <tr><td>Phone</td><td>+255 123 456 789 (press 2 for Enterprise)</td></tr>
                                    <tr><td>Office Hours</td><td>Mon-Fri, 9 AM – 5 PM (walk-ins welcome by appointment)</td></tr>
                                    <tr><td>Response Time</td><td>Within 24 hours for email; 1 hour for phone during business hours</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
@endsection
