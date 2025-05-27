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
                    <h1>Vicariates</h1>
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
                        <li class="active">Vicariates</li>
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
    <!-- Start Our About
    ============================================= -->
    <div class="about-area default-padding pdng1">
        <div class="container">
            <div class="row">
                <div style="text-align: center;">
                    <h2>Vicariates</h2>
                </div>
                
               <table class="styled-table">
        <thead>
            <tr>
                <th>S.NO.</th>
                <th>Vicariates</th>
                <th>No Of Parishes</th>
            </tr>
        </thead>
        <tbody>

              @foreach($table1 as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->vicariates}}</td>
                <td> {{$data->no_of_parish}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
            </div>

        </div>
    </div>
    <!-- End Our About -->
        @endif    

   
    @include('frontend.layouts.footer')

</body>
</html>
