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
                                    
                                </div>
                                <div class="col-lg-6">
                                   <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Change Password</li>
                                    </ol>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                         <div class="row justify-content-center">
            
           
            <div class="col-xl-4 col-md-5">
                <div class="card">

                    <div class="card-body p-4">
                           
                         <h3 style="text-align:center; padding: 10px;">Change Password</h3>
                        
                        <form action="{{route('update_password')}}" method="post">
                             @csrf           
                            <div class="form-group mb-3 position-relative">
                                <label class="form-label">Enter Your Current Password</label>
                                <input class="form-control" type="password" name="old_password" id="old_password" placeholder="Enter Old Password">
                                <i class="fa fa-eye toggle-password" toggle="#old_password" style="position: absolute; top: 38px; right: 15px; cursor: pointer;"></i>
                                @error('old_password')
                                    <div style="color:red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 position-relative">
                                <label class="form-label">Enter New Password</label>
                                <input class="form-control" type="password" name="new_password" id="new_password" placeholder="Enter New Password">
                                <i class="fa fa-eye toggle-password" toggle="#new_password" style="position: absolute; top: 38px; right: 15px; cursor: pointer;"></i>
                                @error('new_password')
                                    <div style="color:red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 position-relative">
                                <label class="form-label">Confirm Password</label>
                                <input class="form-control" type="password" name="cnf_password" id="cnf_password" placeholder="Enter Confirm Password">
                                <i class="fa fa-eye toggle-password" toggle="#cnf_password" style="position: absolute; top: 38px; right: 15px; cursor: pointer;"></i>
                                @error('cnf_password')
                                    <div style="color:red;">{{ $message }}</div>
                                @enderror
                            </div>
 

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Submit </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                
            </div> <!-- end col -->
        </div>
            </div></div>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script>
    document.querySelectorAll(".toggle-password").forEach(function (element) {
        element.addEventListener("click", function () {
            const input = document.querySelector(this.getAttribute("toggle"));
            if (input.getAttribute("type") === "password") {
                input.setAttribute("type", "text");
                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");
            } else {
                input.setAttribute("type", "password");
                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye");
            }
        });
    });
</script>

</body>

</html>
