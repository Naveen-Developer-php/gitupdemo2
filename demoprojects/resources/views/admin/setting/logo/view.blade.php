
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Edit</a></li>
                                        <li class="breadcrumb-item active">Main Logo</li>
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
                                       
                                        <form action="{{route('update_logo',$data->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div class="col-6">
                               <div class="brd">
                               <h4 style="margin-top: 10px; text-align: center;"> Upload Product image<br><span style="color:#9B0000; font-size: 13px; text-align: center;">(size:400px*400px)(Max Size 1024MB) </span></h4>
                               <div class="upload__box">
                               <div class="upload__btn-box">
                                   <label class="upload__btn">
                                      <p>Upload images</p>
                                   <input type="file" data-max_length="20" class="upload__inputfile" name="image">
                                  </label>
                               </div>
                               <div class="upload__img-wrap"></div>
                              </div>
                            </div>
                              @if($data->image)
                                 <img src="{{asset($data->image)}}" alt="" class="flex-shrink-0 me-12 radius-8" width="30%" height="30%" style="margin-left:110%;margin-top:-39%">
                              @endif
                               @error('image')
                                    <div style="color:red;">{{ $message }}</div>
                                @enderror
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
