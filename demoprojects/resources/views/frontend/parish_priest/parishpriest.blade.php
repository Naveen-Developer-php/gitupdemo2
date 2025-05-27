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
                    <h1>Parish & Priests</h1>
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
                        <li class="active">Parish & Priests</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
@if($table1->isEmpty())
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
    <!-- Star Team Area
    ============================================= -->
    <div class="team-area default-padding bottom-less">
        <div class="container">
           
            <div class="team-items text-center">
                <div class="row">
                    @foreach($table1 as $data)
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
                
            </div>
        </div>
    </div>
    @endif
    <!-- End Team Area -->

  @include('frontend.layouts.footer')

</body>
</html>
