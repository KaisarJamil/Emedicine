<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{asset('assets/img/logo.png')}}" width="35" height="35" alt=""> <span>E-MEDICINE</span>
            </a>
        </div>
        <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
        <a id="mobile_btn" class="mobile_btn float-left" href="#"><i class="fa fa-bars"></i></a>
        <ul class="nav user-menu float-right">
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="{{ asset('assets/img/34.jpg') }}" width="30" alt="Admin">
                        <span class="status online"></span>
                    </span>
                    <span>Kaisar Jamil</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <div class="dropdown mobile-user-menu float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
            </div>
        </div>
    </div>
