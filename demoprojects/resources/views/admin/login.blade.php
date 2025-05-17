
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Log In | Diocese Of Thanjavur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('public/assets/images/fav.png')}}">
    <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- App css -->
     
    <link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('public/assets/js/config.js')}}"></script>
</head>

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        <div class="row justify-content-center">
            
           
            <div class="col-xl-4 col-md-5">
                <div class="card">

                    <div class="card-body p-4">
                           <div class="text-center w-95   auth-logo mb-4">
                            <a  class="logo-dark">
                                <span><img src="{{asset('public/assets/images/logo-light.png')}}" alt="" height="82"></span>
                            </a>

                            <a class="logo-light">
                                <span><img src="{{asset('public/assets/images/logo-light.png')}}" alt="" height="82"></span>
                            </a>
                        </div>
                         <h3 style="text-align:center; padding: 10px;">Sign In to Dashboard</h3>
                        
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="emailaddress">Email address</label>
                                <input class="form-control" type="email" name="email" value="{{old('name')}}" placeholder="Enter your email">
                                 @error('email')
                                    <div style="color:red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <a href="pages-recoverpw.html" class="text-muted float-end"><small></small></a>
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" type="password" name="password" value="{{old('password')}}" placeholder="Enter your password">
                                 @error('password')
                                    <div style="color:red;">{{ $message }}</div>
                                @enderror
                            </div>

                            

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Log In </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <!-- App js -->
    <script src="{{asset('public/assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('public/assets/js/app.js')}}"></script>
    <script src="{{asset('public/assets/js/alert.js')}}"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    @if(session('popup_error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('popup_error') }}",
        });
    @endif
    @if(session('popup_success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('popup_success') }}",
        });
    @endif
});
</script>

</body>

</html>