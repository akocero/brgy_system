<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-sm">
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
                        <i class="nav-icon far fa-gem"></i>
                        <p>
                            Budget Proposal
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Budget Proposal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active" data-toggle="tooltip" data-placement="top" title="Create Budget Proposal">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create BP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tooltip" data-placement="top" title="Manage Budget Proposal">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage BP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tooltip" data-placement="top" title="Consolidate Budget Proposal">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Consolidate BP</p>
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
