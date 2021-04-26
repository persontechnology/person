<div
    wire:ignore.self
  class="modal fade"
  id="modalEscribenos"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            {{ __('Escríbenos') }}
        </h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        {{ __('Nuestro equipo regresará a usted en cuestión de horas para ayudarlo.') }}
        <hr>
        <form wire:submit.prevent="enviar">
          <div class="mb-4">
              <label class="form-label" for="nombresapellidos">
                  {{ __('Nombres y apellidos') }}
              </label>
              <input type="text" id="nombresapellidos" value="{{ old('nombres') }}" wire:model="nombres" class="form-control @error('nombres')
            is-invalid
            @enderror " required />
            
            @error('nombres')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

  

          <div class="mb-3">
              <label class="form-label" for="correo">
                  {{ __('Correo electrónico') }}
              </label>
              <input type="email" id="correo" wire:model="correo" value="{{ old('correo') }}"  class="form-control @error('correo') is-invalid @enderror " required />
            
            @error('correo')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-4">
              <label class="form-label" for="asunto">
                  {{ __('Asunto') }}
              </label>
              <input type="text" id="asunto" value="{{ old('asunto') }}" wire:model="asunto" class="form-control @error('asunto') is-invalid @enderror" required />
            
            @error('asunto')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-4">
              <label class="form-label" for="mensaje">
                  {{ __('Su mensaje') }}
              </label>
              <textarea class="form-control @error('mensaje') is-invalid @enderror"  wire:model="mensaje" id="mensaje" rows="4" required>{{ old('mensaje') }}</textarea>
            
            @error('mensaje')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary btn-block mb-4">
            {{ __('Enviar') }}
          </button>
          <small class="text-success">{{ $msg }}</small>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button"  data-mdb-dismiss="modal" class="btn btn-secondary" >
            {{ __('Cerrar') }}
        </button>
        
        
      </div>
    </div>
  </div>
</div>


