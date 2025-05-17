<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
       @include('admin.layouts.header')
    <body>
        <!-- Begin page -->
        <div class="layout-wrapper">
            <!-- ========== Left Sidebar ========== -->
       @include('admin.layouts.sidemenu')
            <!-- Start Page Content here -->
            <div class="page-content">
                <!-- ========== Topbar Start ========== -->
                     @include('admin.layouts.tobbar')
                <!-- ========== Topbar End ========== -->

                <div class="px-3">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="py-3 py-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="page-title mb-0">Vocation Table1</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Vocation Table1</li>
                                    </ol>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Form row -->
                        <div class="row">
                           
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <form action="{{route('add_voactiontable1')}}" method="post">
                                           @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{old('name')}}">
                                                        <label for="floatingemailInput">Name</label>
                                                    </div>
                                                    @error('name')
                                                          <div style="color:red;">{{ $message }}</div>        
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Year" name="year" value="{{old('year')}}">
                                                        <label for="floatingemailInput">Year</label>
                                                    </div>
                                                     @error('year')
                                                          <div style="color:red;">{{ $message }}</div>        
                                                    @enderror
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Seminary" name="seminary" value="{{old('seminary')}}">
                                                        <label for="floatingemailInput">Seminary</label>
                                                    </div>
                                                     @error('seminary')
                                                          <div style="color:red;">{{ $message }}</div>        
                                                    @enderror
                                                </div>

                                            </div>

                                         

                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
   @include('admin.layouts.footer')
              
                <!-- end Footer -->
            </div>
            <!-- End Page content -->


        </div>
        <!-- END wrapper -->

        <!-- App js -->
          @include('admin.layouts.script')

        
    </body>
</html>
