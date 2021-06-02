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