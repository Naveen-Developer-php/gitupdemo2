<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Diocese Of Thanjavur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugin css -->
    <link href="{{asset('public/assets/libs/fullcalendar/main.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/cal.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/assets/css/aa.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <script src="{{asset('public/assets/js/config.js')}}"></script>
        <!-- Include Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
          @include('admin.layouts.sidemenu')

        

        <!-- Start Page Content here -->
        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
              @include('admin.layouts.tobbar')
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <div class="dashboard-main-body">

        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h6 class="fw-semibold mb-0">Calendar</h6>
  <ul class="d-flex align-items-center gap-2">
    <li class="fw-medium">
      <a href="{{route('dashboard')}}" class="d-flex align-items-center gap-1 hover-text-primary">
        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
        Dashboard
      </a>
    </li>
    <li>-</li>
    <li class="fw-medium">Components / Calendar</li>
  </ul>
</div>

        <div class="row gy-4">
            <div class="col-xxl-3 col-lg-4">
                <div class="card h-100 p-0">
                    <div class="card-body p-24">
                        <button type="button" class="btn btn-primary text-sm btn-sm px-12 py-12 w-100 radius-8 d-flex align-items-center gap-2 mb-32" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <iconify-icon icon="fa6-regular:square-plus" class="icon text-lg line-height-1"></iconify-icon>
                            Add Event
                        </button>

                        <div class="mt-32">
                            @foreach($events as $data)
                            <div class="event-item d-flex align-items-center justify-content-between gap-4 pb-16 mb-16 border border-start-0 border-end-0 border-top-0">
                                <div class="">
                                    <div class="d-flex align-items-center gap-10">
                                        <span class="w-12-px h-12-px bg-warning-600 rounded-circle fw-medium"></span>
                                        <span class="text-secondary-light">{{ \Carbon\Carbon::parse($data->event_date)->format('d-m-Y') }}</span>
                                    </div>
                                    <span class="text-primary-light fw-semibold text-md mt-4">{{$data->title}}</span>
                                </div>
                                <div class="dropdown">
                                    <button type="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                                    <iconify-icon icon="entypo:dots-three-vertical" class="icon text-secondary-light"></iconify-icon> 
                                    </button>
                                    <ul class="dropdown-menu p-12 border bg-base shadow">
                                       <li>
                                            <a type="button" class="dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900 d-flex align-items-center gap-10" data-bs-toggle="modal" data-bs-target="#exampleModalView"    data-title="{{$data->title}}" 
                                            data-date="{{ \Carbon\Carbon::parse($data->event_date)->format('d-m-Y') }}" >
                                                <iconify-icon icon="hugeicons:view" class="icon text-lg line-height-1"></iconify-icon>
                                                View
                                            </a>
                                        </li>
                                         <li>
                                             <a href="{{route('delete_bishop_event',$data->id)}}" onclick="return confirm('Are you sure you want to Delete your Bisho Event?');"><button type="button" class="delete-item dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-danger-100 text-hover-danger-600 d-flex align-items-center gap-10" data-bs-toggle="modal" >
                                                <iconify-icon icon="fluent:delete-24-regular" class="icon text-lg line-height-1"></iconify-icon>
                                                Delete
                                            </button></a>
                              
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-lg-8">
                <div class="card h-100 p-0">
                    <div class="card-body p-24">
                        <div id='wrap'>
                            <div id='calendar1'></div>
                            <div style='clear:both'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Modal Add Event -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
                <div class="modal-content radius-16 bg-base">
                    <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Event</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-24">
                          <form action="{{route('add_bishop_event')}}" method="POST">
                            @csrf
                            <div class="row">   
                                <div class="col-12 mb-20">
                                    <label class="form-label fw-semibold text-primary-light text-sm mb-8">Event Title : </label>
                                    <input type="text" class="form-control radius-8" name="title" placeholder="Enter Event Title " required>
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label for="startDate" class="form-label fw-semibold text-primary-light text-sm mb-8">Event Date</label>
                                    <div class=" position-relative">
                                        <input class="form-control radius-8 bg-base" type="date" name="event_date" placeholder="03-12-2024" required>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                                  <a href="{{ route('bishop_engagement') }}" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8 inline-block text-center">
                                        Cancel
                                    </a>
                                    <button type="submit" class="btn btn-primary border border-primary-600 text-md px-24 py-12 radius-8"> 
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal View Event -->
          <div class="modal fade" id="exampleModalView" tabindex="-1" aria-labelledby="exampleModalViewLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog modal-dialog-centered">
                <div class="modal-content radius-16 bg-base">
                    <div class="modal-header py-16 px-24 border border-top-0 border-start-0 border-end-0">
                        <h1 class="modal-title fs-5" id="exampleModalViewLabel">View Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-24">
                        <div class="mb-12">
                            <span class="text-secondary-light txt-sm fw-medium">Event Title</span>
                            <h6 class="text-primary-light fw-semibold text-md mb-0 mt-4"  id="modal-title"></h6>
                        </div>
                        <div class="mb-12">
                            <span class="text-secondary-light txt-sm fw-medium">Event Date</span>
                            <h6 class="text-primary-light fw-semibold text-md mb-0 mt-4"  id="modal-date"></h6>
                        </div>
                          
                    </div>
                </div>
            </div>
        </div>
        
    </div>

            </div> <!-- content -->

            <!-- Footer Start -->
           @include('admin.layouts.footer')
            <!-- end Footer -->

        </div>
        <!-- End Page content -->
    </div>
    <!-- END wrapper -->

    <!-- App js -->
 @include('admin.layouts.script')
   
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const holidays = @json($events); // Pass the holidays to JavaScript

        $('#calendar1').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: holidays.map(holiday => ({
                title: holiday.title, // Holiday title
                start: holiday.event_date, // Holiday date
                allDay: true, // Make it an all-day event
                color: 'orange' // Optional: Customize event color
            }))
        });
    });
</script>


</body>

</html>