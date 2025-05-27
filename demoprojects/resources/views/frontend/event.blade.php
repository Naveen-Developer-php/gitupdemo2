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
                    <h1>News & Events</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center" style="border: 1px solid #d9d9d9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">News & Events</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
              @if($event->isEmpty())
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
    <!-- Start Blog
    ============================================= -->
    <div class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            
            <div class="row">
                <div class="blog-items">
                  @foreach($event as $data)
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('front.event_details',$data->id)}}">
                                    <img src="{{asset($data->image)}}" alt="Thumb">
                                    
                                </a>
                            </div>
                            <div class="info" style="padding-bottom: 0px;">
                               
                                <h4>
                                    <a href="{{route('front.event_details',$data->id)}}">{{ \Illuminate\Support\Str::limit($data->title, 50) }}</a>
                                </h4>
                               <p>{{ \Illuminate\Support\Str::limit($data->short_description, 100) }}</p>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="{{route('front.event_details',$data->id)}}">Read More <i class="ti-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                  
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endif
 @include('frontend.layouts.footer')

</body>
</html>
