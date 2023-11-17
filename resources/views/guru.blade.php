@extends('layouts.header')

@section('title', 'Daftar Guru')

@section('content')
<nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-9">
            <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span class="d-none d-lg-inline-block">10 20 123 456</span></a> 
            <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span class="d-none d-lg-inline-block">SDN01@Webmail.ac.id</span></a> 
          </div>

          <!-- <div class="col-6 col-lg-3 text-right">
            <a href="login.html" class="small mr-3">
              <span class="icon-lock"></span>
              Log In
            </a>
            <a href="register.html" class="small">
              <span class="icon-person"></span>
              Register
            </a>
          </div> -->

        </div>
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="/" class="logo menu-absolute m-0">SD Negri 01 Makarti<span class="text-primary">.</span></a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li ><a href="/">Home</a></li>
            
            <li class="active"><a href="/guru">Daftar Guru</a></li>
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
<div class="untree_co-hero overlay" style="background-image: url('{{ asset('learner') }}/images/img-school-3-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Daftar Guru</h1>
              <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                <p>Another free template by <a href="https://untree.co/" target="_blank" class="link-highlight">Untree.co</a>. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live.</p>
              </div>

              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore courses</a></p>

            </div>


          </div>

        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->

  <div class="untree_co-section bg-light">
    <div class="container">

      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="staff text-center">
            <div class="mb-4"><img src="{{ asset('learner') }}/images/staff_1.jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">Mina Collins</h3>
              <span class="d-block position mb-4">Teacher in Math</span>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="staff text-center">
            <div class="mb-4"><img src="{{ asset('learner') }}/images/staff_2.jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">Anderson Matthew</h3>
              <span class="d-block position mb-4">Teacher in Music</span>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="staff text-center">
            <div class="mb-4"><img src="{{ asset('learner') }}/images/staff_3.jpg" alt="Image" class="img-fluid"></div>
            <div class="staff-body">
              <h3 class="staff-name">Cynthia Misso</h3>
              <span class="d-block position mb-4">Teacher English</span>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="social">
                <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->
@endsection