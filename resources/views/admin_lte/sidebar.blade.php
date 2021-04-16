<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-teal elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-sm">
        {{-- <img src="{{ asset('images/dap_logo.png')}}" alt="Dap Logo" class="brand-image" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">FMIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{-- <i class="nav-icon far fa-file-pdf"></i> --}}
                        <i data-feather="home" class="nav-icon" width='19' height="19"></i>
                        <p>
                            Home
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                            <i data-feather="chevron-left" class="right" width='16' height="16"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.index') }}" class="nav-link">
                                <i data-feather="bar-chart-2" class="nav-icon" width='18' height="18"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{-- <i class="nav-icon far fa-file-alt"></i> --}}
                        <i data-feather="database" class="nav-icon" width='18' height="18"></i>
                        <p>
                            Data Entry
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                            <i data-feather="chevron-left" class="right" width='16' height="16"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('residents.index') }}" class="nav-link">
                                <i data-feather="circle" class="nav-icon" width='18' height="18"></i>
                                <p>Residents</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('households.index') }}" class="nav-link">
                                <i data-feather="circle" class="nav-icon" width='18' height="18"></i>
                                <p>Households</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('businesses.index') }}" class="nav-link">
                                <i data-feather="circle" class="nav-icon" width='18' height="18"></i>
                                <p>Businesses</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('officials.index') }}" class="nav-link">
                                <i data-feather="circle" class="nav-icon" width='18' height="18"></i>
                                <p>Officials</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('resolutions.index') }}" class="nav-link">
                                <i data-feather="circle" class="nav-icon" width='18' height="18"></i>
                                <p>Resolutions</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('blotters.index') }}" class="nav-link">
                                {{-- <i class="far fa-circle nav-icon"></i> --}}
                                <i data-feather="circle" class="nav-icon" width='18' height="18"></i>
                                <p>Blotters</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('barangay_cases.index') }}" class="nav-link">
                                {{-- <i class="far fa-circle nav-icon"></i> --}}
                                <i data-feather="circle" class="nav-icon" width='18' height="18"></i>
                                <p>Cases / Complains</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{-- <i class="nav-icon far fa-file-word"></i> --}}
                        <i data-feather="pie-chart" class="nav-icon" width='18' height="18"></i>
                        <p>
                            Reports
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                            <i data-feather="chevron-left" class="right" width='16' height="16"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Residents</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Households</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Businesses</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{-- <i class="nav-icon far fa-file-pdf"></i> --}}
                        <i data-feather="award" class="nav-icon" width='22' height="22"></i>
                        <p>
                            Certificates
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                            <i data-feather="chevron-left" class="right" width='16' height="16"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Resident</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cert. of Residency</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Business Permit</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{-- <i class="nav-icon far fa-file-pdf"></i> --}}
                        <i data-feather="settings" class="nav-icon" width='19' height="19"></i>
                        <p>
                            Settings
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                            <i data-feather="chevron-left" class="right" width='16' height="16"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Residents</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Households</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Businesses</p>
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
