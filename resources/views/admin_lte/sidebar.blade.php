<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-sm">
        {{-- <img src="{{ asset('images/dap_logo.png')}}" alt="Dap Logo" class="brand-image" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">FMIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat " data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-chart-bar"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-folder"></i>
                        <p>
                            Data Entry
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('residents.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Residents</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('households.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Households</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('officials.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Officials</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('barangay_cases.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cases & Complains</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('blotters.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blotters</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('resolutions.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Resolutions</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('businesses.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Businesses</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logos & Images</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
