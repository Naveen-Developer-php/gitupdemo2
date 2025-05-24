
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
       @include('admin.layouts.header')
    <body>
        <!-- Begin page -->
        <div class="layout-wrapper">
   @include('admin.layouts.sidemenu')
            <!-- ========== Left Sidebar ========== -->
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
                                    <h4 class="page-title mb-0">Privacy Policy</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Privacy Policy</li>
                                    </ol>
                                   </div>

                                </div>
                            </div>

                        </div>
                        <!-- end page title -->
                      
                        <div class="row">
                               <form method="POST" action="{{route('update_privacy',$data->id)}}">
                            @csrf
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div id="snow-editor" style="height: 300px;">
                                           
                                        </div> <!-- end Snow-editor-->
                                          <input type="hidden" name="description" id="hidden-description1">
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->


                               <div class="col-1" style="margin-right:auto; margin-left:auto;">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div><!-- end col -->
                        <br><br>
                        </form>


                           
                        </div>
                        <!-- end row -->  

                     
                        <!-- end row -->  
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('admin.layouts.footer')
                <!-- end Footer -->

            </div>
            <!-- End Page content -->
   
        </div>
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
    quill1.root.innerHTML = `{!! $data->description !!}`;

    // Handle both editors on form submit
    document.querySelector('form').onsubmit = function () {
        document.querySelector('#hidden-description1').value = quill1.root.innerHTML;
    };
</script>

    </body>
</html>

