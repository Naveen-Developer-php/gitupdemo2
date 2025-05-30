<!DOCTYPE html>
<html lang="en">

  @include('frontend.layouts.head')

<body>
 <div class="se-pre-con"></div>
       @include('frontend.layouts.topheader')

    <!-- Start Page Title 
    ============================================= -->
    <div class="page-title-area shadow1 dark1 bg-fixed text-center text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Bishops Calendar</h1>
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
                        <li class="active">Bishops Calendar</li>
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
             <div class="row">
                <div class="calendar">
      <div class="calendar-header">
        <button id="prev">Prev</button>
        <h2 id="month-year"></h2>
        <button id="next">Next</button>
      </div>
      
      <div class="calendar-days">
        <div class="day-name">Sun</div>
        <div class="day-name">Mon</div>
        <div class="day-name">Tue</div>
        <div class="day-name">Wed</div>
        <div class="day-name">Thu</div>
        <div class="day-name">Fri</div>
        <div class="day-name">Sat</div>
      </div>

      <div class="calendar-body" id="calendar-body">
        <!-- Calendar days will go here -->
      </div>
    </div>

    <div class="event-view">
      <h3>Events for <span id="selected-date">Select a date</span></h3>
      <ul id="event-list">
        <!-- Event list will be displayed here -->
      </ul>
    </div>
               
            </div>

        </div>
    </div>
    <!-- End Our About -->

   
        @include('frontend.layouts.footer')
<script>
    const events = @json($bishop->groupBy('event_date')->map(function ($group) {
        return $group->pluck('title');
    }));
</script>
    <script>
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();



function renderCalendar() {
  const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
  const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);
  
  const daysInMonth = lastDayOfMonth.getDate();
  const firstDayOfWeek = firstDayOfMonth.getDay();
  
  const calendarBody = document.getElementById("calendar-body");
  calendarBody.innerHTML = "";
  
  // Display the month and year
  document.getElementById("month-year").innerText = `${monthNames[currentMonth]} ${currentYear}`;
  
  // Empty days before the first day of the month
  for (let i = 0; i < firstDayOfWeek; i++) {
    const emptyDay = document.createElement("div");
    calendarBody.appendChild(emptyDay);
  }
  
  // Create the calendar days
  for (let day = 1; day <= daysInMonth; day++) {
    const dayElement = document.createElement("div");
    dayElement.classList.add("day");
    dayElement.innerText = day;
    
    const eventDate = `${currentYear}-${(currentMonth + 1).toString().padStart(2, "0")}-${day.toString().padStart(2, "0")}`;
    if (events[eventDate]) {
      const eventMarker = document.createElement("div");
      eventMarker.classList.add("event");
      dayElement.appendChild(eventMarker);
    }

    // Event click functionality
    dayElement.addEventListener("click", () => showEvents(eventDate));

    calendarBody.appendChild(dayElement);
  }
}

function showEvents(date) {
  const selectedDate = document.getElementById("selected-date");
  const eventList = document.getElementById("event-list");
  selectedDate.innerText = date;

  // Clear the event list
  eventList.innerHTML = "";

  // Display events for the clicked date
  if (events[date]) {
    events[date].forEach(event => {
      const listItem = document.createElement("li");
      listItem.classList.add("event-list-item");
      listItem.innerText = event;
      eventList.appendChild(listItem);
    });
  } else {
    const noEventItem = document.createElement("li");
    noEventItem.innerText = "No events for this date.";
    eventList.appendChild(noEventItem);
  }
}

document.getElementById("prev").addEventListener("click", () => {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  renderCalendar();
});

document.getElementById("next").addEventListener("click", () => {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  renderCalendar();
});

// Initial render
renderCalendar();

    </script>

</body>
</html>
