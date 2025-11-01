@extends('layouts.app')

@section('title', 'Care Connect Solutions | Services')

@section('content')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active current">Services</li>
            </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1>Services</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
        </div><!-- End Page Title -->

        <!-- Services Section -->
        <section id="services" class="services section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="services-tabs">
            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="200">
                <li class="nav-item" role="presentation">
                <button class="nav-link active" id="services-primary-tab" data-bs-toggle="tab" data-bs-target="#services-primary" type="button" role="tab">Primary Care</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="services-specialty-tab" data-bs-toggle="tab" data-bs-target="#services-specialty" type="button" role="tab">Specialty Care</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="services-diagnostics-tab" data-bs-toggle="tab" data-bs-target="#services-diagnostics" type="button" role="tab">Diagnostics</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="services-emergency-tab" data-bs-toggle="tab" data-bs-target="#services-emergency" type="button" role="tab">Emergency</button>
                </li>
            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade show active" id="services-primary" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-stethoscope"></i>
                        </div>
                        <div class="service-details">
                        <h5>General Consultation</h5>
                        <p>Cupiditate placeat facere. Delectus quisquam et consequatur laborum sunt consectetur.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Comprehensive Health Assessment</li>
                            <li><i class="fa fa-check-circle"></i>Preventive Care Planning</li>
                            <li><i class="fa fa-check-circle"></i>Health Monitoring</li>
                        </ul>
                        <a href="service-details.html" class="service-link">
                            <span>Learn More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-syringe"></i>
                        </div>
                        <div class="service-details">
                        <h5>Vaccination Services</h5>
                        <p>Voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Adult Immunizations</li>
                            <li><i class="fa fa-check-circle"></i>Travel Vaccines</li>
                            <li><i class="fa fa-check-circle"></i>Flu Shots</li>
                        </ul>
                        <a href="service-details.html" class="service-link">
                            <span>Learn More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-baby"></i>
                        </div>
                        <div class="service-details">
                        <h5>Maternal Health</h5>
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Prenatal Care</li>
                            <li><i class="fa fa-check-circle"></i>Delivery Support</li>
                            <li><i class="fa fa-check-circle"></i>Postnatal Care</li>
                        </ul>
                        <a href="service-details.html" class="service-link">
                            <span>Learn More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-user-md"></i>
                        </div>
                        <div class="service-details">
                        <h5>Family Medicine</h5>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>All-Age Care</li>
                            <li><i class="fa fa-check-circle"></i>Chronic Disease Management</li>
                            <li><i class="fa fa-check-circle"></i>Wellness Programs</li>
                        </ul>
                        <a href="service-details.html" class="service-link">
                            <span>Learn More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="tab-pane fade" id="services-specialty" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-6">
                    <div class="service-item featured">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-heartbeat"></i>
                        </div>
                        <div class="service-details">
                        <h5>Cardiology</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Heart Disease Treatment</li>
                            <li><i class="fa fa-check-circle"></i>Cardiac Surgery</li>
                            <li><i class="fa fa-check-circle"></i>Rehabilitation Programs</li>
                        </ul>
                        <a href="service-details.html" class="service-link">
                            <span>Learn More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-brain"></i>
                        </div>
                        <div class="service-details">
                        <h5>Neurology</h5>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Neurological Assessment</li>
                            <li><i class="fa fa-check-circle"></i>Stroke Treatment</li>
                            <li><i class="fa fa-check-circle"></i>Memory Care</li>
                        </ul>
                        <a href="service-details.html" class="service-link">
                            <span>Learn More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-bone"></i>
                        </div>
                        <div class="service-details">
                        <h5>Orthopedics</h5>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Joint Replacement</li>
                            <li><i class="fa fa-check-circle"></i>Sports Medicine</li>
                            <li><i class="fa fa-check-circle"></i>Pain Management</li>
                        </ul>
                        <a href="service-details.html" class="service-link">
                            <span>Learn More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-user-nurse"></i>
                        </div>
                        <div class="service-details">
                        <h5>Oncology</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Cancer Treatment</li>
                            <li><i class="fa fa-check-circle"></i>Chemotherapy</li>
                            <li><i class="fa fa-check-circle"></i>Support Services</li>
                        </ul>
                        <a href="service-details.html" class="service-link">
                            <span>Learn More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="tab-pane fade" id="services-diagnostics" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-vial"></i>
                        </div>
                        <div class="service-details">
                        <h5>Laboratory Testing</h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Blood Analysis</li>
                            <li><i class="fa fa-check-circle"></i>Pathology Services</li>
                            <li><i class="fa fa-check-circle"></i>Quick Results</li>
                        </ul>
                        <a href="service-details.html" class="service-link">
                            <span>Learn More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-x-ray"></i>
                        </div>
                        <div class="service-details">
                        <h5>Diagnostic Imaging</h5>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>MRI Scans</li>
                            <li><i class="fa fa-check-circle"></i>CT Imaging</li>
                            <li><i class="fa fa-check-circle"></i>Ultrasound</li>
                        </ul>
                        <a href="service-details.html" class="service-link">
                            <span>Learn More</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="tab-pane fade" id="services-emergency" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-12">
                    <div class="service-item emergency-highlight">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-ambulance"></i>
                        </div>
                        <div class="service-details">
                        <h5>24/7 Emergency Care</h5>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Round-the-Clock Availability</li>
                            <li><i class="fa fa-check-circle"></i>Trauma Center</li>
                            <li><i class="fa fa-check-circle"></i>Critical Care Unit</li>
                            <li><i class="fa fa-check-circle"></i>Emergency Surgery</li>
                        </ul>
                        <div class="emergency-actions">
                            <a href="tel:911" class="btn-emergency">
                            <i class="fa fa-phone"></i>
                            <span>Call Emergency</span>
                            </a>
                            <a href="directions.html" class="btn-directions">
                            <i class="fa fa-map-marker-alt"></i>
                            <span>Get Directions</span>
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </div>

            <div class="services-cta" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                <div class="cta-content">
                    <i class="fa fa-calendar-check"></i>
                    <h3>Ready to Schedule Your Appointment?</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                    <div class="cta-buttons">
                    <a href="appointment.html" class="btn-book">Book Now</a>
                    <a href="contact.html" class="btn-contact">Contact Us</a>
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>

        </section><!-- /Services Section -->

    </main>

@endsection