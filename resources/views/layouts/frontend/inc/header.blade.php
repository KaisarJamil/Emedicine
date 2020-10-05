<div id="canvas">
    <div id="box_wrapper">
        <!-- template sections -->
        <section class="page_topline ds table_section table_section_lg section_padding_top_15 section_padding_bottom_15 columns_margin_0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left hidden-xs">
                        <div class="inline-content big-spacing">
                            <div class="page_social"> <a class="fa fa-facebook" href="#" title="Facebook"></a> <a class="fa fa-twitter" href="#" title="Twitter"></a> <a class="fa fa-google" href="#" title="Google Plus"></a> <a class="fa fa-linkedin" href="#" title="Linkedin"></a> <a class="fa fa-youtube" href="#" title="Youtube"></a> </div> <span class="xs-block">
						<i class="fa fa-clock-o highlight3 rightpadding_5" aria-hidden="true"></i>
						Mon-Fri: 9:00-19:00; Sat: 10:00-17:00; Sun: Closed
					</span> </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <div id="topline-animation-wrap">
                            <div id="topline-hide" class="inline-content big-spacing"> <span class="hidden-xs">
							<i class="fa fa-map-marker highlight3 rightpadding_5" aria-hidden="true"></i>
							Green Road,Dhaka,Bangladesh
						</span> <span class="greylinks hidden-xs">
							<i class="fa fa-pencil highlight3 rightpadding_5" aria-hidden="true"></i>
							<a href="mailto:diversify@example.com">info@emedicine.com</a>
						</span>
                                <div class="xs-block">
                                    <ul class="inline-list menu greylinks">
                                        <li> <a href="#">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li> <a href="#0">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a> </li>
                                        <li class="dropdown"> <a id="search-show" href="./">
                                                <i class="fa fa-search"></i>
                                            </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="topline-show" class="widget widget_search">
                                <form method="GET" class=" inline-form" action="{{ route("search") }}">
                                    @csrf
                                    @method('GET')
                                    <div class="form-group-wrap">
                                        <div class="form-group"> <label class="sr-only" for="topline-widget-search">Search for:</label>
                                            <input id="topline-widget-search" type="text" value="" name="search" class="form-control" placeholder="Enter Keyword...">
                                            <a href="./" id="search-close">
                                                <i class="fa fa-close"></i>
                                            </a> </div> <button type="submit" class="theme_button no_bg_button color1">ok</button> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <header class="page_header header_white toggler_xs_right columns_margin_0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 display_table">
                        <div class="header_left_logo display_table_cell"> <a href="./" class="logo logo_with_text">
                                <img src="{{ asset('frontend/images/logo.jpg')}}" alt="">
                                <span class="logo_text">
                                    E MEDICINE
                                    <small class="highlight4">Served 24 Hours to Yor Door</small>
                                </span>
                            </a> </div>
                        <div class="header_mainmenu display_table_cell text-center">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    <li class="active"> <a href="{{ route('home') }}">Home</a>
                                    </li>

                                    <li> <a href="javascript:void(0);">Medicines</a>
                                        <ul>
                                            @foreach(App\Company::all() as $company)
                                            <li> <a href="{{route('company',$company->id)}}">{{ $company->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('cart') }}">Cart</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('about') }}">About</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>

                                    @if (Route::has('login'))
                                    <li>
                                        <a>My Account</a>
                                        @auth
                                        <ul>
                                            @if(Auth::user()->role->id ==1)
                                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                            <li><a href="javascript:void(0);" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                            @else
                                            <li><a href="{{ route('patient.profile') }}">Profile</a></li>
                                            <li><a href="javascript:void(0);" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                            @endif

                                            @else
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                            @endif
                                            @endauth
                                        </ul>
                                    </li>
                                    @endif

                                </ul>
                            </nav>
                            <!-- eof main nav -->
                            <!-- header toggler --><span class="toggle_menu"><span></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
