<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
    
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.min.css') }}">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">    --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">   

    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/icon.jpg') }}" />
</head>

<body class="sidebar-absolute sidebar-hidden">
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('layouts.navigation')    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <!-- layouts theme setting panel -->
    @include('layouts.theme-setting-panel')  
    <!-- layouts todo list and chats -->
    @include('layouts.todo-list-and-chats')
      <!-- partial -->
    <!-- navigation panel left -->
    @include('layouts.navigation-panel')
      <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        {{ $slot }}  
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
        </div>
      </footer>
      <!-- partial -->
    </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->  
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/misc.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>