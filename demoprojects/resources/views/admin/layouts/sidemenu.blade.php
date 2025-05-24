 <div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="index.html" class="logo-light">
                    <img src="{{asset('public/assets/images/logo-light.png')}}" alt="logo" class="logo-lg" height="70">
                    <img src="{{asset('public/assets/images/logo-sm.png')}}" alt="small logo" class="logo-sm" height="70">
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo-dark">
                    <img src="{{asset('public/assets/images/logo-dark.png')}}" alt="dark logo" class="logo-lg" height="70">
                    <img src="{{asset('public/assets/images/logo-sm.png')}}" alt="small logo" class="logo-sm" height="70">
                </a>
            </div>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="app-menu">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a href="{{route('dashboard')}}" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                            <span class="menu-text"> Dashboards </span>
                        </a>
                    </li>
                   
                    <li class="menu-item">
                        <a href="#menuuExpages" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text"> Diocese </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpages">
                            <ul class="sub-menu">
                                
                                <li class="menu-item">
                                    <a href="{{route('about')}}" class="menu-link">
                                        <span class="menu-text">About</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('history')}}" class="menu-link">
                                        <span class="menu-text">History</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('vocation')}}" class="menu-link">
                                        <span class="menu-text">Vocations</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('regulation')}}" class="menu-link">
                                        <span class="menu-text">Regulations</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('pious_association')}}" class="menu-link">
                                        <span class="menu-text">Pious Association</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuuExpagesa" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text"> Bishop </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesa">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="{{route('bishop_profile')}}" class="menu-link">
                                        <span class="menu-text"> Bishop's Profile</span>
                                    </a>
                                </li>
                                <!-- <li class="menu-item">
                                    <a href="bishop-engagement.html" class="menu-link">
                                        <span class="menu-text"> Bishop's Engagements</span>
                                    </a>
                                </li> -->
                                
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuuExpagess" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">Conference</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagess">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="{{route('fabc')}}" class="menu-link">
                                        <span class="menu-text"> FABC</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('cbci')}}" class="menu-link">
                                        <span class="menu-text">CBCI</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('ccbi')}}" class="menu-link">
                                        <span class="menu-text">CCBI</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('tnbc')}}" class="menu-link">
                                        <span class="menu-text">TNBC</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuuExpagesd" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">Parishes</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesd">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="{{route('vicariates')}}" class="menu-link">
                                        <span class="menu-text">Vicariates</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('parish')}}" class="menu-link">
                                        <span class="menu-text">Parish</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('parishstatistis')}}" class="menu-link">
                                        <span class="menu-text">Parish Statistics</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('shrine')}}" class="menu-link">
                                        <span class="menu-text">Shrine</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('area')}}" class="menu-link">
                                        <span class="menu-text">Areas Of Church Mission</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuuExpagesf" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">Priests</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesf">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="{{route('priest_profile')}}" class="menu-link">
                                        <span class="menu-text">Priests Profile</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#0" class="menu-link">
                                        <span class="menu-text">Men Religious</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuuExpagesg" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">Diocesan Priests</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesg">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="{{route('parish_priest')}}" class="menu-link">
                                        <span class="menu-text">Parish Priests</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('reteried_priest')}}" class="menu-link">
                                        <span class="menu-text">Retired Priests</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('obituary')}}" class="menu-link">
                                        <span class="menu-text">Obituary</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuuExpagesh" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">Religious Priests</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesh">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="#0" class="menu-link">
                                        <span class="menu-text">Religious Priests</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#0" class="menu-link">
                                        <span class="menu-text">Religious Brothers</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#0" class="menu-link">
                                        <span class="menu-text">Religious Sisters</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#0" class="menu-link">
                                        <span class="menu-text">Religious Congregations</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuuExpagesj" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">Committee</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesj">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="{{route('diocesan_curia')}}" class="menu-link">
                                        <span class="menu-text">Diocesan Curia</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('college_consulators')}}" class="menu-link">
                                        <span class="menu-text">College Of Consulators</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#0" class="menu-link">
                                        <span class="menu-text">Diocesan Senate</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('finance_committe')}}" class="menu-link">
                                        <span class="menu-text">Finance Committee</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuuExpagesk" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">....</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesk">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="{{route('pastoral_commission')}}" class="menu-link">
                                        <span class="menu-text">Pastoral Commissions</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('diocesan_society')}}" class="menu-link">
                                        <span class="menu-text">Diocesan Society</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#0.html" class="menu-link">
                                        <span class="menu-text">Project Committee</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('educational_committe')}}" class="menu-link">
                                        <span class="menu-text">Educational Committee</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#0" class="menu-link">
                                        <span class="menu-text">Formation Council</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuuExpagesl" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">....</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesl">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="{{route('social_service')}}" class="menu-link">
                                        <span class="menu-text">Social Service</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#0" class="menu-link">
                                        <span class="menu-text">Catholic Centre</span>
                                    </a>
                                </li>
                               

                            </ul>
                        </div>
                    </li>

                    <!-- <li class="menu-item">
                        <a href="#menuuExpagesz" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">Schools</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesz">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="diocesan-schools.html" class="menu-link">
                                        <span class="menu-text">Diocesan Schools</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="religious-schools.html" class="menu-link">
                                        <span class="menu-text">Religious Schools</span>
                                    </a>
                                </li>
                               

                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuuExpagesx" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">Colleges</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesx">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="diocesan-colleges.html" class="menu-link">
                                        <span class="menu-text">Diocesan Colleges</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="religious-colleges.html" class="menu-link">
                                        <span class="menu-text">Religious Colleges</span>
                                    </a>
                                </li>
                               

                            </ul>
                        </div>
                    </li> -->

                    <!-- <li class="menu-item">
                        <a href="#menuuExpagesc" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-file-cloud-outline"></i></span>
                            <span class="menu-text">Charitable</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuuExpagesc">
                            <ul class="sub-menu">
                                
                                
                                
                                <li class="menu-item">
                                    <a href="hospitals.html" class="menu-link">
                                        <span class="menu-text">Hospitals</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="home-for-aged.html" class="menu-link">
                                        <span class="menu-text">Home For Aged</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="#0" class="menu-link">
                                        <span class="menu-text">Orphanages</span>
                                    </a>
                                </li>
                               

                            </ul>
                        </div>
                    </li>
                    
                    <li class="menu-item">
                        <a href="#0"class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-contacts"></i></span>
                            <span class="menu-text"> Transfer List</span>
                            
                        </a>
                    </li> -->
                     <li class="menu-item">
                        <a href="{{route('event')}}"class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi-basketball-hoop"></i></span>
                            <span class="menu-text"> News & Events</span>
                            
                        </a>
                    </li>
                 
                     
                    <li class="menu-item">
                        <a href="#menuExpaages" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="mdi mdi mdi-page-next"></i></span>
                            <span class="menu-text"> Frontend Settings</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuExpaages">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="{{route('logo')}}" class="menu-link">
                                        <span class="menu-text">Logo</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('banner')}}" class="menu-link">
                                        <span class="menu-text">Banner</span>
                                    </a>
                                </li>
                                
                                <li class="menu-item">
                                    <a href="{{route('privacy')}}" class="menu-link">
                                        <span class="menu-text">Privacy Policy</span>
                                    </a>
                                </li>
                               
                                <li class="menu-item">
                                    <a href="{{route('terms')}}" class="menu-link">
                                        <span class="menu-text">Terms & Conditions</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
