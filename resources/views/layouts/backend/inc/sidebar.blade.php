<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-medkit" aria-hidden="true"></i>
                        <span> Medicine </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.add.medicine') }}">Add Medicine</a></li>
                        <li><a href="{{ route('admin.medicine.list') }}">Medicine List</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-medkit" aria-hidden="true"></i>
                        <span> Category </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.add.category') }}">Add Category</a></li>
                        <li><a href="{{ route('admin.category.list') }}">Category List</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-building" aria-hidden="true"></i>
                        <span> Company </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.add.company') }}">Add Company</a></li>
                        <li><a href="{{ route('admin.company.list') }}">Company List</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i><span>Ordered Medicine </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.pending') }}">Pending Orders</a></li>
                        <li><a href="{{ route('admin.delivered') }}">Delivered Order List</a></li>
                    </ul>
                </li>

                </li>

            </ul>
        </div>
    </div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
