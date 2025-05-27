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
                    <h1>Religious Schools</h1>
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
                        <li class="active">Religious Schools</li>
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
                <div class="services-info col-md-12">
                   
                <b>1.Primary School</b>
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
                <table class="styled-table">
        <thead>
            <tr>
                <th>S.NO.</th>
                <th>School Name</th>
                <th>Diocese Management Count</th>
                <th>Religious Management Count</th>
                <th>Total Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach($table1 as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->school}}</td>
                <td>{{$data->diocese_count}}</td>
                <td>{{$data->religious_count}}</td>
                <td>{{$data->total}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    @endif
    <br>


<b>2.Middle School</b>
 @if($table2->isEmpty())
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
                       <table class="styled-table">
       <thead>
            <tr>
                <th>S.NO.</th>
                <th>Name</th>
                <th>Parish</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($table2 as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->parish}}</td>
                <td>{{$data->address}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    @endif
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Services Single -->

   
     @include('frontend.layouts.footer')

</body>
</html>


