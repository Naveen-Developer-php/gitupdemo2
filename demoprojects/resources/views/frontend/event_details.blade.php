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
                    <h1>Event Detail</h1>
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
                        <li><a href="">Event Detail</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding pdng1">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-12">
                        <div class="item">

                            <div class="blog-item-box">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{asset($event->image)}}" alt="Thumb">
                                        
                                    </a>
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    
                                    
                                   <p>{!! $event->description !!}</P>

                                   
                                </div>
                            </div>
                        </div>

                     
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

       @include('frontend.layouts.footer')

</body>
</html>
