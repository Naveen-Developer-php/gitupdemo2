

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
                    <h1>Home For Aged</h1>
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
                        <li class="active">Home For Aged</li>
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
                    <h2>Home For Aged</h2>
                </div>
                
               <table class="styled-table">
        <thead>
            <tr>
                <th>S.NO.</th>
                <th>Name</th>
                <th>Management</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>

              @foreach($table1 as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->management}}</td>
                <td>{{$data->address}}</td>
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








