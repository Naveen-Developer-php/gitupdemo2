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
                    <h1>Educational Committee</h1>
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
                        <li class="active">Educational Committee</li>
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
                   
                <b>1.Chairman</b>
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
                <th>Name</th>
                <th>Image</th>
                <th>Position</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($table1 as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
               <td>
    <img src="{{ asset($data->image) }}" 
         alt="Image" 
         style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
</td>
                <td>{{$data->position}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    @endif
    <br>


<b>2.Office Bearers</b>
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
                <th>Image</th>
                <th>Position</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($table2 as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
               <td>
    <img src="{{ asset($data->image) }}" 
         alt="Image" 
         style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
</td>
                <td>{{$data->position}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    @endif
    <br>

   
               
<b>3.Elected Members</b>
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
                <th>Name</th>
                <th>Image</th>
                <th>Position</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($table3 as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
               <td>
    <img src="{{ asset($data->image) }}" 
         alt="Image" 
         style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
</td>
                <td>{{$data->position}}</td>
                <td>{{$data->phone}}</td>
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

