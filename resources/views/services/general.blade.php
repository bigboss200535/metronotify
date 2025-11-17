<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Magazine Clinic, Kumasi | Clinic & Medical Services, Pine Avenue</title>
    @include('includes.in_favicon') 
</head>
<body>
    <!-- Spinner Start -->
     @include('includes.in_spinner') 
    <!-- Spinner End -->
    <!-- Topbar Start -->
     @include('includes.in_topbar') 
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ url('/') }}" class="navbar-brand p-0">
               <h1 class="m-0"><img src="{{ asset('img/logo_1.png') }}" alt=""></i></h1>
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">

                    <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link">About Us</a>
                  <div class="nav-item dropdown">
                        <a href="{{ url('/services') }}" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown active">Our Services</a>
                        <div class="dropdown-menu m-0">
                              @include('includes.in_service_list') 
                        </div>
                    </div>
                    <!-- <a href="blogpost.php" class="nav-item nav-link text-dark">Blog</a> -->
                    <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact Us</a>
                     <!-- <a href="{{ url('/appointments') }}" class="nav-item nav-link">Appointments</a> -->
                </div>
                <button type="button" class="btn text-white ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                <a href="{{ url('/appointments') }}" class="btn metro-fill metro-text py-2 px-4 ms-3">Book Appointment</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header page-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">General and Family Medicine</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-hospital text-white px-2"></i>
                    <a href="{{ url('/services') }}" class="h5 text-white">Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
     @include('includes.in_search') 
    <!-- Full Screen Search End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ asset('img/service-1-2.jpg') }}" alt="General Medicine">
                        <h1 class="mb-4">General and Family Medicine</h1>
                        <p>Welcome to the heart of our healthcare services; the Department of General Medicine. We are dedicated to providing expert medical care for a wide range of adult and adolescent health conditions. Our team is your partner in health, offering diagnosis, management, and compassionate care for all your medical needs.  
                        </p>
                        <p>At the core of our department are highly experienced specialists in family medicine. They are more than just doctors;    they are skilled diagnosticians and compassionate caregivers who take the time to understand you and your health story. Whether you're managing a chronic condition like diabetes or hypertension, dealing with an acute illness, or simply seeking a routine check-up, our specialists are equipped to provide the best medical response to your condition.
                        </p>
                        <p>
                            We believe in a holistic approach, considering your lifestyle, family history, and personal health goals to create a management plan that is as unique as you are.
                        </p>
                        <p>
                           <strong> An accurate diagnosis is the foundation of effective treatment. We leave nothing to chance.</strong>
                           
                               <ol> <b>Thorough Consultation:</b> Your journey begins with an in-depth conversation. Our specialists will listen to your concerns, conduct a comprehensive physical examination, and discuss your symptoms in detail.
                               </ol>
                               <ol>
                                    <b>Precision Through Collaboration:</b> To ensure we pinpoint the exact cause of your ailment, our specialists work together with the general laboratory service. From blood tests and urinalysis to advanced diagnostic screenings, we use precise, data-driven results to confirm a diagnosis before any appropriate management is given.
                               </ol>
                               <ol>
                                    <b>Personalized Management Plan:</b> Once a diagnosis is confirmed, we work with you to develop a clear, effective treatment plan. This may include medication, lifestyle adjustments or physical therapy.
                               </ol>
                          </p>
                          <p>
                            <strong> Why Choose Our General Medicine Department?</strong>
                              <ol><b>Experienced Specialists: </b>Board-certified physicians with years of experience in family and internal medicine.</ol>
                              <ol><b>Accurate Diagnostics: </b>  Collaboration with our in-house lab ensures swift and reliable results.</ol>
                              <ol><b>Continuity of Care:</b> We build long-term relationships with our patients, managing your health throughout all stages of life.</ol>
                              <ol><b>Compassionate Environment:</b> We believe in treating the person, not just the illness.</ol>
                          </p>

                    </div>
                    <!-- Blog Detail End -->

                    <!-- Comment Form Start -->
                   <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Leave a concern</h3>
                        </div>
                         <form action="#" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Your Name" name="name" required style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="number" class="form-control bg-white border-0" placeholder="Telephone" name="contact" required style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Email" name="email" required style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment" name="comment" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn metro-fill text-white w-100 py-3" type="submit">Leave your concern</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                   <!--  <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn metro-fill text-white px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div> -->
                    <!-- Search Form End -->
    
                   <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0 light-color">Other Services</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <!-- <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="{{ url('/services/geriatric') }}"><i class="bi bi-arrow-right me-2"></i>Geriatric / Elderly Care</a> -->
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="{{ url('/services/obstetrics') }}"><i class="bi bi-arrow-right me-2"></i>Obstetrics/Gynaecology</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="{{ url('/services/dental') }}"><i class="bi bi-arrow-right me-2"></i>Dental Care</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="{{ url('/services/eye') }}"><i class="bi bi-arrow-right me-2"></i>Eye Care</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="{{ url('/services/surgery') }}"><i class="bi bi-arrow-right me-2"></i>General Surgery</a>
							<a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="{{ url('/services/pharmacy') }}"><i class="bi bi-arrow-right me-2"></i>Pharmacy Services</a>
							<a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="{{ url('services/laboratory') }}"><i class="bi bi-arrow-right me-2"></i>Laboratory Services</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="{{ url('services/ultrasound') }}"><i class="bi bi-arrow-right me-2"></i>Advanced Ultrasound Services</a>
                        </div>
                    </div>
					
                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{ asset('img/service-0-2.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->
					<!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{ asset('img/service-0-3.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->
					<!--Blank Space-->
					<p></p>
					<p></p>
					<!--Blank Space-->
                   <!-- Plain Text Start -->
                    <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Appointment Schedule</h3>
                        </div>
                        <div class="bg-light text-center" style="padding: 30px;">
                            <!-- <p></p> -->
                            <a href="{{ url('/appointments') }}" class="btn metro-fill text-white py-2 px-4">24-hour Service</a>
                        </div>
                    </div>
                    <!-- Plain Text End -->
					
					
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
    @include('includes.in_faq') 
    <!-- Testimonial End -->
    <!-- Footer Start -->
     @include('includes.in_footer') 
    <!-- Footer End -->
    <!-- Back to Top -->
     @include('includes.to_top') 
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>