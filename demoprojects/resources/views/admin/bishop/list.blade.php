
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
                                    <h4 class="page-title mb-0">Bishop Profile</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Bishop Profile</li>
                                    </ol>
                                   </div>

                                </div>
                            </div>

                        </div>
                        <!-- end page title -->
                      
                        <div class="row">
                               <form method="POST" action="{{route('update_bishop_profile',$profile->id)}}">
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

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">He has held the following offices: </h4>
                                        
                                           <a href="{{route('add_bishop_details')}}" style="margin-left:85%;"><button type="button" class="btn btn-primary"
                                            >Add New +</button></a> <br><br> 
                                        <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr> 
                                                    <th>S.No</th>
                                                    <th>Year</th>
                                                    <th>Details</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach($details as $data1)
                                                <tr>
                                                   <td>{{ $loop->iteration }}</td>
                                                    <td>{{$data1->from_year}}-{{$data1->to_year}}</td>
                                                    <td>{{$data1->address}}</td>
                                                    <td> 
                                                            
                                                             
                                                              <a href="{{route('view_bishop_details',$data1->id)}}"><button class="btn" style="background-color:#010046;"><i class="mdi mdi-eye" style="color: #ffffff;"></i></button></a>
                                                            <a href="javascript:void(0);" onclick="confirmDeleteAccount('{{ route('delete_bishop_details', $data1->id) }}')"><button class="btn" style="background-color: #8B0000;"><i class="mdi mdi-trash-can-outline" style="color: #ffffff;"></i></button></a></td>
                                                </tr>
                                                    @endforeach
                                              
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                           
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
<!-- delete account model  -->
    <div class="modal fade" id="deleteAccountConfirmationModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure?</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                Do you really want to delete Bishop Details?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDeleteAccountBtn" class="btn btn-danger">Confirm</a>
            </div>
            </div>
        </div>
    </div>

   

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
    quill1.root.innerHTML = `{!! $profile->description !!}`;

    // Handle both editors on form submit
    document.querySelector('form').onsubmit = function () {
        document.querySelector('#hidden-description1').value = quill1.root.innerHTML;
    };
</script>

    </body>
</html>
