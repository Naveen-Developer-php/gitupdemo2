<!DOCTYPE html>
<html lang="en">

    @include('frontend.layouts.head')

<body>
     <div class="se-pre-con"></div>
     @include('frontend.layouts.topheader')
    <!-- Start Page Title 
    ============================================= -->
    <div class="page-title-area shadow1 dark1 bg-fixed text-center text-light" style="background-image: url({{asset('public/assets-file/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Social Service</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Social Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services Single
    ============================================= -->
    <div class="services-single-area default-padding pdng1">
        <div class="container">
            <div class="row">
                <div class="services-info col-md-8">
                    <div style="text-align: center;">
                    <h2>Social Service</h2>
                </div>
                
                <P>{!! $table1->dexcription !!}</P>

                        
                </div>
                <div class="sidebar col-md-4">
                    <!-- Single Item -->
                    <div class="sidebar-item link">
                        <div class="title">
                            <h4>...</h4>
                        </div>
                        <ul>
                            <li class="active"><a href="{{route('front.social_service')}}">Social Service</a></li>
                            <li><a href="#">Catholic Centre</a></li>
                        </ul>
                    </div>
                    <!-- End Single Item -->
                   
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Single -->

   
     @include('frontend.layouts.footer')

</body>
</html>
