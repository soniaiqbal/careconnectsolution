@extends('layouts.app')

@section('title', 'Care Connect Solutions | Services')

@section('content')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bi bi-house"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active current">Services</li>
            </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1>Services</h1>
            <p>Experience expert medical care tailored to your lifestyle and needs. From routine wellness to specialist support, we make quality healthcare simple, personal, and always within reach.</p>
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
                        <p>Personalized medical guidance for everyday health concerns, routine checkups, and preventive wellness support.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Complete Health Evaluation</li>
                            <li><i class="fa fa-check-circle"></i>Preventive Care & Wellness Plans</li>
                            <li><i class="fa fa-check-circle"></i>Continuous Health Follow-up</li>
                        </ul>
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
                        <p>Protective immunization services designed to prevent infections and support long-term community health.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Adult & Routine Vaccines</li>
                            <li><i class="fa fa-check-circle"></i>Travel & Seasonal Immunization</li>
                            <li><i class="fa fa-check-circle"></i>Flu & Preventive Shots</li>
                        </ul>
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
                        <p>Comprehensive care for expecting and new mothers, ensuring a healthy pregnancy, safe delivery, and confident postpartum journey.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Prenatal Care & Monitoring</li>
                            <li><i class="fa fa-check-circle"></i>Labor & Delivery Support</li>
                            <li><i class="fa fa-check-circle"></i>Postnatal & Newborn Guidance</li>
                        </ul>
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
                        <p>Comprehensive care for individuals and families, supporting long-term wellness and managing everyday health needs at every stage of life.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Care for All Age Groups</li>
                            <li><i class="fa fa-check-circle"></i>Chronic Condition Management</li>
                            <li><i class="fa fa-check-circle"></i>Preventive & Wellness Plans</li>
                        </ul>
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
                        <p>Expert care for heart and vascular conditions, offering advanced diagnostics, personalized treatment plans, and long-term cardiac support.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Heart Disease Management</li>
                            <li><i class="fa fa-check-circle"></i>Cardiac Procedures & Surgery</li>
                            <li><i class="fa fa-check-circle"></i>Recovery & Rehabilitation Care</li>
                        </ul>
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
                        <p>Specialized care for brain and nervous system disorders, providing accurate diagnosis, advanced treatment options, and dedicated support.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Neurological Evaluation</li>
                            <li><i class="fa fa-check-circle"></i>Stroke & Seizure Management</li>
                            <li><i class="fa fa-check-circle"></i>Memory & Cognitive Care</li>
                        </ul>
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
                        <p>Expert care for bone, joint, and muscle conditions, offering advanced treatments to restore strength, mobility, and comfort.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Joint Replacement & Repair</li>
                            <li><i class="fa fa-check-circle"></i>Sports Injury Treatment</li>
                            <li><i class="fa fa-check-circle"></i>Comprehensive Pain Management</li>
                        </ul>
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
                        <p>Our oncology department is dedicated to delivering compassionate and comprehensive cancer care using advanced medical treatments and personalized support.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Advanced Cancer Diagnosis & Treatment</li>
                            <li><i class="fa fa-check-circle"></i>Chemotherapy & Targeted Therapies</li>
                            <li><i class="fa fa-check-circle"></i>Patient Support & Counseling Services</li>
                        </ul>
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
                        <p>Our state-of-the-art laboratory provides accurate and timely diagnostic testing to support precise medical evaluation and treatment planning.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Comprehensive Blood Testing</li>
                            <li><i class="fa fa-check-circle"></i>Advanced Pathology & Diagnostics</li>
                            <li><i class="fa fa-check-circle"></i>Fast & Reliable Results</li>
                        </ul>
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
                        <p>Our advanced imaging services provide precise and detailed medical scans to assist in accurate diagnosis and effective treatment planning.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>MRI Scans</li>
                            <li><i class="fa fa-check-circle"></i>CT Imaging</li>
                            <li><i class="fa fa-check-circle"></i>Ultrasound Services</li>
                        </ul>
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
                        <p>Our emergency department is fully equipped to provide immediate and lifesaving medical assistance at any time of day or night, ensuring critical care when you need it most.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Round-the-Clock Availability</li>
                            <li><i class="fa fa-check-circle"></i>Advanced Trauma Center</li>
                            <li><i class="fa fa-check-circle"></i>Dedicated Critical Care Unit</li>
                            <li><i class="fa fa-check-circle"></i>Emergency Surgical Services</li>
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
                    <p>Take the first step toward better health and wellness. Book your appointment today and receive expert, compassionate care from our dedicated medical team. We look forward to supporting you on your healthcare journey.</p>
                    <div class="cta-buttons">
                    <a href="{{route('contact')}}" class="btn-contact">Contact Us</a>
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>

        </section><!-- /Services Section -->

    </main>

@endsection