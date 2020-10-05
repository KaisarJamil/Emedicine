
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="#"><i class="fa fa-dashboard"></i> <span>Profile</span></a>
                </li>


                <li class="submenu">
                    <a href="{{ route('change.pass') }}">
                        <i class="fa fa-medkit" aria-hidden="true"></i>
                        <span> Change Password </span></a>
                </li>

                <li class="submenu">
                    <a href="{{ route('pending.order') }}"><i class="fa fa-medkit" aria-hidden="true"></i>
                        <span> Pending Order </span></a>
                </li>

                <li class="submenu">
                    <a href="{{ route('order.history') }}"><i class="fa fa-medkit" aria-hidden="true"></i>
                        <span> Order History </span></a>
                </li>

                </li>

            </ul>
        </div>
    </div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
<li> <a href="{{route('change.pass')}}"></a> tesst</li>
