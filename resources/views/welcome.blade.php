@extends('estaticas.principal')
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
          src="{{ asset('img/slider/1.png') }}"
          class="d-block w-100"
          alt="..."
        />
      </div>
      <div class="carousel-item">
        <img
          src="{{ asset('img/slider/2.png') }}"
          class="d-block w-100"
          alt="..."
        />
      </div>
      <div class="carousel-item">
        <img
          src="{{ asset('img/slider/3.png') }}"
          class="d-block w-100"
          alt="..."
        />
      </div>
      <div class="carousel-item">
        <img
          src="{{ asset('img/slider/4.png') }}"
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
    <!--Section: Content-->
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
          <h4><strong>Ciencia, tecnología e ingeniería</strong></h4>
          <p class="text-muted">
            Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.
          </p>
          <p><strong>Hablemos de tu proyecto atención 24/7</strong></p>
          <p class="text-muted">
            Utilizamos tecnologías, lenguajes de programación y frameworks de alto rendimiento para construir de manera rápida y eficiente las más innovadoras soluciones para el mundo y nuestros clientes.
          </p>

        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
          Acerca de nosotros
        </button>
        <button type="button" class="btn btn-outline-primary" data-mdb-toggle="modal" data-mdb-target="#contactoModal">
          Escríbenos
        </button>
        <hr>
        {{-- boton me gusta de facebook --}}
        <div class="fb-like" data-href="https://www.facebook.com/persontechnology" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
        <div class="fb-share-button" data-href="https://persontechnology.com/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpersontechnology.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
        </div>
      </div>
    </section>
    <!--Section: Content-->

    <hr class="my-5" />

    <!--Section: Content-->
    <section class="text-center">
      <h4 class="mb-5"><strong>Nuestros servicios</strong></h4>

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
              <h5 class="card-title">Diseño y fabricación de productos electrónicos</h5>
              <p class="card-text">
                Somos especialistas en diseño y fabricación de soluciones electrónicas para empresas, desde circuitos impresos hasta productos completos a medida, incorporando elementos electrónicos y electromecánicos, aportando siempre una visión innovadora, de calidad y orientada a mejorar la eficiencia y los resultados.
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
              <h5 class="card-title">Desarrollo de software</h5>
              <p class="card-text text-justify">
                Desarrollamos software a medida. Abarcamos todo el proceso que va desde la fase de consultoría previa (estudio estratégico del proyecto) al mantenimiento evolutivo del sistema pasando por el diseño y la arquitectura, el desarrollo, la fase de pruebas, control de calidad, puesta en marcha y el soporte. Es decir, realizamos el ciclo completo de un desarrollo de software. 
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
              <h5 class="card-title">Servicios en línea</h5>
              <p class="card-text">
                Los servicios en línea van de simples a complejos. Un servicio en línea simple podría ser tan básico como proveer información a investigadores. Un servicio en línea complejo podría ser una aplicación para solicitar ayuda financiera en línea. Los servicios en línea incluyen servicios de correo electrónico, sitios web de música o películas, motores de búsqueda o tiendas en línea.
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section: Content-->
  </div>



{{-- modal contactos --}}

<div class="modal fade" id="contactoModal" tabindex="-1" aria-labelledby="contactoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactoModalLabel">Escríbenos</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card border border-light shadow-0 mb-3">
              <p>Nuestro equipo regresará a usted en cuestión de horas para ayudarlo.</p>
            <div class="card-body">
              <form method="POST" action="{{ route('enviarContacto') }}">
                @csrf
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1" value="{{ old('nombres') }}" name="nombres" class="form-control @error('nombres')
                  is-invalid
                  @enderror " required />
                  <label class="form-label" for="form3Example1">Nombres y apellidos</label>
                  @error('nombres')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example2" name="correo" value="{{ old('correo') }}"  class="form-control @error('correo') is-invalid @enderror " required />
                  <label class="form-label" for="form3Example2">Correo electrónico</label>
                  @error('correo')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
    
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" value="{{ old('asunto') }}" name="asunto" class="form-control @error('asunto') is-invalid @enderror" required />
                  <label class="form-label" for="form3Example3">Asunto</label>
                  @error('asunto')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
    
                <div class="form-outline mb-4">
                  <textarea class="form-control @error('mensaje') is-invalid @enderror"  name="mensaje" id="textAreaExample" rows="4" required>{{ old('mensaje') }}</textarea>
                  <label class="form-label" for="textAreaExample">Su mensaje</label>
                  @error('mensaje')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
    
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Enviar
                </button>
              </form>
            </div>
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" data-mdb-dismiss="modal">
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>

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
              <h5 class="card-title">Nosotros</h5>
              <p class="card-text">
                Somos una empresa ecuatoriana que diseña y produce productos electrónicos, software y servicios en línea.
              </p>
              <h5 class="card-title">Objetivo</h5>
              <p class="card-text">
                Diseñar y desarrollar productos electrónicos, software y servicios en línea para brindar acceso y disponibilidad a todas las personas del mundo.
              </p>
              <h5 class="card-title">Misión</h5>
              <p class="card-text">
                Nuestra misión es lograr que la mayor cantidad de personas tengan acceso a la tecnología y puedan implementarla en su hogar o empresa.
              </p>
              <h5 class="card-title">Visión</h5>
              <p class="card-text">
                Mejorar la calidad de vida de las personas, a través de la innovación tecnológica, para lograr ser reconocidos como la empresa ecuatoriana líder en tecnologías.
              </p>
              <h5 class="card-title">Valores</h5>
              <p class="card-text">
                <ul>
                  <li>Humildad</li>
                  <li>Lealtad</li>
                  <li>Responsabilidad</li>
                  <li>Pasión</li>
                  <li>Trabajo en equipo</li>
                  <li>Colaboración</li>
                  <li>Equidad</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" data-mdb-dismiss="modal">
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection