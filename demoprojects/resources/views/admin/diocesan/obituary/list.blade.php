
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
                                    <h4 class="page-title mb-0">Obituary</h4>
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Obituary</li>
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
                                        <a href="{{route('add_obituary')}}" style="margin-left:85%;"><button type="button" class="btn btn-primary"
                                            >Add New +</button></a> <br><br> 
                                            
                                        <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr> 
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                @foreach($data as $value)
                                                <tr>
                                                   <td>{{$loop->iteration}}</td>
                                                    <td>{{$value->name}}</td>
                                                    <td>{{$value->position}}</td>
                                                    <td>{{$value->phone}}</td>
                                                    <td>{{$value->email}}</td>
                                                    <td> 
                                                            <a href="{{route('view_obituary',$value->id)}}"><button class="btn" style="background-color:#010046;"><i class="mdi mdi-eye" style="color: #ffffff;"></i></button></a>
                                                           <a href="javascript:void(0);" onclick="confirmDeleteAddress('{{ route('delete_obituary', $value->id) }}')"><button class="btn" style="background-color: #8B0000;"><i class="mdi mdi-trash-can-outline" style="color: #ffffff;"></i></button></a></td>
                                                </tr>
                                                    @endforeach
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
<!-- delete addres model -->
    <div class="modal fade" id="deleteAddressConfirmationModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure?</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                Do you really want to delete Obituary?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDeleteAddressBtn" class="btn btn-danger">Confirm</a>
            </div>
            </div>
        </div>
    </div>

        </div>
        <!-- END wrapper -->
        
       @include('admin.layouts.script')

        
    </body>
</html>
