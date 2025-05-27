   <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo">
                    <a href="{{route('index')}}">
                        <img src="{{asset($logo->image)}}" class="logo" alt="Logo">
                    </a>
                </div>
                <div class="col-md-9 address-info text-right">
                    <div class="info box">
                        <ul>
                            
                            <li>
                                <div class="icon">
                                    <i class="flaticon-call-center"></i>
                                </div>
                                <div class="info">
                                    <span>Phone</span> +91 4362 231252
                                </div>
                            </li>
                           <li class="quote-btn" style="padding-left: 0px; border: 1px solid #298029;
                           border-radius: 25px;">
                            <a href="{{route('front.contact')}}">Contact Us</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border active-border logo-less small-pad navbar-sticky bootsnav">

            

            <div class="container">

               

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{asset($logo->image)}}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="{{route('index')}}" class=" active">Home</a>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Diocese & Bishop</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Diocese</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('front.about')}}">About</a></li>
                                                    <li><a href="{{route('front.history')}}">History</a></li>
                                                    <li><a href="{{route('front.vocation')}}">Vocations</a></li>
                                                    <li><a href="{{route('front.regulation')}}">Regulations</a></li>
                                                    <li><a href="{{route('front.pious_association')}}">Pious Association</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Bishop</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('front.bishop_profile')}}">Bishop's Profile</a></li>
                                                    <!-- <li><a href="bishop-engagement.html">Bishop's Engagements</a></li> -->
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Conference</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('front.fabc')}}">FABC</a></li>
                                                    <li><a href="{{route('front.cbci')}}">CBCI</a></li>
                                                    <li><a href="{{route('front.ccbi')}}">CCBI</a></li>
                                                    <li><a href="{{route('front.tnbc')}}">TNBC</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Parish & Priests</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Parishes</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('front.vicariate')}}">vicariates</a></li>
                                                    <li><a href="{{route('front.parish')}}">Parish</a></li>
                                                    <li><a href="{{route('front.parish_statistis')}}">Parish Statistics</a></li>
                                                    <li><a href="{{route('front.shrine')}}">Shrine</a></li>
                                                    <li><a href="{{route('front.area')}}">Areas Of Church Mission</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Priests</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <!-- <li><a href="priest-profile.html">Priests Profile</a></li>
                                                    <li><a href="men-religious.html">Men Religious</a></li> -->
                                                     <li><a href="{{route('front.parish_priest')}}">Parish Priests</a></li>
                                                    <li><a href="{{route('front.retired_priest')}}">Retired Priests</a></li>
                                                    <li><a href="{{route('front.obituary')}}">Obituary</a></li>
                                                      <li><a href="{{route('front.religious_priest')}}">Religious Priests</a></li>
                                                    <li><a href="{{route('front.religious_brother')}}">Religious Brothers</a></li>
                                                    <li><a href="{{route('front.religious_sister')}}">Religious Sisters</a></li>
                                                    <li><a href="{{route('front.religious_congregation')}}"> Religious Congregations</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Administration</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Committee</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('front.diocesan_curia')}}">Diocesan Curia</a></li>
                                                    <li><a href="{{route('front.college_consulators')}}">College Of Consulators</a></li>
                                                    <li><a href="{{route('front.diocesan_senate')}}">Diocesan Senate</a></li>
                                                    <li><a href="{{route('front.finance_committe')}}">Finance Committee</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">...</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('front.pastoral_commissions')}}">Pastoral Commissions</a></li>
                                                    <li><a href="{{route('front.diocesan_society')}}">Diocesan Society</a></li>
                                                    <li><a href="{{route('front.project_commitee')}}">Project Committee</a></li>
                                                    <li><a href="{{route('front.educational_committee')}}">Educational Committee</a></li>
                                                    <li><a href="{{route('front.formation_council')}}">Formation Council</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">...</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('front.social_service')}}">Social Service</a></li>
                                                    <li><a href="{{route('front.catholic_centre')}}">Catholic Centre</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                       
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Organization</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Schools</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('front.diocesan_school')}}">Diocesan Schools</a></li>
                                                    <li><a href="{{route('front.religious_school')}}">Religious Schools</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Colleges</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                     <li><a href="{{route('front.diocesan_college')}}">Diocesan Colleges</a></li>
                                                    <li><a href="{{route('front.religious_college')}}">Religious Colleges</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <!-- <div class="col-menu col-md-3">
                                            <h6 class="title">Charitable</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="hospitals.html">Hospitals</a></li>
                                                    <li><a href="home-for-aged.html">Home For Aged</a></li>
                                                    <li><a href="orphanages.html">Orphanages</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Other Institutions</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('front.transfer_list')}}">Transfer List</a></li>
                        
                        <li>
                            <a href="{{route('front.events')}}">News & Events</a>
                        </li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
