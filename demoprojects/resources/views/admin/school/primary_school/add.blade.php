
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
                                    <h4 class="page-title mb-0">Primary School</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Add</a></li>
                                        <li class="breadcrumb-item active">Primary School</li>
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
                                       
                                        <form action="{{route('save_primary_school')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="school" value="{{old('school')}}">
                                                        <label for="floatingemailInput"> School</label>
                                                    </div>
                                                      @error('school')
                                                        <div style="color:red;">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                  <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="diocese_count" value="{{old('diocese_count')}}">
                                                        <label for="floatingemailInput"> Diocese Management Count</label>
                                                    </div>
                                                      @error('diocese_count')
                                                        <div style="color:red;">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="religious_count" value="{{old('religious_count')}}">
                                                        <label for="floatingemailInput"> Religious Management Count</label>
                                                    </div>
                                                      @error('religious_count')
                                                        <div style="color:red;">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                  <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="total" value="{{old('total')}}">
                                                        <label for="floatingemailInput">Total</label>
                                                    </div>
                                                      @error('total')
                                                        <div style="color:red;">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                           
                                          
                                            <div style="margin-top: 15px;">
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
