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
                    <img src="assets/img/health/staff-3.webp" alt="Dr. Ahmed" class="img-fluid">
                    <div class="doctor-overlay">
                    <!-- <div class="doctor-social">
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                    </div> -->
                    </div>
                </div>
                <div class="doctor-content">
                    <h4 class="doctor-name">Dr. Ahmed Farooq, MBBS, FCPS</h4>
                    <span class="doctor-specialty">Cardiologist</span>
                    <p class="doctor-bio">With deep expertise in advanced cardiac care, Dr. Ahmed has been treating patients with compassion and precision.</p>
                    <div class="doctor-experience">
                    <span class="experience-badge">10+ Years Experience</span>
                    </div>
                    <a href="{{route('contact')}}" class="btn-appointment">Book Appointment</a>
                </div>
                </div>
            </div><!-- End Doctor Card -->

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="doctor-card">
                <div class="doctor-image">
                    <img src="assets/img/health/dr_abid2.png" alt="Dr. Abid" class="img-fluid">
                    <div class="doctor-overlay">
                    <!-- <div class="doctor-social">
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                    </div> -->
                    </div>
                </div>
                <div class="doctor-content">
                    <h4 class="doctor-name">Dr. Abid Khan, MBBS, MS Ortho</h4>
                    <span class="doctor-specialty">Orthopedic Surgeon</span>
                    <p class="doctor-bio">Specializes in joint replacement and sports injuries, delivering orthopedic care for lasting mobility and comfort.</p>
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
                    <img src="assets/img/health/staff-11.webp" alt="Dr. Sarah Williams" class="img-fluid">
                    <div class="doctor-overlay">
                    <!-- <div class="doctor-social">
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                    </div> -->
                    </div>
                </div>
                <div class="doctor-content">
                    <h4 class="doctor-name">Dr. Ayesha Siddiqui, MBBS, FCPS</h4>
                    <span class="doctor-specialty">Pediatric Specialist</span>
                    <p class="doctor-bio">Dedicated to children's health and wellness, She provides comprehensive pediatric care with a friendly approach.</p>
                    <div class="doctor-experience">
                    <span class="experience-badge">8+ Years Experience</span>
                    </div>
                    <a href="{{route('contact')}}" class="btn-appointment">Book Appointment</a>
                </div>
                </div>
            </div><!-- End Doctor Card -->

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="doctor-card">
                <div class="doctor-image">
                    <img src="assets/img/health/staff-14.webp" alt="Dr. Robert Anderson" class="img-fluid">
                    <div class="doctor-overlay">
                    <!-- <div class="doctor-social">
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                    </div> -->
                    </div>
                </div>
                <div class="doctor-content">
                    <h4 class="doctor-name">Dr. Salman Rashid, MBBS, MD (Neurology)</h4>
                    <span class="doctor-specialty">Neurologist</span>
                    <p class="doctor-bio">Brings years of expertise in treating neurological disorders, ensuring personalized treatment plans.</p>
                    <div class="doctor-experience">
                    <span class="experience-badge">10+ Years Experience</span>
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