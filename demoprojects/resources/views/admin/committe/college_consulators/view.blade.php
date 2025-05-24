
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
                                    <h4 class="page-title mb-0">College Of Consulators</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Edit</a></li>
                                        <li class="breadcrumb-item active">College Of Consulators</li>
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
                                       
                                        <form action="{{route('update_college_consulators',$data->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="name" value="{{$data->name}}">
                                                        <label for="floatingemailInput"> Name</label>
                                                    </div>
                                                      @error('name')
                                                            <div style="color:red;">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="position" value="{{$data->position}}">
                                                        <label for="floatingemailInput">Position</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-floating mb-2">
                                                <textarea class="form-control" name="address" style="height: 100px">{{$data->address}}</textarea>
                                                <label for="floatingTextarea">Address</label>
                                              </div>

                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="phone" value="{{$data->phone}}">
                                                        <label for="floatingemailInput"> Phone:</label>
                                                    </div>
                                                      @error('phone')
                                                            <div style="color:red;">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>

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
