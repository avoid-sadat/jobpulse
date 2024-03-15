
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
                        <li class="d-lg-none"><a href="">Log In</a></li>
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

                </div>
            </div>

        </div>
</div>
</header>

<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('../assets/images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold">All Jobs</h1>
                <div class="custom-breadcrumbs">
                    <a href="#">Home</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>All Jobs</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-image overlay-primary fixed overlay" id="next-section" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2 text-white">JobPulse Site </h2>
                <p class="lead text-white">

                    Whether you're a seasoned freelancer or just starting in the world of web development, Embrace your potential and join JobPulse  today!</p>
            </div>
        </div>

    </div>
</section>

<section class="site-section">
    <div class="container">

        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2">{{$totaljobs}} Job Listed</h2>

                {{--              @foreach($category as $categories)--}}
                {{--                  @php--}}
                {{--                      $namesArray = explode(',', $categories->name);--}}
                {{--                      $count = count($namesArray);--}}
                {{--                  @endphp--}}
                {{--                  <span class="badge badge-primary">{{ $categories->name }} ({{ $count }})</span>--}}
                {{--              @endforeach--}}
                @foreach($category as $categories)
                    @php
                        $namesArray = explode(',', $categories->name);
                        $count = count($namesArray);
                    @endphp

                    <span class="badge badge-primary">{{ $categories->category->name }} ({{ $count }})</span>

                @endforeach









            </div>
        </div>

        <ul class="job-listings mb-5">
            @foreach($jobs as $job)
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="{{ route('job_single', ['id' => $job->id]) }}"></a>
                    <div class="job-listing-logo">
                        @if($job->image)
                            <img src="{{ asset('jobimage/' . $job->image) }}" alt="Job Image" width="100" height="100">
                        @else
                            <!-- Display a placeholder image if there's no image for this job -->
                            <img src="{{ asset('path/to/placeholder/image.jpg') }}" alt="Placeholder Image" width="100" height="100">
                        @endif
                    </div>

                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                            <h2>{{ $job->job_title}}</h2>
                            <strong>{{ $job->company_name}}</strong>
                        </div>
                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                            <span class="icon-room"></span>{{ $job->job_region}}
                        </div>
                        <div class="job-listing-meta">
                            <span class="badge badge-primary">${{$job->salary}}</span>
                        </div>
                        <br>
                        <div class="job-listing-meta">
                            <span class="badge badge-primary">Apply Now</span>
                        </div>
                    </div>
            @endforeach







        </ul>



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
