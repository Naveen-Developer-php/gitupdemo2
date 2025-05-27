
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
                    <h1>About</h1>
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
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area default-padding pdng1">
        <div class="container">
            <div class="row item-flex center">
                    
                    <div class="col-md-6 info">
                        <h2>{{$about->name}}</h2>
                        <h4>{{$about->position}}</h4>
                        <p>
                           {{$about->address}}
                        </p>
                        <ul>
                            <li><i class="icon_check"></i> Tel: {{$about->phone}}</li>
                            <li><i class="icon_check"></i> E-mail: {{$about->email}}</li>
                        </ul>
                        
                    </div>
                    <div class="col-md-6 thumb-box">
                        <div class="thumb">
                            <img src="{{asset($about->image)}}" alt="Thumb">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- End Our About -->

   

    <!-- Star Team Area
    ============================================= -->
    <div class="team-area default-padding bg-gray bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Parish & Priests</h2>
                    </div>
                </div>
            </div>
            @if($parishpriest->isEmpty())
    <div class="about-area default-padding pdng1">
        <div class="container">
            <div class="row">
                <div style="text-align: center;">
                    <h2>No Data Found</h2>
                </div>
            </div>
        </div>
    </div>
@else
            <div class="team-items text-center">
                <div class="row">
                     @foreach($parishpriest as $data)
                    <!-- Single Item -->
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{asset($data->image)}}" alt="Thumb">
                                
                            </div>
                            <div class="info">
                                <div class="inner">
                                    <h4>{{$data->name}}</h4>
                                    <span>{{$data->position}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                
                </div>
                <a class="btn btn-theme border btn-sm" href="{{route('front.parish_priest')}}">View More<i class="fas fa-angle-double-right"></i></a>
            </div>
            @endif
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Our Services
    ============================================= -->
    <div class="modern-services-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Organization</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-box text-center">
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-meeting"></i>
                            </div>
                            <div class="content">
                                <h4>Schools</h4>
                                <p style="text-align: left;">
                                    The Diocese of Thanjavur manages numerous schools, along with many primary and middle schools. 
                                </p>
                                <a href="{{route('front.diocesan_school')}}">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-meeting"></i>
                            </div>
                            <div class="content">
                                <h4>Colleges</h4>
                                <p style="text-align: left;">
                                     Diocese of Thanjavur has several colleges under its jurisdiction, and Our Lady of Health School & College of Nursing. 
                                </p>
                                <a href="{{route('front.diocesan_college')}}">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-meeting"></i>
                            </div>
                            <div class="content">
                                <h4>Charitable</h4>
                                <p style="text-align: left;">
                                    Diocese of Thanjavur operates Hospitals, Home for Aged and Orphanages
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services -->

    <!-- Star Footer
    ============================================= -->
     @include('frontend.layouts.footer')

</body>
</html>