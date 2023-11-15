<body>
    <div id="pageWrapper">
    <div class="phStickyWrap">
        <div class="headerFixer">
            <header id="pageHeader" class="bg-white p-0">
                <div class="container-fluid bg-info p-0">
                    <div class="row gx-0 d-none d-lg-flex">
                        <div class="col-lg-7 px-15 text-left">
                            <div class="d-inline-flex align-items-center py-2 mr-4">
                                <small class="fa fa-map-marker-alt text-white mr-2" aria-hidden="true"></small>
                                <small class="text-white">123 Street, New York, USA</small>
                            </div>
                            <div class="d-inline-flex align-items-center py-2">
                                <small class="far fa-clock text-white mr-2" aria-hidden="true"></small>
                                <small class="text-white">Mon - Fri : 09.00 AM - 09.00 PM</small>
                            </div>
                        </div>
                        <div class="col-lg-5 px-15 text-right">
                            <div class="d-inline-flex align-items-center py-2 mr-4">
                                <small class="fa fa-phone text-white mr-2" aria-hidden="true"></small>
                                <small class="text-white">+92-305-8517205</small>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                <a class="text-white mr-2" href=""><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                <a class="text-white mr-2" href=""><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a class="text-white mr-2" href=""><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                <a class="text-white mr-2" href=""><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container clearfix d-flex">
                    <div class="logo">
                        <a href="#">
                        <!-- <img src="assets/images/logos/auction-sheet-check.com.png" class="img-fluid" alt="Autoglow Carwash"> -->
                        <img src="{{ asset('assets/images/C-new-logo.png') }}" class="img-fluid" alt="Autoglow Carwash" style="max-width: 26%;">
                        </a>
                    </div>
                    <nav id="pageNav" class="navbar navbar-expand-lg navbar-light justify-content-end justify-content-lg-start position-static m-0">
                        <div class="collapse navbar-collapse pageMainNavCollapse" id="pageMainNavCollapse">
                            <ul class="ml-auto navbar-nav mainNavigation fontAlter fwMedium pl-lg-1 pl-xl-3 pl-xlwd-9 pl-xxl-18">
                                <li class="nav-item dropdown ddohOpener">
                                    <a class="nav-link" href="#" role="button" aria-haspopup="true">Home</a>
                                </li>
                                
                              
                                <li class="nav-item dropdown ddohOpener">
                                    <a class="nav-link" href="{{ url('feedback') }}" role="button" aria-haspopup="true">Feedback</a>
                                </li>
                             
                                <div class="hdrBtn-med">
                                @auth
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btnThemeAlt border-0 p-0 ml-lg-1 ml-xl-3 ml-xxl-6 btnHd login-btn" data-hover="Logout">
                                            <span class="d-block btnText">Logout</span>
                                        </button>
                                        <a type="submit" href="{{ route('member.index') }}" class="btn btnThemeAlt border-0 p-0 ml-lg-1 ml-xl-3 ml-xxl-6 btnHd login-btn" data-hover="My Account">
                                            <span class="d-block btnText">My Account</span>
                                        </a>
                                    </form>
                                  
                                @else
                                <a href="{{ route('userlogin.form') }}" class="btn btnThemeAlt border-0 p-0 ml-lg-1 ml-xl-3 ml-xxl-6 btnHd login-btn" data-hover="Login">
                                        <span class="d-block btnText">Login</span>
                                    </a>
                                    <a href="{{ route('register.form') }}" class="btn btnThemeAlt border-0 p-0 ml-lg-1 ml-xl-3 ml-xxl-6 btnHd login-btn" data-hover="Sign Up">
                                        <span class="d-block btnText">Sign Up</span>
                                    </a>
                                @endauth

                                   
                                </div>
                            </ul>
                        </div>
                        <div class="hdActionsWrap flex-shrink-0 d-flex justify-content-end align-items-center">
                        

                            <button class="navbar-toggler pgNaveOpener border-0 ml-3 position-relative" type="button" data-toggle="collapse" data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="hdrBtn-large">
                                @auth
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btnThemeAlt border-0 p-0 ml-lg-1 ml-xl-3 ml-xxl-6 btnHd logout-btn" data-hover="Logout">
                                            <span class="d-block btnText">Logout</span>
                                        </button>

                                      
                                    </form>
                                    <!-- <button type="submit" class="btn btnThemeAlt border-0 p-0 ml-lg-1 ml-xl-3 ml-xxl-6 btnHd logout-btn" data-hover="My Account">
                                            <span class="d-block btnText">My Account</span>
                                        </button> -->
                                        <a type="submit" href="{{ route('member.index') }}" class="btn btnThemeAlt border-0 p-0 ml-lg-1 ml-xl-3 ml-xxl-6 btnHd login-btn" data-hover="My Account">
                                            <span class="d-block btnText">My Account</span>
                                        </a>

                                @else
                                <a href="{{ route('userlogin.form') }}" class="btn btnThemeAlt border-0 p-0 ml-lg-1 ml-xl-3 ml-xxl-6 btnHd login-btn" data-hover="Login">
                                <span class="d-block btnText">Login</span>
                                </a>
                                <a href="{{ route('register.form') }}" class="btn btnThemeAlt border-0 p-0 ml-lg-1 ml-xl-3 ml-xxl-6 btnHd login-btn" data-hover="Sign Up">
                                <span class="d-block btnText">Sign Up</span>
                                </a>
                                @endauth
                               
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
    </div>