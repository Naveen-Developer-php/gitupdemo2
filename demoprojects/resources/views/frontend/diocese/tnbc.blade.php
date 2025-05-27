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
                    <h1>Tnbc</h1>
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
                        <li class="active">Tnbc</li>
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
    @php
        $chunks = $table1->chunk(2);
    @endphp

    @foreach($chunks as $index => $group)
    <div class="about-area default-padding pdng1" style="background-color: {{ $index % 2 == 0 ? '#ffffff' : '#f7f7f7' }};">
        <div class="container">
            <div class="row">
                <div class="about-content content-left">
                    @foreach($group as $data)
                    <div class="col-md-6 info">
                        <div class="col-md-7 info">
                            <h4>{{ $data->position }}</h4>
                            <p>{{ $data->tagline }}</p>

                            <h4>ADDRESS</h4>
                            <p>{{ $data->address }}</p>

                            <span style="display: flex;">
                                <h4>PHONE&nbsp;</h4>
                                <p>(O){{ $data->phone }}</p> 
                            </span>

                            <span style="display: flex;">
                                <h4>FAX&nbsp;</h4>
                                <p>(O) {{ $data->fax }}</p>
                            </span>

                            <span style="display: flex;"> 
                                <h4>EMAIL ID&nbsp;</h4>
                                <p>{{ $data->email }}</p>
                            </span>

                            <span style="display: flex;">
                                <h4>WEBSITE&nbsp;</h4>
                                <p>{{ $data->website }}</p>
                            </span>                        
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset($data->image) }}" alt="Thumb">
                        </div>
                        <br>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endif



    <!-- Start Our About
    ============================================= -->

    <!-- End Our About -->

     @include('frontend.layouts.footer')


</body>
</html>
