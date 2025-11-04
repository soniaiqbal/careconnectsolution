@extends('layouts.app')

@section('title', 'Home | Care Connect Solutions')

@section('content')
<main class="main">

    <section id="hero" class="hero section dark-background">
      <div class="container-fluid p-0">
        <div class="hero-wrapper">
          <div class="hero-image">
            <img src="assets/img/health/showcase-1.webp" alt="Advanced Healthcare" class="img-fluid">
          </div>

          <div class="hero-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 col-md-10" data-aos="fade-right" data-aos-delay="100">
                  <div class="content-box">
                    <span class="badge-accent" data-aos="fade-up" data-aos-delay="150">Leading Healthcare Specialists</span>
                    <h1 data-aos="fade-up" data-aos-delay="200">Advanced Medical Care for Your Family's Health</h1>
                    <p data-aos="fade-up" data-aos-delay="250">Caring for your family with trusted therapists and modern health solutions.</p>

                    <div class="cta-group" data-aos="fade-up" data-aos-delay="300">
                      <a href="{{ route('contact') }}" class="btn btn-primary">Book Appointment</a>
                      <a href="{{ route('services') }}" class="btn btn-outline">Explore Services</a>
                    </div>

                    <div class="info-badges" data-aos="fade-up" data-aos-delay="350">
                      <div class="badge-item">
                        <i class="bi bi-telephone-fill"></i>
                        <div class="badge-content">
                          <span>Emergency Line</span>
                          <strong>+92 304 0513423</strong>
                        </div>
                      </div>
                      <div class="badge-item">
                        <i class="bi bi-clock-fill"></i>
                        <div class="badge-content">
                          <span>Working Hours</span>
                          <strong>Mon-Fri: 8AM-8PM</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="features-wrapper">
                <div class="row gy-4">

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="450">
                      <div class="feature-icon">
                        <i class="bi bi-heart-pulse-fill"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Respiratory Therapy</h3>
                        <p>Comprehensive care to assess, manage, and treat breathing and lung conditions.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                      <div class="feature-icon">
                        <i class="bi bi-lungs-fill"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Ventilator & Oxygen Support</h3>
                        <p>Specialized management of oxygen therapy and mechanical ventilation for stable breathing.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="550">
                      <div class="feature-icon">
                        <i class="bi bi-capsule"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Pulmonary Rehabilitation</h3>
                        <p>Personalized breathing exercises and recovery programs for long-term lung health.</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="home-about" class="home-about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="assets/img/health/facilities-1.webp" alt="Modern Healthcare Facility" class="img-fluid rounded-3 mb-4">
              <div class="experience-badge">
                <span class="years">5+</span>
                <span class="text">Years of Excellence</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2>Committed to Exceptional Patient Care</h2>
              <ps>At CareConnect Solutions, we’re dedicated to providing reliable, personalized, and compassionate healthcare that puts your well-being first. Our expert team ensures every patient receives the attention and support they deserve — anytime, anywhere.</p>

              <p>We combine advanced medical knowledge with innovative care solutions to help you stay informed, connected, and confident in your health journey.</p>

              <div class="row g-4 mt-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                  <div class="feature-item">
                    <div class="icon">
                      <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h4>Compassionate Care</h4>
                    <p>We treat every patient with empathy and respect, ensuring comfort and trust in every interaction.</p>
                  </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                  <div class="feature-item">
                    <div class="icon">
                      <i class="bi bi-star"></i>
                    </div>
                    <h4>Medical Excellence</h4>
                    <p>Our experienced professionals deliver top-quality care, guided by the highest medical standards and innovation.</p>
                  </div>
                </div>
              </div>

              <div class="cta-wrapper mt-4">
                <a href="{{route('about')}}" class="btn btn-primary">Learn More About Us</a>
                <a href="{{route('team')}}" class="btn btn-outline">Meet Our Team</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- <section id="featured-departments" class="featured-departments section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Departments</h2>
        <p>Explore our key specialties designed to provide expert care, trusted guidance, and complete support for you and your family’s health.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="department-card">
              <div class="department-image">
                <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Department" class="img-fluid">
              </div>
              <div class="department-content">
                <div class="department-icon">
                  <i class="fas fa-heartbeat"></i>
                </div>
                <h3>Cardiology</h3>
                <p>Comprehensive heart care with advanced diagnostics and treatment options to support long-term cardiovascular health and prevention.</p>
                <a href="{{route('departments')}}" class="btn-learn-more">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="department-card">
              <div class="department-image">
                <img src="assets/img/health/neurology-2.webp" alt="Neurology Department" class="img-fluid">
              </div>
              <div class="department-content">
                <div class="department-icon">
                  <i class="fas fa-brain"></i>
                </div>
                <h3>Neurology</h3>
                <p>Specialized care for brain and nervous system disorders, offering accurate diagnosis, innovative treatments, and compassionate guidance for every patient.</p>
                <a href="{{route('departments')}}" class="btn-learn-more">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="department-card">
              <div class="department-image">
                <img src="assets/img/health/orthopedics-4.webp" alt="Orthopedics Department" class="img-fluid">
              </div>
              <div class="department-content">
                <div class="department-icon">
                  <i class="fas fa-bone"></i>
                </div>
                <h3>Orthopedics</h3>
                <p>Focused on restoring movement and strength through expert care for bones, joints, and muscles using both surgical and non-surgical approaches.</p>
                <a href="{{route('departments')}}" class="btn-learn-more">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section> -->

    <section id="featured-services" class="featured-services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Services</h2>
        <p class="text-white">Professional respiratory care services designed to support better breathing, faster recovery, and improved quality of life.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-heartbeat"></i>
              </div>
              <div class="service-content">
                <h3>Cardiology Excellence</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <ul class="service-features">
                  <li><i class="fas fa-check-circle"></i>Advanced Heart Surgery</li>
                  <li><i class="fas fa-check-circle"></i>24/7 Emergency Care</li>
                  <li><i class="fas fa-check-circle"></i>Preventive Screenings</li>
                </ul>
                <a href="services.html" class="service-btn">
                  Learn More
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-brain"></i>
              </div>
              <div class="service-content">
                <h3>Neurology &amp; Brain Health</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                <ul class="service-features">
                  <li><i class="fas fa-check-circle"></i>Brain Imaging &amp; Diagnostics</li>
                  <li><i class="fas fa-check-circle"></i>Stroke Treatment Center</li>
                  <li><i class="fas fa-check-circle"></i>Neurological Rehabilitation</li>
                </ul>
                <a href="services.html" class="service-btn">
                  Learn More
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div> -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-lungs"></i>
              </div>
              <div class="service-content">
                <h3>Respiratory Therapy & Assessment</h3>
                <p>Comprehensive evaluation and treatment for respiratory conditions to ensure efficient breathing and improved lung function.</p>
                <ul class="service-features">
                  <li><i class="fas fa-check-circle"></i>Respiratory assessment & monitoring</li>
                  <li><i class="fas fa-check-circle"></i>Breathing difficulty management</li>
                  <li><i class="fas fa-check-circle"></i>Lung health evaluation</li>
                </ul>
                <a href="{{ route('services') }}" class="service-btn">
                  Learn More
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-heartbeat"></i>
              </div>
              <div class="service-content">
                <h3>Oxygen & Ventilator Support</h3>
                <p>Expert setup and management of oxygen therapy and mechanical ventilation for patients with breathing difficulties.</p>
                <ul class="service-features">
                  <li><i class="fas fa-check-circle"></i>Oxygen therapy setup & monitoring</li>
                  <li><i class="fas fa-check-circle"></i>Ventilator management</li>
                  <li><i class="fas fa-check-circle"></i>Respiratory emergency support</li>
                </ul>
                <a href="{{ route('services') }}" class="service-btn">
                  Learn More
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Card -->

        </div>

      </div>

    </section>

    <!-- <section id="find-a-doctor" class="find-a-doctor section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Find A Doctor</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12">
            <div class="search-container">
              <form class="search-form" action="forms/doctor-search.php" method="get">
                <div class="row g-3">
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="doctor_name" placeholder="Doctor name or keyword">
                  </div>
                  <div class="col-md-4">
                    <select class="form-select" name="specialty" id="specialty-select">
                      <option value="">Select Specialty</option>
                      <option value="cardiology">Cardiology</option>
                      <option value="neurology">Neurology</option>
                      <option value="orthopedics">Orthopedics</option>
                      <option value="pediatrics">Pediatrics</option>
                      <option value="dermatology">Dermatology</option>
                      <option value="oncology">Oncology</option>
                      <option value="surgery">Surgery</option>
                      <option value="emergency">Emergency Medicine</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-primary w-100">
                      <i class="bi bi-search me-2"></i>Search Doctor
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-3.webp" alt="Dr. Sarah Mitchell" class="img-fluid">
                <div class="availability-badge online">Available</div>
              </div>
              <div class="doctor-info">
                <h5>Dr. Sarah Mitchell</h5>
                <p class="specialty">Cardiology</p>
                <p class="experience">15+ years experience</p>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <span class="rating-text">(4.9)</span>
                </div>
                <div class="appointment-actions">
                  <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                  <a href="#" class="btn btn-primary btn-sm">Book Appointment</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-7.webp" alt="Dr. Michael Rodriguez" class="img-fluid">
                <div class="availability-badge busy">In Surgery</div>
              </div>
              <div class="doctor-info">
                <h5>Dr. Michael Rodriguez</h5>
                <p class="specialty">Neurology</p>
                <p class="experience">12+ years experience</p>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <span class="rating-text">(4.7)</span>
                </div>
                <div class="appointment-actions">
                  <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                  <a href="#" class="btn btn-primary btn-sm">Book Appointment</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-1.webp" alt="Dr. Emily Chen" class="img-fluid">
                <div class="availability-badge online">Available</div>
              </div>
              <div class="doctor-info">
                <h5>Dr. Emily Chen</h5>
                <p class="specialty">Pediatrics</p>
                <p class="experience">8+ years experience</p>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <span class="rating-text">(5.0)</span>
                </div>
                <div class="appointment-actions">
                  <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                  <a href="#" class="btn btn-primary btn-sm">Book Appointment</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-9.webp" alt="Dr. James Thompson" class="img-fluid">
                <div class="availability-badge offline">Next: Tomorrow 9AM</div>
              </div>
              <div class="doctor-info">
                <h5>Dr. James Thompson</h5>
                <p class="specialty">Orthopedics</p>
                <p class="experience">20+ years experience</p>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <span class="rating-text">(4.8)</span>
                </div>
                <div class="appointment-actions">
                  <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                  <a href="#" class="btn btn-primary btn-sm">Book Appointment</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-5.webp" alt="Dr. Lisa Anderson" class="img-fluid">
                <div class="availability-badge online">Available</div>
              </div>
              <div class="doctor-info">
                <h5>Dr. Lisa Anderson</h5>
                <p class="specialty">Dermatology</p>
                <p class="experience">10+ years experience</p>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                  <span class="rating-text">(4.6)</span>
                </div>
                <div class="appointment-actions">
                  <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                  <a href="#" class="btn btn-primary btn-sm">Book Appointment</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-12.webp" alt="Dr. Robert Kim" class="img-fluid">
                <div class="availability-badge online">Available</div>
              </div>
              <div class="doctor-info">
                <h5>Dr. Robert Kim</h5>
                <p class="specialty">Oncology</p>
                <p class="experience">18+ years experience</p>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <span class="rating-text">(4.9)</span>
                </div>
                <div class="appointment-actions">
                  <a href="#" class="btn btn-outline-primary btn-sm">View Profile</a>
                  <a href="#" class="btn btn-primary btn-sm">Book Appointment</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section> -->

    <section id="call-to-action" class="call-to-action section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 data-aos="fade-up" data-aos-delay="200">Your Health is Our Priority</h2>
            <p data-aos="fade-up" data-aos-delay="250">We’re dedicated to delivering exceptional care and personalized support at every step of your health journey. Our team ensures you receive the attention, compassion, and expertise you deserve — because your well-being always comes first.</p>

            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
              <a href="{{route('contact')}}" class="btn-primary">Book Appointment</a>
              <!-- <a href="doctors.html" class="btn-secondary">Find a Doctor</a> -->
            </div>
          </div>
        </div>

        <div class="row features-row" data-aos="fade-up" data-aos-delay="400">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-card">
              <div class="icon-wrapper">
                <i class="bi bi-heart-pulse"></i>
              </div>
              <h5>24/7 Emergency Care</h5>
              <p>Get immediate medical attention anytime. Our emergency team is always ready to provide quick and reliable care when you need it most.</p>
              <a href="{{ route('home') }}" class="feature-link">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-card">
              <div class="icon-wrapper">
                <i class="bi bi-calendar-check"></i>
              </div>
              <h5>Easy Online Booking</h5>
              <p>Schedule appointments effortlessly from the comfort of your home — fast, simple, and convenient.</p>
              <a href="{{ route('contact') }}" class="feature-link">
                <span>Book Now</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-card">
              <div class="icon-wrapper">
                <i class="bi bi-people"></i>
              </div>
              <h5>Expert Medical Team</h5>
              <p>Our experienced doctors and specialists are dedicated to delivering the highest quality care with compassion and precision.</p>
              <a href="{{ route('team') }}" class="feature-link">
                <span>Meet Our Team</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>

        <div class="emergency-alert" data-aos="zoom-in" data-aos-delay="500">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <div class="emergency-content">
                <div class="emergency-icon">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="emergency-text">
                  <h4>Medical Emergency?</h4>
                  <p>Call our 24/7 emergency hotline for immediate assistance</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 text-end">
              <a href="tel:923040513423" class="emergency-btn">
                <i class="bi bi-telephone-fill"></i>
                Call: +92 304 0513423
              </a>
            </div>
          </div>
        </div>

      </div>

    </section>

    <section id="emergency-info" class="emergency-info section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Emergency Info</h2>
        <p>Immediate care when it matters most — available 24/7 for all emergencies.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

            <!-- Emergency Alert Banner -->
            <div class="emergency-alert" data-aos="zoom-in" data-aos-delay="100">
              <div class="alert-icon">
                <i class="bi bi-exclamation-triangle-fill"></i>
              </div>
              <div class="alert-content">
                <h3>Medical Emergency?</h3>
                <p>If you are experiencing a life-threatening emergency, call 1122 immediately or go to your nearest emergency room.</p>
              </div>
              <div class="alert-action">
                <a href="tel:1122" class="btn btn-emergency">
                  <i class="bi bi-telephone-fill"></i>
                  Call 1122
                </a>
              </div>
            </div><!-- End Emergency Alert -->

            <!-- Emergency Contact Grid -->
            <div class="row emergency-contacts" data-aos="fade-up" data-aos-delay="200">

              <div class="col-md-6 mb-4">
                <div class="contact-card urgent">
                  <div class="card-icon">
                    <i class="bi bi-hospital"></i>
                  </div>
                  <div class="card-content">
                    <h4>Nurse Helpline</h4>
                    <p class="contact-info">
                      <i class="bi bi-telephone"></i>
                      <span>+92 311 5221899</span>
                    </p>
                    <p class="description">24/7 medical advice and guidance</p>
                    <p class="hours">Available 24/7</p>
                  </div>
                  <div class="card-action">
                    <a href="tel:+15554567890" class="btn btn-contact">Call Now</a>
                  </div>
                </div>
              </div><!-- End Emergency Room Card -->

              <div class="col-md-6 mb-4">
                <div class="contact-card">
                  <div class="card-icon">
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="card-content">
                    <h4>Urgent Care</h4>
                    <p class="contact-info">
                      <i class="bi bi-telephone"></i>
                      <span>+92 304 0513423</span>
                    </p>
                    <p class="address">
                      <i class="bi bi-geo-alt"></i>
                      19, The ArK, I8 Markaz, Islamabad
                    </p>
                    <p class="hours">Mon-Sun: 7:00 AM - 10:00 PM</p>
                  </div>
                  <div class="card-action">
                    <a href="tel:+923040513423" class="btn btn-contact">Call Now</a>
                  </div>
                </div>
              </div><!-- End Urgent Care Card -->
