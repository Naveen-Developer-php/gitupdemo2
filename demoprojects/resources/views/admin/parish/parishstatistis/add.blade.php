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
                                    <h4 class="page-title mb-0">Parish Statistics</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Parish Statistics</li>
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
                                       
                                        <form action="{{route('save_parishstatistis')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{old('name')}}">
                                                        <label for="floatingemailInput"> Name</label>
                                                    </div>
                                                    @error('name')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Family" name="family" value="{{old('family')}}">
                                                        <label for="floatingemailInput">Family</label>
                                                    </div>
                                                      @error('family')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                            </div>
                                               <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Female" name="female" value="{{old('female')}}">
                                                        <label for="floatingemailInput"> Female</label>
                                                    </div>
                                                    @error('female')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Male" name="male" value="{{old('male')}}">
                                                        <label for="floatingemailInput">male</label>
                                                    </div>
                                                      @error('male')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Population" name="total_population" value="{{old('total_population')}}">
                                                        <label for="floatingemailInput"> Total Population</label>
                                                    </div>
                                                    @error('total_population')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Substation" name="substation" value="{{old('substation')}}">
                                                        <label for="floatingemailInput">Substation</label>
                                                    </div>
                                                      @error('substation')
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

