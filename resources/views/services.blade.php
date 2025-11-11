<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Magazine Clinic, Kumasi | Hospital & Medical Services, Pine Avenue</title>
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
               <h1 class="m-0"><img src="{{ asset('img/logo_1.png') }}" alt="Magazine Clinic Logo"></i></h1>
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link">About Us</a>
                  <div class="nav-item dropdown">
                        <a href="{{ url('/services') }}" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown active">Our Services
                        </a>
                        <div class="dropdown-menu m-0">
                              @include('includes.in_service_list') 
                        </div>
                    </div>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact Us</a>
                    <!-- <a href="{{ url('/selfservice/portal') }}" class="nav-item nav-link">Portal <sup style="color:red">New</sup></a> -->
                </div>
                 <button type="button" class="btn text-white ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                <a href="{{ url('/appointments') }}" class="btn metro-fill metro-text py-2 px-4 ms-3">Book Appointment</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header page-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Services</h1>
                   <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-hospital text-white px-2"></i>
                    <a href="{{ url('/services') }}" class="h5 text-white">Our Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
    @include('includes.in_search') 
    <!-- Full Screen Search End -->
        <!-- service Start -->
    @include('includes.in_service_sum') 
    <!-- service Start -->
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