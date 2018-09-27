<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <!-- meta tags -->
      @include("layouts.partials.metas") 
      <!-- Favicon -->
      <link rel="icon" type="image/png" href="/imgs/favicon/favicon.png">
      <!-- Title -->
      <title>{{ env("APP_NAME") }}</title>
      <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="{{ mix('/css/dashboard/app.css') }}">
   </head>
   <body id="page-top">
      <div id="app">
      @include('layouts.partials.navbar-dashboard')
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav bg-light">
            <li class="nav-item">
               <a class="nav-link" href="">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="">
               <i class="fas fa-fw fa-chart-area"></i>
               <span>Charts</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="">
               <i class="fas fa-fw fa-table"></i>
               <span>Tables</span></a>
            </li>
         </ul>
         <div id="content-wrapper">
            <div class="container-fluid">
               <!-- Breadcrumbs-->
               <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href="">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Blank Page</li>
               </ol>
               <!-- Page Content -->
                <div class="content">
                    @yield("content")
                </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            @include('layouts.partials.footer-dashboard')
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      @include('layouts.partials.logout-modal')
      </div>
      <!-- Bootstrap core JavaScript-->
      <script type="text/javascript" src="{{ mix('/js/dashboard/app.js') }}"></script>
   </body>
</html>
