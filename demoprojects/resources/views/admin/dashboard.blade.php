
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
   @include('admin.layouts.header')
<body>
    <!-- Begin page -->
    <div class="layout-wrapper">
        <!-- ========== Left Sidebar ========== -->
       @include('admin.layouts.sidemenu')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

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
                                <h3 class="page-title mb-0">Dashboard</h3>
                            </div>
                            <div class="col-lg-6">
                               <div class="d-none d-lg-block">
                                <ol class="breadcrumb m-0 float-end">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashtrap</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                      
                                        <h3 class="card-title mb-0">Total Product</h3>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                30
                                            </h2>
                                        </div>
                                        
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        
                                        <h3 class="card-title mb-0">Total Customer</h3>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                               89
                                            </h2>
                                        </div>
                                         
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                       
                                        <h3 class="card-title mb-0">Total Review</h3>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                600
                                            </h2>
                                        </div>
                                         
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col-->

                         <!-- end col-->
                    </div>
                       <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title"> Today Orders </h4>
                                        <a style="margin-left:80%; ">
                                        <div class="row">
 
                               </div>
                                            </a> <br>

                                             
                                        <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr> 
                                                     <th>S.No</th>
                                                     <th>Date</th>
                                                     <th>Customer ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Number Of Products</th>
                                                    
                                                    <th>Price</th>
                                                    <th>Order Status</th>
                                                     
                                                    <th>Payment Status</th>
                                                     <th>Option</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <tr>
                                                   <td>1</td>
                                                   <td>06-08-2024</td>
                                                    <td>45433 </td>
                                                    <td>Mano</td>
                                                    
                                                    <td>3</td>
                                                    <td>₹35</td> 
                                                    <td>Processing</td>
                                                     
                                                    <td>Paid</td>
                                                   <td><div class="btn-group mb-2">
                                            
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Action <i class="mdi mdi-chevron-down"></i> </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="order-detail.html">View & Edit</a>
                                                    <a class="dropdown-item" href="invoice.html">Download Invoice</a>
                                                     
                                                </div>
                                            </div>
                                        </div></td>
                                                </tr>
                                                    
                                              
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>  
                          
                </div> <!-- container -->

            </div>
            <div class="px-3">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="py-3 py-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="page-title mb-0">Today Customer</h4>
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
                                        
                                            
                                        <table id="key-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr> 
                                                     <th>S.No</th>
                                                    <th>Customer ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Mobile Number</th>
                                                    <th>Email</th>
                                                    <th>DOJ</th>
                                                     
                                                     <th>Action</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <tr>
                                                   <td>1</td>
                                                    <td>45433 </td>
                                                    <td>Arun</td>
                                                    
                                                    <td>81***76***</td>
                                                    <td>imparun@gmail.com</td> 
                                                    <td>26-09-24</td>
                                                  
                                                    <td> 
                                                           
                                                             
                                                              <a href="customer-detail.html"><button class="btn" style="background-color:#010046;"><i class="mdi mdi-eye" style="color: #ffffff;"></i></button></a>
                                                           
                                                </tr>
                                                    
                                            
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                       
 
                    </div> <!-- container -->

                </div>
             <!-- content -->
 

            <!-- Footer Start -->
            @include('admin.layouts.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
   @include('admin.layouts.script')
 

</body>

</html>