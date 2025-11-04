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
                <button class="nav-link" id="services-emergency-tab" data-bs-toggle="tab" data-bs-target="#services-emergency" type="button" role="tab">Emergency</button>
                </li>
            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade show active" id="services-primary" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-lungs"></i>
                        </div>
                        <div class="service-details">
                        <h5>Respiratory Assessment</h5>
                        <p>Comprehensive evaluation to diagnose breathing difficulties and plan effective treatment strategies.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Complete Respiratory Examination</li>
                            <li><i class="fa fa-check-circle"></i>Breathing & Lung Function Assessment</li>
                            <li><i class="fa fa-check-circle"></i>Personalized Treatment Plan</li>
                        </ul>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-wind"></i>
                        </div>
                        <div class="service-details">
                        <h5>Oxygen Therapy</h5>
                        <p>Safe and effective administration of oxygen therapy for patients with respiratory distress or chronic lung conditions.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Home Oxygen Setup & Monitoring</li>
                            <li><i class="fa fa-check-circle"></i>Pulse Oximetry Evaluation</li>
                            <li><i class="fa fa-check-circle"></i>Emergency Oxygen Support</li>
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
                        <h5>Non-Invasive Ventilation (BiPAP & CPAP)</h5>
                        <p>Professional setup and monitoring of BiPAP & CPAP therapy to support breathing and improve oxygen levels.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>BiPAP & CPAP Machine Setup</li>
                            <li><i class="fa fa-check-circle"></i>Mask Fitting & Adjustment</li>
                            <li><i class="fa fa-check-circle"></i>Therapy Monitoring & Education</li>
                        </ul>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-pump-medical"></i>
                        </div>
                        <div class="service-details">
                        <h5>Suctioning & Airway Clearance</h5>
                        <p>Professional suctioning and airway clearance to assist patients with mucus buildup or breathing difficulty.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Chest Physiotherapy (CPT)</li>
                            <li><i class="fa fa-check-circle"></i>Oral & Nasal Suctioning</li>
                            <li><i class="fa fa-check-circle"></i>Deep Breathing & Incentive Spirometry</li>
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
                        <i class="fa fa-procedures"></i>
                        </div>
                        <div class="service-details">
                        <h5>Ventilator Management</h5>
                        <p>Skilled management of mechanical ventilation for patients requiring full respiratory support.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Ventilator Setup & Operation</li>
                            <li><i class="fa fa-check-circle"></i>Monitoring & Adjustments</li>
                            <li><i class="fa fa-check-circle"></i>Airway Safety & Care</li>
                        </ul>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-procedures"></i>
                        </div>
                        <div class="service-details">
                        <h5>Tracheostomy Care</h5>
                        <p>Professional tracheostomy tube care, cleaning, and airway maintenance for comfort and safety.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Tube Cleaning & Sanitization</li>
                            <li><i class="fa fa-check-circle"></i>Airway Suction & Humidification</li>
                            <li><i class="fa fa-check-circle"></i>Patient & Family Training</li>
                        </ul>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-vials"></i>
                        </div>
                        <div class="service-details">
                        <h5>ABG Testing & Interpretation</h5>
                        <p>Accurate arterial blood gas sampling and expert interpretation for respiratory and metabolic conditions.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Arterial Blood Sampling</li>
                            <li><i class="fa fa-check-circle"></i>Comprehensive ABG Report</li>
                            <li><i class="fa fa-check-circle"></i>Therapy Recommendations</li>
                        </ul>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="service-item">
                        <div class="service-icon-wrapper">
                        <i class="fa fa-ambulance"></i>
                        </div>
                        <div class="service-details">
                         <h5>Emergency Respiratory Support</h5>
                        <p>Immediate response and urgent respiratory intervention for breathing difficulties and critical care needs.</p>
                        <ul class="service-benefits">
                            <li><i class="fa fa-check-circle"></i>Rapid Oxygen & Airway Support</li>
                            <li><i class="fa fa-check-circle"></i>Suction & Breathing Assistance</li>
                            <li><i class="fa fa-check-circle"></i>BiPAP/CPAP Emergency Setup</li>
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