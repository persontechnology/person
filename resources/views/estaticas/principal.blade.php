<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    
    <title>{{ config('app.name','PERSON TECHNOLOGY') }}</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('mdb/css/mdb.min.css') }}" />
  </head>
  <body>
    <header>
      <!-- Navbar -->
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
          <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name','PERSON TECHNOLOGY') }}</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              {{-- <li class="nav-item active">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
              </li>
              <li class="nav-item dropdown">
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
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Contactos</a>
              </li> --}}
            </ul>

            <ul class="navbar-nav d-flex flex-row">
              <!-- Icons -->
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
      <!-- Navbar -->
    </header>

    {{-- slider --}}
        @yield('slider')
    {{-- end slider --}}

     <!--Main layout-->
    <main class="mt-5">
        @yield('contenido')
    </main>
    <!--Main layout-->
    
    
    
    <footer class="bg-light text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © {{ date('Y') }} Copyright:
        <a class="text-dark" href="{{ url('/') }}">persontechnology</a>
      </div>
      <!-- Copyright -->
    </footer>



    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">


    //  mostrara modal error contacto
    @if ($errors->any())
   
      const myModalEl = document.getElementById('contactoModal')
      const modal = new mdb.Modal(myModalEl)
      modal.show()
   
    @endif
    
    </script>
      
    
      
    

  </body>
</html>
