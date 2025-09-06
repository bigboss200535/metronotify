<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Metro Health Services | Appointments</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
     @include('includes.in_favicon') 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
            <a href="/" class="navbar-brand p-0">
               <h1 class="m-0"><img src="{{ asset('images/logo_1.png') }}" alt=""></i></h1>
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link ">Home</a>
                    <a href="/abput" class="nav-item nav-link">About Us</a>
                  <div class="nav-item dropdown">
                        <a href="/services" class="nav-link dropdown-toggle" data-bs-toggle="dropdown active">Our Services</a>
                        <div class="dropdown-menu m-0">
                             @include('includes.in_service_list') 
                        </div>
                    </div>
                    <!-- <a href="blogpost.php" class="nav-item nav-link">Blog</a> -->
                    <a href="/contact" class="nav-item nav-link">Contact Us</a>
                     <a href="/appointments" class="nav-item nav-link active">Appointment</a>
                </div>
                <!-- <button type="button" class="btn text-white ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> -->
                <!-- <a href="appointment.php" class="btn metro-fill metro-text py-2 px-4 ms-3">Book Appointment</a> -->
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Appointments</h1>
                    <a href="" class="h5 text-white">Home</a>
                     <i class="far fa-hospital text-white px-2"></i>
                    <a href="/appointments" class="h5 text-white">Appointments</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
   
    <!-- Full Screen Search End -->

    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold metro-main-text text-uppercase">Book Appointment</h5>
                        <h1 class="mb-0">Do you want to visit us? Book an appointment with us.</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply metro-main-text me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt metro-main-text me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">We have fully-manned and equipped units that run 24 hours a day, 7 days a week. Our services are full-option (as we attend to both Health Maintenance Organisation and private patients). Contact our front desk to help facilitate your prompt and personalised consultation.
                    </p> 
                    <p class="mb-4"> It is with much pleasure to open our doors in readiness to offer you quality, efficient, effective, reliable, timely, safe and patient centred healthcare service.
                    </p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="metro-fill d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="metro-main-text">+233 (0)3220 89675</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="metro-fill rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form method="post" id="appointment_submission">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected disabled>Select A Service</option>
                                        <option value="General Medicine">General/Family Medicine</option>
                                        <option value="Obstetrics">Obstetrics/Gynaecology</option>
                                        <option value="Geriatric">Geriatric/Elder Care</option>
                                        <option value="Eye">Eye Service</option>
                                        <option value="ENT">ENT Service</option>
                                        <option value="Surgery">Surgery</option>
                                        <option value="General Laboratory">General Laboratory</option>
                                        <option value="Pharmacy">Pharmacy</option>
                                        <option value="Ultrasound Scan Services">Advanced Ultrasound Services</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn metro-fill-gold w-100 py-3 text-white" type="submit">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    @include('includes.in_accredited') 
    <!-- Vendor End -->
    <!-- Footer Start -->
     @include('includes.in_footer') 
    <!-- Footer End -->
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