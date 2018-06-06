<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GEA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ secure_asset('page/img/favicon.png') }}" rel="icon">
  <link href="{{ secure_asset('page/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ secure_asset('page/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ secure_asset('page/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('page/lib/animate/animate.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ secure_asset('page/css/style.css') }}" rel="stylesheet">
  @yield('styles')

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="{{ secure_asset('page/img/LOGO.png') }}" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Acerca de</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a id="contacto" href="#contact">Contacto</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Bienvenido a GEA</h1>
      <h2>Una empresa de desarrollo que te trae soluciones de software</h2>
      <a href="#about" class="btn-get-started">Empezar</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    @yield('content')

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ secure_asset('page/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ secure_asset('page/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ secure_asset('page/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ secure_asset('page/lib/easing/easing.min.js') }}"></script>
  <script src="{{ secure_asset('page/lib/wow/wow.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="{{ secure_asset('page/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ secure_asset('page/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ secure_asset('page/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ secure_asset('page/lib/superfish/superfish.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ secure_asset('page/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ secure_asset('page/js/main.js') }}"></script>
  @yield('scripts')

</body>
</html>
