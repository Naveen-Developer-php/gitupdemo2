<!DOCTYPE html>
<html lang="en">

  @include('frontend.layouts.head')

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
 @include('frontend.layouts.topheader')
  

    <!-- Start Page Title 
    ============================================= -->
    <div class="page-title-area shadow1 dark1 bg-fixed text-center text-light" style="background-image: url({{asset('public/assets-file/img/2440x1578.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>History</h1>
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
                        <li class="active">History</li>
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
                    <h2>History Of Diocese</h2>
                </div>
                <p>
                    {!! $history->description !!}
                </p>

                        

                </div>
                <div class="sidebar col-md-4">
                    <!-- Single Item -->
                    <div class="sidebar-item link">
                        <div class="title">
                            <h4>Diocese</h4>
                        </div>
                        <ul>
                            <li><a href="{{route('front.about')}}">About</a></li>
                            <li class="active"><a href="{{route('front.history')}}">History</a></li>
                            <li><a href="{{route('front.vocation')}}">Vocations</a></li>
                            <li><a href="{{route('front.regulation')}}">Regulations</a></li>
                            <li><a href="{{route('front.pious_association')}}">Pious Association</a></li>
                        </ul>
                    </div>
                    <!-- End Single Item -->
                   
                </div>

            </div>

        </div>

                        <div class="container" style="padding-top: 20px;">
                    <p>
                         {!! $history->description1 !!}
                    </p>
                </div>
    </div>
    <!-- End Services Single -->

   
    <!-- Star Footer
    ============================================= -->
   @include('frontend.layouts.footer')

</body>
</html>
