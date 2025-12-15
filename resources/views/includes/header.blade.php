
@php
 function setActive($route){
    if($route === request()->segment(1)){
        return 'active';
    }
 }
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Coronation Ghana</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- Template Stylesheet -->


    @vite('resources/front/lib/animate/animate.min.css')
    @vite('resources/front/lib/owlcarousel/assets/owl.carousel.min.css')
    @vite('resources/front/css/bootstrap.min.css')
    @vite('resources/front/css/style.css')
</head>

<body>

     <!-- Spinner Start -->
     <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"> <img class="mb-3" src="<?=asset('img/coronationx.png')?>" alt=""> <span>Hub</span></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?=url('/welcome')?>" class="nav-item nav-link <?=setActive('welcome')?> ">Home</a>
                <a href="<?=url('/ceo')?>" class="nav-item nav-link <?=setActive('ceo')?>">CEO</a>
                <a href="courses.html" class="nav-item nav-link">Staff</a>
                <a href="courses.html" class="nav-item nav-link">News</a>
                <a href="courses.html" class="nav-item nav-link">Insurance</a>
                <a href="courses.html" class="nav-item nav-link">Documents</a>
                <a href="<?=url('/help')?>" class="nav-item nav-link <?=setActive('help')?>">Help Desk</a>
                <a href="contact.html" class="nav-item nav-link">Gallery</a>
                <a href="<?=url('/apps')?>" class="nav-item nav-link <?=setActive('apps')?>">Apps</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
            </div>
            <a href="<?=url('/admin')?>" class="btn btn-primary py-3 px-lg-5 d-none d-lg-block">
                <div class="d-flex align-items-center justify-content-center align-items-center">
                    <div>Login<br>(Emmanuel) </div>
                    <div><i class="fa fa-arrow-right ms-3"></i></div>
                </div>
            </a>
        </div>
    </nav>
    <!-- Navbar End -->
