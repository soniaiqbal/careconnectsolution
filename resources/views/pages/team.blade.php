@extends('layouts.app')

@section('title', 'Care Connect Solutions | Doctor')

@section('content')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bi bi-house"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active current">Doctors</li>
            </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1>Team</h1>
            <p>At CareConnect Solutions, our team is dedicated to delivering expert respiratory care with compassion, professionalism, and a patient-centered approach. Led by a qualified Respiratory Therapist, we work closely with skilled healthcare support staff to ensure every patient receives personalized care and specialized breathing support.
            Together, we are committed to improving lung health, enhancing quality of life, and providing reliable respiratory services in home-care and clinical settings.</p>
        </div>
        </div><!-- End Page Title -->

        <!-- Doctors Section -->
        <section id="doctors" class="doctors section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="doctor-card">
                <div class="doctor-image">
                    <img src="assets/img/health/team_abid.png" alt="Abid Emanuel" class="img-fluid">
                    <div class="doctor-overlay">
                    <!-- <div class="doctor-social">
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                    </div> -->
                    </div>
                </div>
                <div class="doctor-content">
                    <h4 class="doctor-name">Abid Emanuel</h4>
                    <span class="doctor-specialty">CEO & Respiratory Specialist</span>
                    <p class="doctor-bio">Skilled respiratory therapist specializing in airway care, ventilator support, and pulmonary rehab — dedicated to improving breathing and patient recovery with compassionate care.</p>
                    <div class="doctor-experience">
                    <span class="experience-badge">5+ Years Experience</span>
                    </div>
                    <a href="{{route('contact')}}" class="btn-appointment">Book Appointment</a>
                </div>
                </div>
            </div><!-- End Doctor Card -->

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="doctor-card">
                <div class="doctor-image">
                    <img src="assets/img/health/team_nouman.png" alt="Noman Emanuel" class="img-fluid">
                    <div class="doctor-overlay">
                    <!-- <div class="doctor-social">
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                    </div> -->
                    </div>
                </div>
                <div class="doctor-content">
                    <h4 class="doctor-name">Noman Emanuel</h4>
                    <span class="doctor-specialty">Respiratory Care Assistant</span>
                    <p class="doctor-bio">Supports patient respiratory care, oxygen management, suctioning, and tracheostomy assistance. Focused on safe, effective therapy and enhancing patient comfort and recovery.</p>
                    <div class="doctor-experience">
                    <span class="experience-badge">5+ Years Experience</span>
                    </div>
                    <a href="{{route('contact')}}" class="btn-appointment">Book Appointment</a>
                </div>
                </div>
            </div><!-- End Doctor Card -->

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="doctor-card">
                <div class="doctor-image">
                    <img src="assets/img/health/staff-3.webp" alt="Sara Malik" class="img-fluid">
                    <div class="doctor-overlay">
                    <!-- <div class="doctor-social">
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                    </div> -->
                    </div>
                </div>
                <div class="doctor-content">
                    <h4 class="doctor-name">Sara Malik</h4>
                    <span class="doctor-specialty">Clinical Assistant / Nurse</span>
                    <p class="doctor-bio">Manages patient support, therapy coordination, and home-care scheduling. Ensures seamless communication and a smooth, stress-free care experience for every patient.</p>
                    <div class="doctor-experience">
                    <span class="experience-badge">2+ Years Experience</span>
                    </div>
                    <a href="{{route('contact')}}" class="btn-appointment">Book Appointment</a>
                </div>
                </div>
            </div><!-- End Doctor Card -->

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="doctor-card">
                <div class="doctor-image">
                    <img src="assets/img/health/staff-11.webp" alt="Faisal Ahmed" class="img-fluid">
                    <div class="doctor-overlay">
                    <!-- <div class="doctor-social">
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                    </div> -->
                    </div>
                </div>
                <div class="doctor-content">
                    <h4 class="doctor-name">Dr. Faisal Ahmed</h4>
                    <span class="doctor-specialty">Medical Advisor — Pulmonology</span>
                    <p class="doctor-bio">A consulting pulmonologist providing medical oversight, treatment planning guidance, and professional support for complex respiratory cases when needed, ensuring quality care.</p>
                    <div class="doctor-experience">
                    <span class="experience-badge">3+ Years Experience</span>
                    </div>
                    <a href="{{route('contact')}}" class="btn-appointment">Book Appointment</a>
                </div>
                </div>
            </div><!-- End Doctor Card -->

            </div>

        </div>

        </section><!-- /Doctors Section -->

    </main>
@endsection