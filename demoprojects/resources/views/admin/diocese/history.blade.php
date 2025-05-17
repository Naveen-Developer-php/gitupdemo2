
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
                                    <h4 class="page-title mb-0">History</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">History</li>
                                    </ol>
                                   </div>

                                </div>
                            </div>

                        </div>
                        <!-- end page title -->
                        <form method="POST" action="{{ route('update_history',$history->id) }}">
                            @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                       
                                        <div id="snow-editor" style="height: 300px;">
                                           
                                        </div> <!-- end Snow-editor-->
                                         <input type="hidden" name="description" id="hidden-description">
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->  

                        <div class="col-1" style="margin-right:auto; margin-left:auto;">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div><!-- end col -->
                        </form>

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
        @include('admin.layouts.script')
        
     <script>
    var quill = new Quill('#snow-editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'font': [] }],
                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults
                [{ 'script': 'sub' }, { 'script': 'super' }],     // superscript/subscript
                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                [{ 'indent': '-1' }, { 'indent': '+1' }],         // outdent/indent
                [{ 'direction': 'rtl' }],                         // text direction
                [{ 'align': [] }],
                ['link', 'image', 'video', 'code-block'],
                ['clean']                                         // remove formatting
            ]
        }
    });

    // Set content if already saved
    quill.root.innerHTML = `{!! $history->description !!}`;

    // Save content on form submit
    document.querySelector('form').onsubmit = function () {
        document.querySelector('#hidden-description').value = quill.root.innerHTML;
    };
</script>
    </body>
</html>