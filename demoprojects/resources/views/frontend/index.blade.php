<!DOCTYPE html>
<html lang="en">

    @include('frontend.layouts.head')

<body>
     <div class="se-pre-con"></div>
     @include('frontend.layouts.topheader')
    

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel inc-top-heading slide animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                @foreach($banner as $data)
                <div class="item bg-cover {{ $loop->first ? 'active' : '' }}" style="background-image: url({{asset($data->image)}});">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start About Content -->
                <div class="about-content content-left">
                    <div class="col-md-6 info">
                        <h2>Welcome of the Diocese of Thanjavur</h2>
                        <p>
                           The Diocese of Thanjavur was created on November 22, 1952 through the papal bull “Ex Primaevae Ecclesiae” when it was bifurcated from the ancient See of Mylapore. It had to wait for four more months for the nomination of its new bishop. Most Rev. Dr.R.A.Sundaram, an illustrious son of the soil, was nominated the first Bishop of Thanjavur on February 4, 1953 and was consecrated at Chennai on 19th March 1953. It is interesting to note that in 1843 itself, the then Apostolic Prefect of Pondicherry, Msgr.Bonnand proposed that Thanjavur be erected an Apostolic Vicariate. 
                        </p>

                        <p>
                           Mylapore had become a diocese in 1606 and was the third oldest diocese of India till it was amalgamated with Madras in 1952. Its jurisdiction extended from the present Diocese of Thoothukudi in Tamilnadu to what is now known as West Bengal. Many missionaries including Franciscans, Augustinians, Dominicans and Jesuits like Robert de Nobili (the Father of Tamil Prose), Balthasar da Costa (the founder of Thanjavur Mission), John de Britto (the first Jesuit saint in India), Antam de Proenca (whose Tamil Portuguese, Dictionary was the first of its kind to be printed) and Costanzo Giosseffo Beschi (fondly called by the Tamils Veeramamunivar, who was the author of the Tamil Catholic epic Thembavani, the first European scholar to scientifically study Tamil grammar and compose new Tamil grammar both in Tamil as well as in Latin and the first to compile a Tamil Tamil Dictionary called Saduragarathi) had toiled laboriously in the area presently covered by Thanjavur Diocese. 
                        </p>
                       
                    </div>
                    <div class="col-md-6 thumb-box">
                        <div>
                            <img src="{{asset('public/assets-file/img/800x800.png')}}" alt="Thumb">
                        </div>
                    </div>
                </div>
                <!-- End About -->

            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start Our Services
    ============================================= -->
    <div class="modern-services-area bg-gray default-padding bottom-less">
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
                                <a href="{{route('front.hospital')}}">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services -->

       

    <!-- Star Team Area
    ============================================= -->
    <div class="team-area default-padding bottom-less">
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

    <!-- Star Blog Area
    ============================================= -->
    <div class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>News & Events</h2>
                    </div>
                </div>
            </div>
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
            <div class="text-center">
                <a class="btn btn-theme border btn-sm" href="{{route('front.events')}}">View More<i class="fas fa-angle-double-right"></i></a>
            </div>
@endif
        </div>
    </div>
    <!-- End Blog Area -->

  

    <!-- Star Footer
    ============================================= -->
  
    <!-- End Footer-->

    <!-- jQuery Frameworks
    ============================================= -->
    @include('frontend.layouts.footer')

</body>
</html>
