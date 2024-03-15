

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JobPulse</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <h4 class="card-title">View Job: {{$job->job_title}}</h4>


                    <form >

                      <div class="form-group">
                        <label for="">Job title</label>
                        <input type="text" class="form-control text-black" name="job_title" value="{{  $job->job_title }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Job region</label>
                        <input type="text" class="form-control text-black" name="job_region"  value="{{  $job->job_region }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Job type</label>
                        <input type="text" class="form-control text-black" name="job_type"  value="{{  $job->job_type }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Company name</label>
                        <input type="text" class="form-control text-black" name="company_name"  value="{{ $job->company_name }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">experience</label>
                        <input type="text" class="form-control text-black" name="experience" value="{{  $job->experience }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">application deadline</label>
                        <input type="date" class="form-control text-black" name="application_deadline" value="{{  $job->application_deadline }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">vacancy</label>
                        <input type="text" class="form-control text-black" name="vacancy" value="{{  $job->vacancy }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Gender</label>
                        <select class="form-control text-black" name="Gender" value="{{  $job->Gender }}" disabled>
                          <option>Male</option>
                          <option>Female</option>
                          <option>Any</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="">salary</label>
                        <input type="number" class="form-control text-black" name="salary" value="{{  $job->salary }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Job description</label>
                        <input type="text" class="form-control text-black" name="job_description" value="{{  $job->job_description }}" disabled>
                      </div>

                      <div class="form-group">
                        <label for="">responsibilities</label>
                        <input type="text" class="form-control text-black" name="responsibilities" value="{{  $job->responsibilities }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">education experience </label>
                        <input type="text" class="form-control text-black" name="education_experience" value="{{  $job->education_experience }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">other benifits</label>
                        <input type="text" class="form-control text-black" name="otherbenefits" value="{{  $job->otherbenefits }}" disabled>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <td><img  height="100" width="100" src="jobimage/{{$job->image}}" alt=""></td>

                      </div>


                    </form>
                  </div>
                </div>
              </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.cookie.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/assets/js/misc.js') }}"></script>
<script src="{{ asset('admin/assets/js/settings.js') }}"></script>
<script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
