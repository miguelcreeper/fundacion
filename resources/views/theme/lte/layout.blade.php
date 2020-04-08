<!DOCTYPE html>
<html lang="en">
<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('FUTGART','FUTGART')</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset("assets/$theme/css/app.min.css")}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset("assets/$theme/css/style.css")}}">
  <link rel="stylesheet" href="{{asset("assets/$theme/css/components.css")}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset("assets/$theme/css/custom.css")}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset("assets/img/logo.png")}}" />

  @yield('styles')
</head>
<!-- Inicio Header -->
@include("theme/$theme/header")
<!-- Fin Header -->
<!-- Inicio Aside -->
@include("theme/$theme/aside")
<!-- Fin Aside -->
<div class="main-content">
  <section class="section">
     @yield('contenido')
  </section>
  <!-- /.content -->
</div>
<!--Inicio footer -->
@include("theme/$theme/footer")
<!--Fin footer-->


  <!-- General JS Scripts -->
  <script src="{{asset("assets/$theme/js/app.min.js")}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset("assets/$theme/bundles/apexcharts/apexcharts.min.js")}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset("assets/$theme/js/page/index.js")}}"></script>
  <!-- Template JS File -->
  <script src="{{asset("assets/$theme/js/scripts.js")}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset("assets/$theme/js/custom.js")}}"></script>


  @yield('scripts')

</body>
<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>