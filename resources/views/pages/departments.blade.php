@extends('layouts.app')

@section('title', 'Care Connect Solutions | Departments')

@section('content')
    <main class="main">
        <div class="page-title">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bi bi-house"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active current">Departments</li>
            </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1>Departments</h1>
            <p>From expert consultations to advanced treatments, our medical departments offer complete, technology-enabled care for your well-being.</p>
        </div>
        </div>
        <section id="departments" class="departments section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

            <!-- First Column with 2 departments -->
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="department-card">
                <div class="department-header">
                    <div class="department-icon">
                    <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h3>Cardiology</h3>
                    <p class="department-subtitle">Heart &amp; Vascular Care</p>
                </div>
                <div class="department-image-wrapper">
                    <img src="assets/img/health/cardiology-2.webp" alt="Cardiology" class="img-fluid" loading="lazy">
                    <div class="department-stats">
                    <div class="stat-item">
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Procedures</span>
                    </div>
                    </div>
                </div>
                <div class="department-content">
                    <p>Comprehensive heart and vascular care using advanced diagnostics and modern treatments to protect and improve long-term cardiac health.</p>
                    <ul class="department-highlights">
                    <li><i class="bi bi-check2"></i> Advanced Cardiac Surgery</li>
                    <li><i class="bi bi-check2"></i> Interventional Heart Procedures</li>
                    <li><i class="bi bi-check2"></i> Heart Rhythm & Electrophysiology Care</li>
                    </ul>
                    <!-- <a href="department-details.html" class="department-link">Learn More</a> -->
                </div>
                </div>

                <div class="department-card" data-aos="zoom-in" data-aos-delay="350">
                <div class="department-header">
                    <div class="department-icon">
                    <i class="bi bi-shield-plus"></i>
                    </div>
                    <h3>Dermatology</h3>
                    <p class="department-subtitle">Skin Health Experts</p>
                </div>
                <div class="department-image-wrapper">
                    <img src="assets/img/health/dermatology-3.webp" alt="Dermatology" class="img-fluid" loading="lazy">
                    <div class="department-stats">
                    <div class="stat-item">
                        <span class="stat-number">1200+</span>
                        <span class="stat-label">Treatments</span>
                    </div>
                    </div>
                </div>
                <div class="department-content">
                    <p>Advanced skin care and treatment for medical and cosmetic concerns, ensuring healthy, radiant skin with modern dermatology techniques.</p>
                    <ul class="department-highlights">
                    <li><i class="bi bi-check2"></i> Cosmetic Dermatology & Skin Aesthetics</li>
                    <li><i class="bi bi-check2"></i> Skin Cancer Screening & Treatment</li>
                    <li><i class="bi bi-check2"></i> Laser & Advanced Skin Therapy</li>
                    </ul>
                    <!-- <a href="department-details.html" class="department-link">Learn More</a> -->
                </div>
                </div>
            </div><!-- End First Column -->

            <!-- Second Column - Featured Department -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="250">
                <div class="featured-department">
                <div class="featured-header">
                    <div class="featured-badge">
                    <i class="bi bi-star-fill"></i>
                    <span>Featured</span>
                    </div>
                    <div class="featured-icon">
                    <i class="bi bi-lightning-fill"></i>
                    </div>
                    <h2>Neurology</h2>
                    <p class="featured-subtitle">Brain &amp; Nervous System</p>
                </div>
                <div class="featured-image">
                    <img src="assets/img/health/neurology-4.webp" alt="Neurology Department" class="img-fluid" loading="lazy">
                    <div class="featured-overlay">
                    <div class="achievement-list">
                        <div class="achievement-item">
                        <i class="bi bi-award"></i>
                        <span>Award Winning Team</span>
                        </div>
                        <div class="achievement-item">
                        <i class="bi bi-clock"></i>
                        <span>24/7 Stroke Center</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="featured-content">
                    <p>Our neurology team specializes in treating brain, spine, and nervous system conditions with precision, compassion, and advanced medical technology. We deliver accurate evaluations and personalized treatment plans to help patients maintain optimal neurological function.</p>
                    <div class="featured-services">
                    <div class="service-tag">Advanced Brain Imaging</div>
                    <div class="service-tag">Epilepsy & Seizure Care</div>
                    <div class="service-tag">Stroke Management & Recovery</div>
                    <div class="service-tag">Memory & Cognitive Disorder Treatment</div>
                    </div>
                    <a href="{{route('contact')}}" class="featured-btn">
                    Book an Appointment
                        <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
                </div>
            </div><!-- End Featured Department -->

            <!-- Third Column with 2 departments -->
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="department-card">
                <div class="department-header">
                    <div class="department-icon">
                    <i class="bi bi-bandaid"></i>
                    </div>
                    <h3>Orthopedics</h3>
                    <p class="department-subtitle">Bone &amp; Joint Care</p>
                </div>
                <div class="department-image-wrapper">
                    <img src="assets/img/health/orthopedics-4.webp" alt="Orthopedics" class="img-fluid" loading="lazy">
                    <div class="department-stats">
                    <div class="stat-item">
                        <span class="stat-number">750+</span>
                        <span class="stat-label">Surgeries</span>
                    </div>
                    </div>
                </div>
                <div class="department-content">
                    <p>Specialized treatment for bones, joints, and spine to restore movement and relieve pain through surgical and non-surgical care.</p>
                    <ul class="department-highlights">
                    <li><i class="bi bi-check2"></i> Joint Replacement & Reconstruction</li>
                    <li><i class="bi bi-check2"></i> Sports Injury Treatment</li>
                    <li><i class="bi bi-check2"></i> Spine & Musculoskeletal Care</li>
                    </ul>
                    <!-- <a href="department-details.html" class="department-link">Learn More</a> -->
                </div>
                </div>

                <div class="department-card" data-aos="zoom-in" data-aos-delay="400">
                <div class="department-header">
                    <div class="department-icon">
                    <i class="bi bi-emoji-smile"></i>
                    </div>
                    <h3>Pediatrics</h3>
                    <p class="department-subtitle">Children's Health</p>
                </div>
                <div class="department-image-wrapper">
                    <img src="assets/img/health/pediatrics-2.webp" alt="Pediatrics" class="img-fluid" loading="lazy">
                    <div class="department-stats">
                    <div class="stat-item">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Young Patients</span>
                    </div>
                    </div>
                </div>
                <div class="department-content">
                    <p>Compassionate healthcare for children from infancy to adolescence, supporting healthy growth, development, and overall well-being.</p>
                    <ul class="department-highlights">
                    <li><i class="bi bi-check2"></i> Newborn & Infant Care</li>
                    <li><i class="bi bi-check2"></i> Childhood Growth & Development Support</li>
                    <li><i class="bi bi-check2"></i> Wellness Checkups & Immunization Guidance</li>
                    </ul>
                    <!-- <a href="department-details.html" class="department-link">Learn More</a> -->
                </div>
                </div>
            </div><!-- End Third Column -->

            </div>

        </div>

        </section>
    </main>
@endsection