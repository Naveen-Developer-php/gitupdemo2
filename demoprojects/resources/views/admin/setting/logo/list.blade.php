
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
                                    <h4 class="page-title mb-0">Main Logo</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Main Logo</li>
                                    </ol>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                         
                        <!-- end row-->


                       <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title"> </h4>
                                            
                                        <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr> 
                                                    <th>S.No</th>
                                                    <th>Logo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <tr>
                                                   <td>1</td>
                                                    <td>
                                                        <img src="{{asset($data->image)}}" alt="Image" width="100">
                                                    </td>
                                                    <td> 
                                                            <a href="{{route('view_logo',$data->id)}}"><button class="btn" style="background-color:#010046;"><i class="mdi mdi-eye" style="color: #ffffff;"></i></button></a>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                       
 
                    </div> <!-- container -->

                </div> <!-- content -->



                <!-- Footer Start -->
           @include('admin.layouts.footer')
                <!-- end Footer -->

            </div>
            <!-- End Page content -->

        </div>
        <!-- END wrapper -->
        
       @include('admin.layouts.script')

        
    </body>
</html>
