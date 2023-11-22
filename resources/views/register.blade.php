@extends('layouts.header')

@section('title', 'register')

@section('content')
<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  
  <nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-9">
          <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">10 20 123 456</span></a> 
            <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">SDN01@Webmail.ac.id</span></a> 
          </div>

          <div class="col-6 col-lg-3 text-right">
            <a href="login" class="small mr-3">
              <span class="icon-lock"></span>
              Log In
            </a>
            <a href="register" class="small">
              <span class="icon-person"></span>
              Register
            </a>
          </div>

        </div>
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="/" class="logo menu-absolute m-0">SD Negri 01 Makarti<span class="text-primary">.</span></a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li class="active"><a href="/">Home</a></li>
            
            <li><a href="guru">Daftar Guru</a></li>
            <li><a href="berita">Berita</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>


          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>
  

  <div class="untree_co-hero inner-page overlay" style="background-image: url('{{ asset('learner') }}/images/img-school-5-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Register</h1>

            </div>
          </div>
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->

  <div class="untree_co-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
          <form action="#" class="form-box">
            <div class="row">
              <div class="col-12 mb-4">
                
              </div>
              <div class="col-12 mb-3">
                <input type="text" class="form-control" placeholder="Full name">
              </div>
              <div class="col-12 mb-3">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" placeholder="Re-type Password">
              </div>

              <div class="col-12 mb-3">
                <label class="control control--checkbox">
                  <span class="caption">Accept our <a href="#">terms and conditions</a></span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>

              <div class="col-12">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div> <!-- /.untree_co-section -->
  @endsection