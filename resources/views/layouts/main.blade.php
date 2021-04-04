
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | Brgy IS v2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
{{-- Navbar Start --}}
  @include('admin_lte.navbar')
{{-- Navbar End --}}
{{-- Sidebar Start --}}
  @include('admin_lte.sidebar')
  {{-- Sidebar End --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin_lte.content_header')
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Right Control Sidebar -->
  @include('admin_lte.right_sidebar')
  <!-- /.Right control-sidebar -->

  <!-- Main Footer -->
  @include('admin_lte.footer')
</div>
<!-- ./wrapper -->


<script src="/js/app.js"></script>
<script>
  checkIfSidebarIsDocked();
  $(function () {
      $('[data-toggle="tooltip"]').tooltip()
      
      checkActiveLinks();
  });


  function checkActiveLinks() {
    
      var navlinks = document.querySelectorAll('.nav-treeview .nav-link');
      var url      = window.location.href;    
      navlinks.forEach(link => {
        if(url.includes(link.href )){
          // console.log(link.href);
          link.parentElement.parentElement.parentElement.classList.add('menu-open');
          link.parentElement.parentElement.parentElement.children[0].classList.add('active');
          link.classList.add('active');
        }else{
          link.classList.remove('active');
        }
      });
  }

  function checkIfSidebarIsDocked(){
    localStorage.getItem("sidebar") ? $('body').addClass('sidebar-collapse') : $('body').removeClass('sidebar-collapse');
  }


  function toggleSidebarDocked(){
    localStorage.getItem("sidebar") ? localStorage.removeItem('sidebar') : localStorage.setItem("sidebar", "collapse");
  }

  
</script>
@yield('scripts')
</body>
</html>
