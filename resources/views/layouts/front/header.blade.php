<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Apex - Home Repair Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{asset('front')}}/asset/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="{{asset('front')}}/asset/font/css2.css" rel="stylesheet"/>

    <!-- Icon Font Stylesheet -->
    <link href="{{asset('front')}}/asset/css/all.min.css" rel="stylesheet" />
    <link href="{{asset('front')}}/asset/css/bootstrap-icons.css" rel="stylesheet"/>

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front')}}/asset/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="{{asset('front')}}/asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('front')}}/asset/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('front')}}/asset/css/fontawesome.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{asset('front')}}/asset/css/style.css" rel="stylesheet" />

    
  </head>

  <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
@foreach ($infos as $info)
  
<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
  <div class="row gx-0 d-none d-lg-flex">
    <div class="col-lg-7 px-5 text-start">
      <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
        <small class="fa fa-phone-alt me-2"></small>
        <small>{{ $info->phone }}</small>
      </div>
      <div class="h-100 d-inline-flex align-items-center border-end px-3">
        <small class="far fa-envelope-open me-2"></small>
        <small>{{ $info->email }}</small>
      </div>
      <div class="h-100 d-inline-flex align-items-center border-end px-3">
        <small class="far fa-clock me-2"></small>
        <small>{{ $info->created_at }}</small>
      </div>
      @endforeach
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-square border-end border-start" href=""><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-square border-end" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square border-end" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
      <a href="{{ route('front.home') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
          <i class="fa fa-building text-primary me-3"></i>APEX
        </h1>
      </a>
      <button
        type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
          <a href="{{ route('front.home') }}" class="{{request()->is('/')? 'active' : ''}} nav-item nav-link">Home</a>
          <a href="{{ route('front.about') }}" class="{{request()->is('about')? 'active' : ''}} nav-item nav-link">About Us</a>
          <a href="{{ route('front.service') }}" class="{{request()->is('service')? 'active' : ''}} nav-item nav-link">Our Services</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu bg-light m-0">
              <a href="{{ route('front.feature') }}" class="{{request()->is('feature')? 'active' : ''}} dropdown-item">Features</a>
              <a href="{{ route('front.appointment') }}" class="{{request()->is('appointment')? 'active' : ''}} dropdown-item">Appointment</a>
              <a href="{{ route('front.team') }}" class="{{request()->is('team')? 'active' : ''}} dropdown-item">Our Team</a>
              <a href="{{ route('front.testimonial') }}" class="{{request()->is('testimonial')? 'active' : ''}} dropdown-item">Testimonial</a>
            </div>
          </div>
          <a href="{{ route('front.contact') }}" class="{{request()->is('contact')? 'active' : ''}} nav-item nav-link">Contact Us</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->


    