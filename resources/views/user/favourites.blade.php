
<!doctype html>
<html lang="en">
  <head>
    <title>JobPulse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/custom-bs.css">
    <link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/fonts/line-icons/style.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/quill.snow.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="{{url('/')}}">JobPulse</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="{{url('/')}}" class="nav-link active">Home</a></li>
              <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('jobs')}}">Jobs</a></li>
                <li><a href="{{route('about')}}">Blogs</a></li>


              <li><a href="{{route('contact')}}">Contact</a></li>
              <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>

            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
          <div class="ml-auto">

@if(Route::has('login'))

  @auth
  <div class="flex">

  <div class="dropdown show">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuOutlineButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Applications </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuOutlineButton2" style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">

                        <a class="dropdown-item" href="{{route('showProfile')}}">Profile</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{route('favourites')}}">Favourite</a>

                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{route('messages')}}">Messages</a>
                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item" href="{{route('upload_cv')}}">Upload cv</a>
                        </div>
                      </div>
<br>
<x-app-layout>
</x-app-layout>

</div>
  @else
  <a href="{{route('register')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Register</a>
  <a href="{{route('login')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
</div>
@endauth
@endif
<a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
</div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('../assets/images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Favourites</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Favourites</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
          {{session()->get('message')}}
          </div>
          @endif

    <section class="site-section" id="next-section">
      <div class="container">
      </div>

      <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Saved jobs</h4>


                    <div class="table-responsive">
                      <table class="table ">
                        <thead>
                          <tr>




                            <th> job title </th>
                            <th> Company </th>
                            <th> Job region </th>
                            <th> Job type </th>
                            <th> submition deadline </th>
                            <th> Salary </th>


                            <!-- <th>View</th> -->
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($myFavorites as $job)
                                <tr>

                                    <td><h1>{{ $job->job_title }}</h1></td>
                                    <td>{{ $job->company_name }}</td>
                                    <td>{{ $job->job_region }}</td>
                                    <td><label class="badge badge-info">{{ $job->job_type }}</label></td>
                                    <td><label class="badge badge-success">{{ $job->application_deadline }}</label></td>
                                    <td>{{ $job->salary }} da/day</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ route('remove_from_favorites', ['id' => $job->id]) }}" onclick="return confirm('Are you sure you want to delete this job from Favourites?')">
                                            <i class="bi bi-trash3-fill"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

      </div>
    </section>

    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank" >JobPulse</a>
                </small>
            </p>
          </div>
        </div>
      </div>
    </footer>

  </div>

    <!-- SCRIPTS -->
       <!-- SCRIPTS -->
        <!-- SCRIPTS -->
   <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/stickyfill.min.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>

    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/jquery.animateNumber.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/quill.min.js"></script>


    <script src="../assets/js/bootstrap-select.min.js"></script>

    <script src="../assets/js/custom.js"></script>





  </body>
</html>