<!-- 
              <div class="col-md-6 mb-4">
                <div class="contact-card">
                  <div class="card-icon">
                    <i class="bi bi-headset"></i>
                  </div>
                  <div class="card-content">
                    <h4>Nurse Helpline</h4>
                    <p class="contact-info">
                      <i class="bi bi-telephone"></i>
                      <span>+1 (555) 456-7890</span>
                    </p>
                    <p class="description">24/7 medical advice and guidance</p>
                    <p class="hours">Available 24/7</p>
                  </div>
                  <div class="card-action">
                    <a href="tel:+15554567890" class="btn btn-contact">Call Now</a>
                  </div>
                </div>
              </div> -->
              <!-- End Nurse Helpline Card -->


            </div><!-- End Emergency Contacts -->

            <!-- Quick Actions -->
            <div class="quick-actions" data-aos="fade-up" data-aos-delay="300">
              <h4>Quick Actions</h4>
              <div class="row">
                <div class="col-sm-6 col-lg-4">
                  <a href="https://www.google.com/maps?q=I-8+Markaz+Islamabad" target="_blank" rel="noopener noreferrer" class="action-link">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Get Directions</span>
                  </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <a href="{{route('contact')}}" class="action-link">
                    <i class="bi bi-calendar-check"></i>
                    <span>Book Appointment</span>
                  </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <a href="{{route('team')}}" class="action-link">
                    <i class="bi bi-person-badge"></i>
                    <span>Find a Therapist</span>
                  </a>
                </div>
              </div>
            </div><!-- End Quick Actions -->

            <!-- Emergency Preparation Tips -->
            <div class="emergency-tips" data-aos="fade-up" data-aos-delay="400">
              <h4>When to Seek Emergency Care</h4>
              <div class="row">
                <div class="col-md-6">
                  <ul class="emergency-list">
                    <li><i class="bi bi-check-circle"></i> Chest pain or difficulty breathing</li>
                    <li><i class="bi bi-check-circle"></i> Severe allergic reactions</li>
                    <li><i class="bi bi-check-circle"></i> Major trauma or injuries</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="emergency-list">
                    <li><i class="bi bi-check-circle"></i> Severe burns or bleeding</li>
                    <li><i class="bi bi-check-circle"></i> Loss of consciousness</li>
                    <li><i class="bi bi-check-circle"></i> Severe abdominal pain</li>
                  </ul>
                </div>
              </div>
            </div><!-- End Emergency Tips -->

          </div>
        </div>

      </div>

    </section>

</main>

@endsection