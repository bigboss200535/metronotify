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
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link">About Us</a>
                    <!--<a href="service.php" class="nav-item nav-link">Services</a>-->
                    <div class="nav-item dropdown">
                        <a href="/services" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown active">Our Services</a>
                        <div class="dropdown-menu m-0">
                            @include('includes.in_service_list') 
                        </div>
                    </div>
					<!-- <a href="blogpost.php" class="nav-item nav-link">Blog</a> -->
                    <a href="/contact" class="nav-item nav-link">Contact Us</a>
                     <!-- <a href="/appointments" class="nav-item nav-link">Appointments</a> -->
                </div>
                <button type="button" class="btn text-white ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                <a href="{{ url('/appointments') }}" class="btn metro-fill metro-text py-2 px-4 ms-3">Book Appointment</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">General Pharmacy</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-hospital text-white px-2"></i>
                    <a href="/services" class="h5 text-white">Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


   <!-- Full Screen Search Start -->
     @include('includes.in_search') 
    <!-- Full Screen Search End -->


    <!-- pharmacy Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ asset('img/service-6-1.jpg') }}" alt="">
                        <h1 class="mb-4">General Pharmacy</h1>
                        <p>
                            We are more than just a place to pick up prescriptions; we are an integral part of your healthcare team. Our dedicated team of clinical pharmacists and certified technicians works directly with your doctors to ensure your medications are safe, effective, and tailored to your unique needs.
                        </p>
                        <p>
                            From your hospital bedside to your follow-up care, we are here to guide you every step of the way on your journey to wellness.
                        </p>
                        <p>
                            <b>Our Pharmacy Services</b>
                        </p>
                        <p>We provide a full spectrum of pharmacy care, supporting both our inpatients and the broader community.</p>
                        <p>
                            <ul>
                                <li><b>For Inpatients:</b> Integrated Medication Management</li>
                                <li><b>For Outpatients</b> Accessible and Expert Care</li>
                            </ul>
                        </p>
                        <p><b>Our Pharmacy Advantage: Why We are Different</b></p>
                        <p>
                           <ul>
                               <li><b>Seamless Care Coordination:</b>We coordinate with your doctors to prevent errors and ensure your inpatient and outpatient prescriptions are perfectly aligned.</li>
                               <li><b>Expertise in Complex Care:</b> Our pharmacists specialize in managing medications for complex hospital-treated conditions, giving you confidence after you go home.</li>
                               <li><b>Your Medication Experts: </b>Pharmacists are the most accessible healthcare professionals. We are here to answer your questions clearly and without judgment, helping you get the most from your medicines.</li>
                               <li><b>Affordability & Access:</b> We accept most major insurance plans and offer guidance on cost-saving alternatives, including generic medications. </li>
                           </ul>
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
                    <!-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn metro-fill text-white px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div> -->
                    <!-- Search Form End -->
    
                
    
                   <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Other Services</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                             <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/general-medicine"><i class="bi bi-arrow-right me-2"></i>General and Family Medicine</a>
                            <!-- <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/obstetrics"><i class="bi bi-arrow-right me-2"></i>Geriatrics /Elderly Care</a> -->
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/obstetrics"><i class="bi bi-arrow-right me-2"></i>Obstetrics & Gynaecology Care</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/dental"><i class="bi bi-arrow-right me-2"></i>Dental Care</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/surgery"><i class="bi bi-arrow-right me-2"></i>General Surgery</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/eye"><i class="bi bi-arrow-right me-2"></i>Eye Care</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/laboratory"><i class="bi bi-arrow-right me-2"></i>Laboratory Services</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/ultrasound"><i class="bi bi-arrow-right me-2"></i>Advanced Ultrasound Services</a>
                        </div>
                    </div>
    
                    <!-- Recent Post End -->
					
					<!-- Image Start -->
					<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{ asset('img/service-6.jpg') }}" alt="" class="img-fluid rounded">
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
                            <!-- <p><strong>Consultation and Assessment</strong></p> -->
                            <a href="{{ url('/appointments') }}" class="btn metro-fill text-white py-2 px-4">Book Appointment</a>
							<!-- <a href="" class="btn metro-fill text-white py-2 px-4">8am-8pm</a> -->
                        </div>
                    </div>
                    <!-- Plain Text End -->
					
					<!--Blank Space-->
					<p></p>
					<p></p>
					<!--Blank Space-->
    
    
         

                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <!-- Testimonial start -->
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
    <script src="{{ asset('lib/wow/wow.min.js') }} "></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>