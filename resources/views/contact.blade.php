<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Metro Health Services | Contact Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Metro Health Services" name="keywords">
    <meta content="Hospital Services" name="description">
    <meta content="Surgery, Laboratory" name="services">
    @include('includes.in_favicon') 
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Librari{es Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
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
                    <a href="/about" class="nav-item nav-link ">About Us</a>
                  <div class="nav-item dropdown">
                        <a href="/services" class="nav-link dropdown-toggle" data-bs-toggle="dropdown active">Our Services</a>
                        <div class="dropdown-menu m-0">
                             @include('includes.in_service_list') 
                        </div>
                    </div>
                    <!-- <a href="blogpost.php" class="nav-item nav-link">Blog</a> -->
                    <a href="/contact" class="nav-item nav-link active">Contact Us</a>
                    <a href="/appointments" class="nav-item nav-link">Appointments</a>
                </div>
                <!-- <button type="button" class="btn text-white ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> -->
                <!-- <a href="appointment.php" class="btn metro-fill metro-text py-2 px-4 ms-3">Book Appointment</a> -->
            </div>
        </nav>

        <div class="container-fluid metro-fill py-5 bg-header page-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-hospital text-white px-2"></i>
                    <a href="/contact" class="h5 text-white">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
     @include('includes.in_search') 
    <!-- Full Screen Search End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold metro-main-text text-uppercase">Contact Us</h5>
                <h1 class="mb-0">For more information, do not hesitate to contact us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="metro-fill d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"> Call us on</h5>
                            <a href="#"><h6 class="metro-main-text mb-1">+233 (0)3220 89675</h6></a>
                            <!-- <h6 class="metro-main-text mb-0">+233 (0) 509760659</h6> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="metro-fill d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email</h5>
                            <h6 class="metro-main-text mb-1">metrohealthgh@gmail.com</h6>
                            <h6 class="metro-main-text mb-1">frontdesk@metrohealthgh.com</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="metro-fill d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-comment text-white "></i>
                        </div>
                        <div class="ps-4">
                        <h5 class="mb-2">Kindly WhatsApp us on</h5>
                            <a href="https://wa.me/+233599642520"><h6 class="metro-main-text mb-1">+233 (0)3220 89675</h6></a>
                            <!-- <a href="https://wa.me/+233509760659"><h6 class="text-primary mb-0">+233 (0) 509760659</h6></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="metro-fill d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our Facility</h5>
                            <h6 class="metro-main-text mb-1">4 Barekese Road, Abrepo Junction Near Angel Fm</h6>
                            <h6 class="metro-main-text mb-1">Kumasi, Ghana.</h6>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form action="https://getform.io/f/ayvkmjob" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" name="name" required style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" name="email" required style="height: 55px;">
                            </div>
                              <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Contact" name="contact" required style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" name="subject" required style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message" name="message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn metro-fill text-white w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://maps.google.com/maps?width=150%60&amp;height=600&amp;hl=en&amp;q=4%20Barekese%20Road,%20Abrepo%20Junction%20+(Metro%20Health%20Services)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- Vendor Start -->
       @include('includes.in_accredited') 
    <!-- Vendor End -->
    
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