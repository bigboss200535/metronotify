<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Magazine Clinic, Kumasi | Clinic & Medical Services, Pine Avenue</title>
     @include('includes.in_favicon') 
    <!-- Google Web Fonts -->
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
                    
                    <a href="/contact" class="nav-item nav-link">Contact Us</a>
                    <!-- <a href="/appointments" class="nav-item nav-link">Appointment</a>   -->
                </div>
                 <button type="button" class="btn text-white ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                <a href="{{ url('/appointments') }}" class="btn metro-fill metro-text py-2 px-4 ms-3">Book Appointment</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Laboratory Services</h1>
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


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ asset('img/service-9-1.jpg') }}" alt="">
                        <h1 class="mb-4">Our Laboratory Services</h1>
                        <p>
                            Our Laboratory is advanced diagnostic heart of our healthcare system. Here, our team of skilled pathologists, scientists, and technologists works behind the scenes with one clear goal: to provide accurate, timely, and clear results that empower you and your doctor to make informed decisions about your health.
                        </p>
                        <p>
                            Every test we perform is a crucial piece of your health puzzle. We understand that behind every sample is a person, and we are committed to handling your care with the utmost precision, confidentiality, and respect.
                        </p>
                        <p>
                            <b>Our Laboratory Advantage</b>
                        </p>
                        <p>
                           <b> Expert Leadership: </b>Our laboratory is directed by board-certified Pathologists—medical doctors who are specialists in diagnosing disease. They oversee all complex testing and consult directly with your physician.
                        </p>
                        <p>
                            <b>Accuracy & Speed:</b>We utilize the most advanced, automated testing equipment available. This means faster, more reliable results for you, often available to your doctor within hours, not days.
                        </p>
                        <p>
                            <b>Seamless Integration with Your Care:</b> Your test results are seamlessly integrated into your secure electronic health record (EHR). This allows our care team to view your results quickly and coordinate your treatment plan efficiently.
                        </p>
                        <p>
                           <b> Commitment to Quality:</b> We maintain the highest levels of accreditation, following rigorous quality control and assurance protocols every day. Your diagnosis is our priority.
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
						    <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/general-medicine"><i class="bi bi-arrow-right me-2"></i>General Medicine</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/obstetrics"><i class="bi bi-arrow-right me-2"></i>Obstetrics/Gynaecology</a>
							<a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/dental"><i class="bi bi-arrow-right me-2"></i>Dental Care</a>
                            <!-- <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="serv3.php"><i class="bi bi-arrow-right me-2"></i>Pediatrics</a> -->
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="{{ url('/services/eye') }}"><i class="bi bi-arrow-right me-2"></i>Eye Care</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/surgery"><i class="bi bi-arrow-right me-2"></i>General Surgery</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/pharmacy"><i class="bi bi-arrow-right me-2"></i>Pharmacy</a>
							<a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2 gold-text" href="/services/ultrasound"><i class="bi bi-arrow-right me-2"></i>Ultrasound Scan Services</a>
							
                        </div>
                    </div>
					
					<!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{ asset('img/service-9-2.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->
					
					
                   <!-- Plain Text Start -->
                    <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Appointment Schedule</h3>
                        </div>
                        <div class="bg-light text-center" style="padding: 30px;">
                            <p></p>
                            <a href="{{ url('/appointments') }}" class="btn metro-fill text-white py-2 px-4">Book Appointment</a>
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