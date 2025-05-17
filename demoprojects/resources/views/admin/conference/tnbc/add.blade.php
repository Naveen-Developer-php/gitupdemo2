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
                                    <h4 class="page-title mb-0">TNBC</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">TNBC</li>
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
                                       
                                        <form action="{{route('save_tnbc')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Position" name="position" value="{{old('position')}}">
                                                        <label for="floatingemailInput"> Position</label>
                                                    </div>
                                                    @error('position')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter tagline" name="tagline" value="{{old('tagline')}}">
                                                        <label for="floatingemailInput">Tagline</label>
                                                    </div>
                                                      @error('tagline')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-floating mb-2">
                                                <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px" name="address">{{old('address')}}</textarea>
                                                <label for="floatingTextarea">Address</label>
                                                  @error('address')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                              </div>

                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" placeholder="Enter phone" name="phone" value="{{old('phone')}}">
                                                        <label for="floatingemailInput"> Phone:</label>
                                                    </div>
                                                      @error('phone')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{old('email')}}">
                                                        <label for="floatingemailInput">E-mail:</label>
                                                    </div>
                                                      @error('email')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter fax" name="fax" value="{{old('fax')}}">
                                                        <label for="floatingemailInput"> Fax:</label>
                                                    </div>
                                                      @error('fax')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter website" name="website" value="{{old('website')}}">
                                                        <label for="floatingemailInput">Website:</label>
                                                    </div>
                                                      @error('website')
                                                       <div style="color:red;">{{ $message }}</div>     
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                               <div class="brd">
                               
                               <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <label class="upload__btn">
                                            <p>Upload images</p>
                                        <input type="file" data-max_length="20" class="upload__inputfile" name="image" value="{{old('image')}}">
                                        </label>
                                        <br>
                                        <span style="color:#9B0000; font-size: 13px;">(size:400px*400px)(Max Size 1024MB) </span>
                                    </div>
                                    <div class="upload__img-wrap"></div> 
                                </div>
                                @error('image')
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
