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
                                    <h4 class="page-title mb-0">Shrine View</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">View</a></li>
                                        <li class="breadcrumb-item active">Shrine View</li>
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
                                       
                                        <form action="{{route('update_shrine',$data->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$data->name}}">
                                                        <label for="floatingemailInput"> Name</label>
                                                    </div>
                                                    @error('name')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Position" name="position" value="{{$data->position}}">
                                                        <label for="floatingemailInput">Position</label>
                                                    </div>
                                                      @error('position')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                            </div>
                                               <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" placeholder="Enter phone" name="phone" value="{{$data->phone}}">
                                                        <label for="floatingemailInput"> Phone</label>
                                                    </div>
                                                    @error('phone')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" placeholder="Enter Tel" name="tel" value="{{$data->tel}}">
                                                        <label for="floatingemailInput">Tel</label>
                                                    </div>
                                                      @error('tel')
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


