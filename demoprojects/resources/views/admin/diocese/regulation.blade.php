
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
                                    <h4 class="page-title mb-0">Regulation</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Regulation</li>
                                    </ol>
                                   </div>

                                </div>
                            </div>

                        </div>
                        <!-- end page title -->
                       
                        <div class="row">
                              <form method="POST" action="{{route('update_regulation',$regulation->id)}}">
                            @csrf
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div id="snow-editor" style="height: 300px;">
                                           
                                        </div> <!-- end Snow-editor-->
                                          <input type="hidden" name="description1" id="hidden-description1">
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->

                               <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div id="snow-editor1" style="height: 300px;">
                                           
                                        </div> <!-- end Snow-editor-->
                                          <input type="hidden" name="description2" id="hidden-description2">
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->

                              <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div id="snow-editor2" style="height: 300px;">
                                          
                                        </div> <!-- end Snow-editor-->
                                          <input type="hidden" name="description3" id="hidden-description3">
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

                                        
                                           <a href="{{route('regulation_table1')}}" style="margin-left:85%;"><button type="button" class="btn btn-primary"
                                            >Add New +</button></a> <br><br> 
                                        <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr> 
                                                      <th>S.No</th>
                                                    <th>Institution Name</th>
                                                    <th>Parish</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach($regulationtable1 as $data)
                                                <tr>
                                                   <td>{{ $loop->iteration }}</td>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{$data->parish}}</td>
                                                    <td>{{$data->address}}</td>
                                                    <td> 
                                                            
                                                             
                                                              <a href="{{route('view_regulationtable1',$data->id)}}"><button class="btn" style="background-color:#010046;"><i class="mdi mdi-eye" style="color: #ffffff;"></i></button></a>
                                                            <a href="javascript:void(0);" onclick="confirmDeleteAccount('{{ route('delete_regulationtable1', $data->id) }}')"><button class="btn" style="background-color: #8B0000;"><i class="mdi mdi-trash-can-outline" style="color: #ffffff;"></i></button></a></td>
                                                </tr>
                                                    @endforeach
                                              
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        
                                           <a href="{{route('regulation_table2')}}" style="margin-left:85%;"><button type="button" class="btn btn-primary"
                                            >Add New +</button></a> <br><br> 
                                        <table id="key-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr> 
                                                    <th>S.No</th>
                                                    <th>Institution Name</th>
                                                    <th>Parish</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach($regulationtable2 as $data)
                                                <tr>
                                                   <td>{{ $loop->iteration }}</td>
                                                     <td>{{$data->name}}</td>
                                                    <td>{{$data->parish}}</td>
                                                    <td>{{$data->address}}</td>
                                                    <td> 
                                                            
                                                             
                                                              <a href="{{route('view_regulationtable2',$data->id)}}"><button class="btn" style="background-color:#010046;"><i class="mdi mdi-eye" style="color: #ffffff;"></i></button></a>
                                                            <a href="javascript:void(0);" onclick="confirmDeleteAddress('{{ route('delete_regulationtable2', $data->id) }}')"><button class="btn" style="background-color: #8B0000;"><i class="mdi mdi-trash-can-outline" style="color: #ffffff;"></i></button></a></td>
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
                Do you really want to delete data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDeleteAccountBtn" class="btn btn-danger">Confirm</a>
            </div>
            </div>
        </div>
    </div>

    <!-- delete addres model -->
    <div class="modal fade" id="deleteAddressConfirmationModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure?</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                Do you really want to delete your data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDeleteAddressBtn" class="btn btn-danger">Confirm</a>
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

    // Editor 2
    var quill2 = new Quill('#snow-editor1', {
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
      var quill3 = new Quill('#snow-editor2', {
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
    quill1.root.innerHTML = `{!! $regulation->description1 !!}`;
    quill2.root.innerHTML = `{!! $regulation->description2 !!}`;
    quill3.root.innerHTML = `{!! $regulation->description3 !!}`;


    // Handle both editors on form submit
    document.querySelector('form').onsubmit = function () {
        document.querySelector('#hidden-description1').value = quill1.root.innerHTML;
        document.querySelector('#hidden-description2').value = quill2.root.innerHTML;
        document.querySelector('#hidden-description3').value = quill3.root.innerHTML;

    };
</script>

    </body>
</html>