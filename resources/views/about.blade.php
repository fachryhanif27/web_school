@extends('layouts.header')

@section('title', 'Gallery')

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
            
            <li><a href="guru">Daftar Guru</a></li>
            <li><a href="berita">Berita</a></li>
            <li ><a href="gallery">Gallery</a></li>
            <li class="active"><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
          
          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>

  <div class="untree_co-hero overlay" style="background-image: url('{{ asset('learner') }}/images/img-school-1-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">About Us</h1>
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




  <div class="services-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom mb-4">Become an Instructor</h2>
          </div>

          <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

          <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Behind the word Mountains.</li>
            <li>Far far away Mountains.</li>
            <li>Large language Ocean.</li>
          </ul>

          <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Get Started</a></p>

        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <figure class="img-wrap-2">
            <img src="{{ asset('learner') }}/images/teacher-min.jpg" alt="Image" class="img-fluid">
            <div class="dotted"></div>
          </figure>

        </div>
      </div>
    </div>
  </div>


  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Our Team</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
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



  <div class="untree_co-section">
    <div class="container"> 
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">We Have Best Education</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="feature">
            <span class="uil uil-music"></span>
            <h3>Music Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-calculator-alt"></span>
            <h3>Math Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-book-open"></span>
            <h3>English Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>


        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
          <div class="feature">
            <span class="uil uil-book-alt"></span>
            <h3>Reading for Kids</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-history"></span>
            <h3>History Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-headphones"></span>
            <h3>Music</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->


  

  <div class="untree_co-section">


    <div class="container">
      <div class="row">
        <div class="col-lg-5 mr-auto mb-5 mb-lg-0"  data-aos="fade-up" data-aos-delay="0">
          <img src="{{ asset('learner') }}/images/img-school-5-min.jpg" alt="image" class="img-fluid">
        </div>
        <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <h3 class="line-bottom mb-4">Why Choose Us</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>

          <div class="custom-accordion" id="accordion_1">
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Good Teachers and Staffs</button>
              </h2>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="{{ asset('learner') }}/images/img-school-1-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                      <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">We Value Good Characters</button>
              </h2>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="{{ asset('learner') }}/images/img-school-2-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                      <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Your Children are Safe</button>
              </h2>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="{{ asset('learner') }}/images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                      <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div> <!-- .accordion-item -->

          </div>

        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  @endsection