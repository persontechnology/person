@extends('layouts.app')
@section('slider')
<style>
   
        #intro {
          margin-top: -58.59px;
          height: 50vh !important;
        }
   
</style>
    <!-- Background image -->
    <div id="intro" class="bg-image vh-100 shadow-1-strong my-5">
        <div class="mask" style="
              background: linear-gradient(
                45deg,
                rgba(9, 6, 214, 0.7),
                rgb(28, 3, 255) 100%
              );
            ">
          <div class="container d-flex align-items-center justify-content-center text-center h-100">
            <div class="text-white">
                <h1 class="mt-3 text-warning"><strong>RastreoGps</strong></h1>
              <h2 class="mb-3">{{ __('Inteligencia en movimiento') }}</h2>
              <h5 class="mb-4">{{ __('Solución integral de desarrollo 100% nacional que permite realizar el monitoreo y control eficiente de sus activos: flota de vehículos y/o embarcaciones.') }}</h5>
              <a class="btn btn-outline-light btn-lg m-2" href="{{ route('contactenos') }}" role="button"
                rel="nofollow">{{ __('Contáctenos') }}</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Background image -->
@endsection

@section('contenido')

    <!--Main layout-->
  <main class="mt-5">
    <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/gps/1.png') }}" class="d-block w-100" alt="Wild Landscape"/>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/gps/2.png') }}" class="d-block w-100" alt="Camera"/>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/gps/3.png') }}" class="d-block w-100" alt="Exotic Fruits"/>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/gps/4.png') }}" class="d-block w-100" alt="Exotic Fruits"/>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>{{ __('Obtén el máximo provecho de tus vehículos') }}</strong></h4>
            <p class="text-muted">
                {{ __('Sabemos que tu auto, camión o moto son tus aliados y socios de negocio. RastreoGps utiliza los avances de la telecomunicación e informática para potenciar su rendimiento y protegerlos en todo momento.') }}
            </p>
            <p class="text-primary"><strong>{{ __('Dispositivo electrónico oculto dentro del vehículo o moto que permite rastrearlo en caso de que sea robado') }}.</strong></p>
            <p class="text-muted">
                {{ __('Brindamos servicios de bloqueo y desbloqueo de movimiento de vehículo/embarcación, envío de alertas por SMS, integración de alerta SOS directo al sistema ECU 911, resumen de estado de la flota, visualización de la última posición recibida, reporte de posición en intervalos de 1 minuto para vehículos y 1 hora para embarcaciones, entre otros beneficios') }}.  
            </p>
            <p class="text-primary"><strong>{{ __('Aplica para todo tipo de vehículo y/o maquinarias') }}.</strong></p>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <section class="text-center">
        <h4 class=""><strong>{{ __('Soluciones') }}</strong></h4>
        <p>{{ __('La información que necesitas, justo cuando la necesitas. Conoce el software de gestión de vehículos que optimiza y potencia tu vida y tu negocio') }}.</p>
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{ asset('img/gps/2.png') }}" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ __('Para tu vehículo personal') }}</h5>
                <p class="card-text">
                    {{ __('Tranquilidad. Tu familia y tu auto o moto seguros, gracias a lo último en tecnología para control de vehículos') }}.
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{ asset('img/gps/1.png') }}" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ __('Para tus vehículos de trabajo') }}</h5>
                <p class="card-text">
                    {{ __('Controla y monitorea cada movimiento de los vehículos de tu negocio y sus conductores') }}.
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{ asset('img/gps/4.png') }}" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ __('Para tu flota de transporte') }}</h5>
                <p class="card-text">
                    {{ __('Supervisa tu flota 24/7 con lo último en tecnología. Aumenta su productividad y rentabilidad') }}.
                </p>
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <section class="text-center">
        <h4 class=""><strong>{{ __('Nuestros clientes') }}</strong></h4>
        <p>{{ __('Más de 5.000 vehículos en más de 30.000 clientes de todos los tamaños, confían en') }} <strong>RastreoGps.</strong></p>
        <img src="{{ asset('img/gps/clientes.png') }}" class="img-fluid" alt="">
      </section>    
    </div>
  </main>
  <!--Main layout-->
  @include('info.frase-clientes')
  

@endsection
