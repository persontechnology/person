<section>
    <div class="row">
      <div class="col-md-6">
        <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
          <div class="text-center bg-primary">
            <img src="{{ asset('img/person.png') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <h4><strong>{{ __('Ciencia, Tecnología e Ingeniería') }}</strong></h4>
        <p class="text-muted">
          {{ __('Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.') }}
        </p>
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
          {{ __('Acerca de nosotros') }}
        </button>
        <hr>
        <p>
          <strong>
          {{ __('Hablemos de tu proyecto atención 24/7') }}
        </strong>
        </p>
        <p class="text-muted">
          {{ __('Utilizamos tecnologías, lenguajes de programación y frameworks de alto rendimiento para construir de manera rápida y eficiente las más innovadoras soluciones para el mundo y nuestros clientes.') }}
        </p>

      
      <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#modalEscribenos">
        {{ __('Escríbenos') }}
      </button>
      <hr>
      <p>
        <strong>Mira nuestro video en YouTube</strong>
      </p>
      <a class="btn btn-danger" href="https://www.youtube.com/channel/UCTQWC6Ms6a2G0GLNQHcjWtg" role="button"
      ><i class="fab fa-youtube"></i
      > YouTube</a>
      
      </div>
    </div>

    {{-- modal contactos --}}
    @livewire('estaticas.escribenos')

    {{-- modal nosotros --}}
    @include('info.modal-nosotros')
</section>