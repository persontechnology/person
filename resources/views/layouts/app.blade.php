<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="facebook-domain-verification" content="btondjgzzzprclk1o89vvqchif9pct" />
    <meta name="description" content="{{ __('Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.') }}">
    <meta name="keywords" content="{{ __('Ciencia, Tecnología e Ingeniería') }},
    Desarrollo de software, 
    Desarrollo de software en Ecuador-Cotopaxi-Salcedo,
    Diseño de páginas web en Ecuador-Cotopaxi-Salcedo,
    Diseño de aplicaciones móviles en Ecuador-Cotopaxi-Salcedo,
    Tesis en Ecuador-Cotopaxi-Salcedo,
    Programación en Ecuador-Cotopaxi-Salcedo,
    Circuitos electrónicos en Ecuador-Cotopaxi-Salcedo,
    Arduino en Ecuador-Cotopaxi-Salcedo,
    Venta de computadores en Ecuador-Cotopaxi-Salcedo,
    Accesoria y consultoría informática en Ecuador-Cotopaxi-Salcedo,
    Empresa tecnológica Ecuador-Cotopaxi-Salcedo,
    Empresa informática en Ecuador-Cotopaxi-Salcedo,
    Sistema de facturación Ecuador-Cotopaxi-Salcedo,
    Sistema escolástico Ecuador-Cotopaxi-Salcedo,
    Sistema de ventas Ecuador-Cotopaxi-Salcedo">

    <meta name="author" content="Person Technology">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ __('Ciencia, Tecnología e Ingeniería') }}" />
    <meta property="og:description" content="{{ __('Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.') }}" />
    <meta property="og:image" content="{{ asset('img/persontechnology.png') }}" />
    <meta property="og:image:width" content="1080" />
    <meta property="og:image:height" content="1080" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:site_name" content="{{ config('app.name','PERSON TECHNOLOGY') }}" />
    <meta property="fb:app_id" content="263449115173815" />
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta property="og:video" content="https://youtu.be/333pv9r9myQ" />
    <meta property="og:video:type" content="application/x-shockwave-flash" />

    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
    <meta name="DC.Title" content="{{ __('Ciencia, Tecnología e Ingeniería') }}">
    <meta name="DC.Creator" content="Person Technology">
    <meta name="DC.Description" content="{{ __('Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.') }}">


    <title>
      @isset($title)
       {{ $title }} | 
      @endisset
      {{ config('app.name','PERSON TECHNOLOGY') }}
    </title>
    
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    
 
     @livewireStyles
  </head>
  <body>
    
    
    
    <header>
      {{-- Navbar --}}
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">
             <img
                src="{{ asset('img/person.png') }}"
                height="45"
                class="py-0"
                alt=""
                loading="Person Technology"
              />
          </a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item {{ request()->routeIs('inicio')?'active':'' }}">
                <a class="nav-link {{ request()->routeIs('inicio')?'active':'' }}" aria-current="page" href="{{ url('/') }}">{{ __('Inicio') }}</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"
                >
                  Servicios
                </a>
                
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Diseño y producción de productos electrónicos</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Desarrollo de software</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Servicios en línea</a>
                  </li>
                </ul>
              </li> --}}
              <li class="nav-item {{ request()->routeIs('odoo')?'active':'' }}">
                <a class="nav-link {{ request()->routeIs('odoo')?'active':'' }}" href="{{ route('odoo') }}">Odoo CRM</a>
              </li>
              <li class="nav-item {{ request()->routeIs('rastreoGps')?'active':'' }}">
                <a class="nav-link {{ request()->routeIs('rastreoGps')?'active':'' }}" aria-current="page" href="{{ route('rastreoGps') }}">{{ __('Rastreo GPS') }}</a>
              </li>
              <li class="nav-item {{ request()->routeIs('clientes')?'active':'' }}">
                <a class="nav-link {{ request()->routeIs('clientes')?'active':'' }}" aria-current="page" href="{{ route('clientes') }}">{{ __('Nuestros clientes') }}</a>
              </li>
              <li class="nav-item {{ request()->routeIs('contactenos')?'active':'' }}">
                <a class="nav-link {{ request()->routeIs('contactenos')?'active':'' }}" aria-current="page" href="{{ route('contactenos') }}">{{ __('Contáctenos') }}</a>
              </li>
            </ul>

            <ul class="navbar-nav d-flex flex-row">
              <!-- Icons -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"
                >
                @if ( Config::get('app.locale') == 'en')
                  <i class="united kingdom flag m-0"></i>
                @else
                <i class="ecuador flag m-0"></i>
                @endif
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="{{ url('/es') }}">
                      <i class="ecuador flag"></i>Español
                      @if ( Config::get('app.locale') == 'es')
                      <i class="fa fa-check text-success ms-2"></i>
                      @endif
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ url('/en') }}">
                      <i class="united kingdom flag"></i>English
                      @if ( Config::get('app.locale') == 'en')
                      <i class="fa fa-check text-success ms-2"></i>
                      @endif
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://www.youtube.com/channel/UCTQWC6Ms6a2G0GLNQHcjWtg" rel="nofollow"
                  target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://www.facebook.com/persontechnology" rel="nofollow" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://wa.me/message/P6E77NRUVOC3A1" rel="nofollow" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="https://www.instagram.com/persontechnology/" rel="nofollow" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      {{-- Navbar --}}
    </header>

    {{-- slider --}}
        @yield('slider')
    {{-- end slider --}}

     {{-- Main layout --}}
    <main class="mt-5">
        @yield('contenido')
    </main>
    {{-- Main layout --}}
    
    
    {{-- liveToast --}}
    <div id="toast-container" class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
      
    </div>
    
    
    <footer class="bg-light text-center text-lg-start">
      {{-- Copyright --}}
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © {{ date('Y') }} Copyright:
        <a class="text-dark" href="{{ url('/') }}">persontechnology</a>
      </div>
      {{-- Copyright --}}
    </footer>

    {{-- Custom scripts --}}
    
  @livewireScripts

  <script src="{{ mix('js/api.js') }}"></script>
  </body>
</html>
