<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm border-bottom-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button" onclick="toggleSidebarDocked()" id="sidebar_docker">
                <i data-feather="sidebar" width='18' height="18"></i>
            </a>
        </li>
        <li class="nav-item ml-1">
            <a class="nav-link" onclick="window.location.reload()" role="button">
                <i data-feather="refresh-cw" width='18' height="18"></i>
                {{-- {{ auth()->user()->name }} --}}
                {{-- Refresh --}}
            </a>
        </li>

        <li class="nav-item ml-1">
            <a class="nav-link" href={{ route('dashboard.index')}}>
                <i data-feather="home" width='18' height="18"></i>
                {{-- {{ auth()->user()->name }} --}}
                {{-- Refresh --}}
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
    
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i data-feather="bell" width='18' height="18"></i>
                <span class="badge badge-danger navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item ml-2">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i data-feather="user" width='18' height="18"></i>
                {{-- {{ auth()->user()->name }} --}}
                John Doe
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
