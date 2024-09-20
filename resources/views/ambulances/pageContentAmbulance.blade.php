<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('laraveladmin/vendor/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('laraveladmin/vendor/font-awesome/css/font-awesome.min.css') }}">

    <!-- Custom Font Icons CSS -->
    <link rel="stylesheet" href="{{ asset('laraveladmin/css/font.css') }}">

    <!-- Google Fonts - Muli -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" href="{{ asset('laraveladmin/css/style.default.css') }}" id="theme-stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('laraveladmin/css/custom.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('laraveladmin/img/favicon.ico') }}">

    <!-- IE Support -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Navbar -->
    @include('components.adminNavbar')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation -->
      @include('components.sidebarAdmin')
      <!-- Sidebar Navigation end -->

      <!-- Main Page Content -->
      @include('ambulances.pageContentAmbulance')
    </div>

    <!-- JavaScript Files -->
    <script src="{{ asset('laraveladmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('laraveladmin/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('laraveladmin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('laraveladmin/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('laraveladmin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('laraveladmin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('laraveladmin/js/charts-home.js') }}"></script>
    <script src="{{ asset('laraveladmin/js/front.js') }}"></script>
  </body>
</html>
