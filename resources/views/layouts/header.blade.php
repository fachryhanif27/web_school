
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="{{ asset('learner') }}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('learner') }}/css/animate.min.css">
  <link rel="stylesheet" href="{{ asset('learner') }}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('learner') }}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{ asset('learner') }}/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="{{ asset('learner') }}/fonts/icomoon/style.css">
  <link rel="stylesheet" href="{{ asset('learner') }}/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="{{ asset('learner') }}/css/aos.css">
  <link rel="stylesheet" href="{{ asset('learner') }}/css/style.css">

  <title>@yield('title')</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div> 

  @yield('content')

  <div class="site-footer">


    <div class="container">

      <div class="row">
        <div class="col-lg-3 mr-auto">
          <div class="widget">
            <h3>About Us<span class="text-primary">.</span> </h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-2 ml-auto">
          <div class="widget">
            <h3>Projects</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
              <li><a href="#">jQuery</a></li>
              <li><a href="#">Bootstrap</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-3">
          <div class="widget">
            <h3>Gallery</h3>
            <ul class="instafeed instagram-gallery list-unstyled">
              <li><a class="instagram-item" href="{{ asset('learner') }}/images/gal_1.jpg" data-fancybox="gal"><img src="{{ asset('learner') }}/images/gal_1.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="{{ asset('learner') }}/images/gal_2.jpg" data-fancybox="gal"><img src="{{ asset('learner') }}/images/gal_2.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="{{ asset('learner') }}/images/gal_3.jpg" data-fancybox="gal"><img src="{{ asset('learner') }}/images/gal_3.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="{{ asset('learner') }}/images/gal_4.jpg" data-fancybox="gal"><img src="{{ asset('learner') }}/images/gal_4.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="{{ asset('learner') }}/images/gal_5.jpg" data-fancybox="gal"><img src="{{ asset('learner') }}/images/gal_5.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="i{{ asset('learner') }}/mages/gal_6.jpg" data-fancybox="gal"><img src="{{ asset('learner') }}/images/gal_6.jpg" alt="" width="72" height="72"></a>
              </li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->


        <div class="col-lg-3">
          <div class="widget">
            <h3>Contact</h3>
            <address>43 Raymouth Rd. Baltemoer, London 3910</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed By <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="{{ asset('learner') }}/js/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('learner') }}/js/popper.min.js"></script>
    <script src="{{ asset('learner') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('learner') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('learner') }}/js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('learner') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('learner') }}/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('learner') }}/js/jquery.sticky.js"></script>
    <script src="{{ asset('learner') }}/js/aos.js"></script>
    <script src="{{ asset('learner') }}/js/custom.js"></script>

  </body>

  </html>
