@extends('layouts.app')

@section('slider')
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade my-5" data-mdb-ride="carousel">
    <ol class="carousel-indicators">
      <li
        data-mdb-target="#carouselExampleIndicators"
        data-mdb-slide-to="0"
        class="active"
      ></li>
      <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1"></li>
      <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2"></li>
      <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="{{ asset('img/slider/1.jpeg') }}"
          class="d-block w-100"
          alt="..."
        />
      </div>
      <div class="carousel-item">
        <img
          src="{{ asset('img/slider/2.jpeg') }}"
          class="d-block w-100"
          alt="..."
        />
      </div>
      <div class="carousel-item">
        <img
          src="{{ asset('img/slider/3.jpeg') }}"
          class="d-block w-100"
          alt="..."
        />
      </div>
      <div class="carousel-item">
        <img
          src="{{ asset('img/slider/4.jpeg') }}"
          class="d-block w-100"
          alt="..."
        />
      </div>
    </div>
    <a
      class="carousel-control-prev"
      href="#carouselExampleIndicators"
      role="button"
      data-mdb-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      href="#carouselExampleIndicators"
      role="button"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
@endsection

@section('contenido')
  <div class="container">
    {{-- nosotros --}}
    <section>
      @if(Session::has('mensajeContacto'))
      <div class="alert alert-primary" role="alert">
        {{ Session::get('mensajeContacto')}}
      </div>
      @endif

      <div class="row">
        <div class="col-md-6 gx-5 mb-4">
          <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
            <div class="ratio ratio-16x9">
              <iframe
                src="https://www.youtube.com/embed/333pv9r9myQ"
                title="YouTube video"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>

        <div class="col-md-6 gx-5 mb-4">
          <h4><strong>{{ __('Ciencia, Tecnología e Ingeniería') }}</strong></h4>
          <p class="text-muted">
            {{ __('Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.') }}
          </p>
          <p>
            <strong>
            {{ __('Hablemos de tu proyecto atención 24/7') }}
          </strong>
          </p>
          <p class="text-muted">
            {{ __('Utilizamos tecnologías, lenguajes de programación y frameworks de alto rendimiento para construir de manera rápida y eficiente las más innovadoras soluciones para el mundo y nuestros clientes.') }}
          </p>

        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
          {{ __('Acerca de nosotros') }}
        </button>
        <button type="button" class="btn btn-outline-primary" data-mdb-toggle="modal" data-mdb-target="#modalEscribenos">
          {{ __('Escríbenos') }}
        </button>
        <hr>
        {{-- boton compartir de facebook --}}
        <div class="fb-share-button" data-href="https://persontechnology.com/" data-layout="button" data-size="large">
          <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpersontechnology.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
            {{ __('Compartir') }}
          </a>
        </div>
        </div>
      </div>
    </section>
    {{-- nosotros --}}

    <hr class="my-5" />

    {{-- servicios --}}
    <section class="text-center">
      <h4 class="mb-5"><strong>{{ __('Nuestros servicios') }}</strong></h4>

      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img
                src="{{ asset('img/servicios/electronica.jpg') }}"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(1, 162, 255, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">
                {{ __('Diseño y fabricación de productos electrónicos') }}
              </h5>
              <p class="card-text">
                {{ __('Somos especialistas en diseño y fabricación de soluciones electrónicas para empresas, desde circuitos impresos hasta productos completos a medida, incorporando elementos electrónicos y electromecánicos, aportando siempre una visión innovadora, de calidad y orientada a mejorar la eficiencia y los resultados.') }}
              </p>
              
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img
                src="{{ asset('img/servicios/software.jpg') }}"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(1, 162, 255, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">
                {{ __('Desarrollo de software') }}
              </h5>
              <p class="card-text text-justify">
                {{ __('Desarrollamos software a medida. Abarcamos todo el proceso que va desde la fase de consultoría previa (estudio estratégico del proyecto) al mantenimiento evolutivo del sistema pasando por el diseño y la arquitectura, el desarrollo, la fase de pruebas, control de calidad, puesta en marcha y el soporte. Es decir, realizamos el ciclo completo de un desarrollo de software.') }}
              </p>
              
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img
                src="{{ asset('img/servicios/web.jpg') }}"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(1, 162, 255, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">
                {{ __('Servicios en línea') }}
              </h5>
              <p class="card-text">
                {{ __('Los servicios en línea van de simples a complejos. Un servicio en línea simple podría ser tan básico como proveer información a investigadores. Un servicio en línea complejo podría ser una aplicación para solicitar ayuda financiera en línea. Los servicios en línea incluyen servicios de correo electrónico, sitios web de música o películas, motores de búsqueda o tiendas en línea.') }}
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- servicios --}}
  </div>



{{-- modal contactos --}}
@livewire('estaticas.escribenos')

  {{-- modal nosotros --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ config('app.name','PERSON TECHNOLOGY') }}</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card border border-light shadow-0 mb-3">
            <div class="card-body">
              <h5 class="card-title">{{ __('Acerca de nosotros') }}</h5>
              <p class="card-text">
                {{ __('Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.') }}
              </p>
              <h5 class="card-title">
                {{ __('Objetivo') }}
              </h5>
              <p class="card-text">
                {{ __('Diseñar y desarrollar productos electrónicos, software y servicios en línea para brindar acceso y disponibilidad a todas las personas del mundo.') }}
              </p>
              <h5 class="card-title">
                {{ __('Misión') }}
              </h5>
              <p class="card-text">
                {{ __('Nuestra misión es lograr que la mayor cantidad de personas tengan acceso a la tecnología y puedan implementarla en su hogar o empresa.') }}
              </p>
              <h5 class="card-title">
                {{ __('Visión') }}
              </h5>
              <p class="card-text">
                {{ __('Mejorar la calidad de vida de las personas, a través de la innovación tecnológica, para lograr ser reconocidos como la empresa ecuatoriana líder en tecnologías.') }}
              </p>
              <h5 class="card-title">
                {{ __('Valores') }}
              </h5>
              <p class="card-text">
                <ul>
                  <li>{{ __('Humildad') }}</li>
                  <li>{{ __('Lealtad') }}</li>
                  <li>{{ __('Responsabilidad') }}</li>
                  <li>{{ __('Pasión') }}</li>
                  <li>{{ __('Trabajo en equipo') }}</li>
                  <li>{{ __('Colaboración') }}</li>
                  <li>{{ __('Equidad') }}</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" data-mdb-dismiss="modal">
            {{ __('Cerrar') }}
          </button>
        </div>
      </div>
    </div>
  </div>
  
  {{-- messenger api --}}
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v9.0'
      });
    };

    (function(d, s, id) {
      var myurl;
      @if (Config::get('app.locale')=='es')
        myurl='https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
      @else
        myurl='https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js'
      @endif
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = myurl;
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat"
    attribution="setup_tool"
    page_id="707887712735256"
    theme_color="#0084ff"
    logged_in_greeting=" {{ __('¡Hola! como podemos ayudarte?') }}"
    logged_out_greeting=" {{ __('¡Hola! como podemos ayudarte?') }}">
  </div>
@endsection