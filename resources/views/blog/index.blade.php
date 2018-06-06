@extends('blog.layouts.main')

@section('styles')
  <link rel="stylesheet" href="{{ secure_asset('vendor/toastr/css/toastr.min.css') }}">
@endsection

@section('scripts')

  <script src="{{ secure_asset('vendor/toastr/js/toastr.min.js') }}"></script>

  @if(session('info'))
      <script>
        document.getElementById('contacto').click();
        toastr.options = {
          "positionClass": "toast-bottom-full-width",
        }
        toastr.success('{{ session('info') }}');
      </script>
  @endif

  @if($errors->any()))
      <script>
        document.getElementById('contacto').click();
        toastr.options = {
          "positionClass": "toast-bottom-full-width",
        }
        toastr.error('Debes diligenciar todos los datos');
      </script>
  @endif

@endsection

@section('content')
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Acerca de GEA</h2>
            <p>
              GEA es una empresa que incursiona en el mundo de la tecnología, más específicamente en el desarrollo de páginas y aplicaciónes web y de escritorio. 
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Páginas web a la medida</a></h4>
              <p class="description">Desarrollamos tu página web a la medida de tus necesidades, mostrar los servicios que ofreces, los productos que vendes, etc</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Páginas web administrables</a></h4>
              <p class="description">Tu página web es dinámica, quiere decir que por medio de una interfaz muy intuitiva y sencilla podrás hacer cambios en su contenido</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Aplicaciónes para tus procesos</a></h4>
              <p class="description">Desarrollamos software web y de escritorio para automatizar los procesos de tu negocio, sea para llevar el control de tus ventas, gastos, etc</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Servicios</h3>
          <p class="section-description">El siguiente listado detalla los servicios que tenemos disponibles para ti</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="">Páginas web</a></h4>
              <p class="description">Desarollamos la plataforma que te muestra al mundo, le decimos al mundo quien eres o que ofreces.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Software web y escritorio</a></h4>
              <p class="description">Automatizamos tus procesos creandote software a la medida, ya sea para que lleves el control de lo que vendes o administres tu negocio.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
              <h4 class="title"><a href="">Capacitación</a></h4>
              <p class="description">No te dejamos volando, el producto final se entrega junto con una capacitación para que puedas administrar tú mismo tu página o aplicación.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contactenos</h3>
          <p class="section-description">Contáctame por medio de las redes sociales o dejando un mensaje en el siguiente formulario</p>
        </div>
      </div>

      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>San José del Guaviare<br>Guaviare, Colombia</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>geasoluciones2018@gmail.com</p>
              </div>
                <!--
              <div>
                <i class="fa fa-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>-->
            </div>

            <div class="social-links">
              <a href="https://www.facebook.com/geasoluciones2018" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <!--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>-->
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              
              <form action="{{ route('messages.store') }}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Ingresa tu nombre" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email"  value="{{ old('email') }}" class="form-control" name="email" id="email" placeholder="Tu correo electrónico" data-rule="email" data-msg="Ingresa un email válido" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject"  value="{{ old('subject') }}" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Ingresa el asunto" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" value="{{ old('message') }}" rows="5" data-rule="required" data-msg="Por favor escribe un mensaje para nosotros" placeholder="Tu mensaje"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
              </form>
            </div>
          </div>
          <script>
            toastr.success('asd');
          </script>
        </div>

      </div>
    </section><!-- #contact -->
@endsection

