
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
                                    <h4 class="page-title mb-0">Event</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Add</a></li>
                                        <li class="breadcrumb-item active">Event</li>
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
                                       
                                        <form action="{{route('save_event')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                                        <label for="floatingemailInput"> Title</label>
                                                    </div>
                                                      @error('title')
                                                        <div style="color:red;">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-floating mb-2">
                                                <textarea class="form-control" name="short_description" style="height: 100px">{{old('short_description')}}</textarea>
                                                <label for="floatingTextarea">Short Description</label>
                                                  @error('short_description')
                                                        <div style="color:red;">{{ $message }}</div>
                                                    @enderror
                                              </div>

                                            <div class="col-12">
                                                <div class="card">
                                                      <label for="floatingTextarea">Description</label>
                                                    <div class="card-body">
                                                        
                                                        <div id="snow-editor" style="height: 300px;">
                                                        
                                                        </div> <!-- end Snow-editor-->
                                                        <input type="hidden" name="description" id="hidden-description1">
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div><!-- end col -->      

                                            <div class="col-12">
                               <div class="brd">
                               <h4 style="margin-top: 10px; text-align: center;"> Upload Event image<br><span style="color:#9B0000; font-size: 13px; text-align: center;">(size:400px*400px)(Max Size 1024MB) </span></h4>
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
            <script>
    // Editor 1
    var quill1 = new Quill('#snow-editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'font': [] }],
                [{ 'size': ['small', false, 'large', 'huge'] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'script': 'sub' }, { 'script': 'super' }],
                [{ 'header': 1 }, { 'header': 2 }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                [{ 'indent': '-1' }, { 'indent': '+1' }],
                [{ 'direction': 'rtl' }],
                [{ 'align': [] }],
                ['link', 'image', 'video', 'code-block'],
                ['clean']
            ]
        }
    });


    // Set old values if available
    // Handle both editors on form submit
    document.querySelector('form').onsubmit = function () {
        document.querySelector('#hidden-description1').value = quill1.root.innerHTML;
    };
</script>
    </body>
</html>
