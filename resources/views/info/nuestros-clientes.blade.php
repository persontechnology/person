<section class="">
  <h4 class="my-5 text-center"><strong>{{ __('Nuestros clientes') }}</strong></h4>
  <div class="row">
    <div class="col-lg-5 mb-4">
      <div class="ratio ratio-16x9">
        <iframe
          src="https://www.youtube.com/embed/9rX27Crgzhk"
          title="YouTube video"
          allowfullscreen
        ></iframe>
      </div>
    </div>
    <div class="col-lg-7">
      <ul class="list-unstyled mb-0 ms-0 ms-lg-5">
        <li class="mb-5">
          <div class="d-flex align-items-center mb-3">
            <h5 class="mb-0">{{ __('Estimados clientes,') }}</h5>
          </div>
          <p class="mb-3">
            {{ __('Un año más queremos agradecerles la confianza depositada en la prestación de nuestros productos y servicios. El grado de satisfacción y fidelidad de nuestros clientes sigue aumentado. Este es, sin duda, el máximo factor de motivación que nos lleva, año tras año, a renovar nuestro compromiso con la calidad y con nuestros clientes.') }}
          </p>
          <hr>
          <p class="mb-3">
            {{ __('Desde') }} <strong>PERSON TECHNOLOGY</strong> {{ __('nos esforzamos en cumplir y mejorar las espectativas de nuestros clientes en todos los ámbitos de actuación y Uds. así lo han reconocido.') }}
          </p>
          <p>{{ __('A todos nuestros clientes, muchas gracias.') }}</p>
          <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#modalEscribenos">
            {{ __('Escríbenos') }}
          </button>
        </li>
      </ul>
    </div>
  </div>
  {{-- modal contactos --}}
@livewire('estaticas.escribenos')
</section>