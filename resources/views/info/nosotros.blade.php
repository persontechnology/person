<section>
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
      
      
      </div>
    </div>

    {{-- modal contactos --}}
    @livewire('estaticas.escribenos')

    {{-- modal nosotros --}}
    @include('info.modal-nosotros')
</section>