

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')
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

                    <h4 class="card-title">Add</h4>
                    @if ($errors->any())
        <div class="alert alert-danger my-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

                    <form action="{{url('store_jobs')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="">Job title</label>
                        <input type="text" class="form-control text-black" name="job_title" value="{{ old('job_title') }}">
                      </div>
                      <!-- ... (previous HTML code) ... -->
<div class="form-group">
    <label for="category">Category</label>
    <select class="form-control text-black" name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
<!-- ... (remaining HTML code) ... -->


                      <div class="form-group">
                        <label for="">Job region</label>
                        <input type="text" class="form-control text-black" name="job_region"  value="{{ old('job_region') }}">
                      </div>
                      <div class="form-group">
                        <label for="">Company name</label>
                        <input type="text" class="form-control text-black" name="company_name"  value="{{ old('company_name') }}">
                      </div>
                      <div class="form-group">
                        <label for="">Job type</label>
                        <input type="text" class="form-control text-black" name="job_type"  value="{{ old('job_type') }}">
                      </div>
                      <div class="form-group">
                        <label for="">experience</label>
                        <input type="text" class="form-control text-black" name="experience" value="{{ old('experience') }}">
                      </div>
                      <div class="form-group">
                        <label for="">application deadline</label>
                        <input type="date" class="form-control text-black" name="application_deadline" value="{{ old('application_deadline') }}">
                      </div>
                      <div class="form-group">
                        <label for="">vacancy</label>
                        <input type="text" class="form-control text-black" name="vacancy" value="{{ old('vacancy') }}">
                      </div>
                      <div class="form-group">
                        <label for="">Gender</label>
                        <select class="form-control text-black" name="Gender" value="{{ old('Gender') }}">
                          <option>Male</option>
                          <option>Female</option>
                          <option>Any</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="">salary</label>
                        <input type="number" class="form-control text-black" name="salary" value="{{ old('salary') }}">
                      </div>
                      <div class="form-group">
                        <label for="">Job description</label>
                        <textarea class="form-control text-black"  rows="4" name="job_description" value="{{ old('job_description') }}"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">responsibilities</label>
                        <textarea class="form-control text-black" name="responsibilities" rows="4" value="{{ old('responsibilities') }}"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">education experience </label>
                        <textarea class="form-control text-black" name="education_experience" rows="4" value="{{ old('education_experience') }}"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">other benifits</label>
                        <textarea class="form-control text-black" name="otherbenefits" rows="4" value="{{ old('otherbenefits') }}"></textarea>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" required="">

                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </form>
                  </div>
                </div>
              </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
