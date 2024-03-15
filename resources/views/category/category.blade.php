

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')
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
        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="flex justify-content-between align-items-center mb-3">
                <h4 class="card-title">List of categories</h4>
                <button class="btn btn-primary" onclick="window.location.href='{{ route('create_category') }}'">Create a category</button>
              </div>



                    </p>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th>#</th>
                         <th>name</th>

                            <th>Update</th>

                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($categories as $category)
                          <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$category->name}}</td>



                            <td ><a class="btn btn-primary"  href="{{url('update_category',$category->id)}}" ><i class="bi bi-pencil"></i></a> </td>
                            </td>

                            <td ><a class="btn btn-danger"  href="{{url('delete_category',$category->id)}}"  onclick="return confirm('you really want to delete this !')" ><i class="bi bi-trash3-fill"></i></a> </td>
                          </tr>
                   @endforeach
                        </tbody>
                      </table>
                    </div>
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
