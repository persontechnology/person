@extends('layouts.app')

@section('contenido')
<!-- Container for demo purpose -->
<div class="container my-5 p-5 shadow-5">

    <!--Section: Design Block-->
    <section>
  
      <div class="text-center">
        <h3 class="mb-3">{{ __('Contacta con nosotros') }}</h3>
        <p>{{ __('Responderemos a su mensaje lo antes posible. El tiempo medio de respuesta es de 24 h.') }}</p>
      </div>
  
      <hr class="my-4">
  
      <div class="row pt-2">
  
        <div class="col-md-7 mb-4">
  
          <style>
            /* Map settings */
            .map-container {
              height: 200px;
              position: relative;
            }
  
            .map-container iframe {
              left: 0;
              top: 0;
              height: 100%;
              width: 100%;
              position: absolute;
            }
          </style>
  
          <!--Google map-->
          <div class="map-container shadow-1-strong rounded mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.148909821363!2d-78.58967898523885!3d-1.0495748357098122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d47cb88b2576db%3A0x4df497e4f888b608!2sSOYSOFTWARE!5e0!3m2!1ses!2sec!4v1622681227133!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <!--Google Maps-->
  
          <p><strong>{{ __('Dirección') }}:  </strong>SAN MIGUEL DE SALCEDO, COTOPAXI, ECUADOR</p>
          <p><strong>{{ __('Número de teléfono') }}:  </strong>+593 998808775</p>
          <p><strong>E-mail: </strong>info@persontechnology.com</p>
  
        </div>
  
        <div class="col-md-5 mb-4">
        
            <button type="button" class="btn btn-primary btn-block" data-mdb-toggle="modal" data-mdb-target="#modalEscribenos">
                {{ __('Escríbenos') }}
            </button>
             <!-- Whatsapp -->
             <a class="btn btn-primary btn-block" style="background-color: #25d366;" href="https://wa.me/message/P6E77NRUVOC3A1" role="button"
             ><i class="fab fa-whatsapp"></i
             > WhatsApp</a>
            <hr>
            <p>{{ __('Siguenos en nuestras redes sociales') }}</p>
            <!-- Facebook -->
            <a class="btn btn-primary btn-block" style="background-color: #3b5998;" href="https://www.facebook.com/persontechnology" role="button"
            ><i class="fab fa-facebook-f"></i
            > Facebook</a>



            <!-- Instagram -->
            <a class="btn btn-primary btn-block" style="background-color: #ac2bac;" href="https://www.instagram.com/persontechnology/?hl=es-la" role="button"
            ><i class="fab fa-instagram"></i
            > Instagram</a>




            <!-- Youtube -->
            <a class="btn btn-primary btn-block" style="background-color: #ed302f;" href="https://www.youtube.com/channel/UCTQWC6Ms6a2G0GLNQHcjWtg" role="button"
            ><i class="fab fa-youtube"></i
            > YouTube</a>



            <!-- Github -->
            <a class="btn btn-primary btn-block" style="background-color: #333333;" href="https://github.com/persontechnology" role="button"
            ><i class="fab fa-github"></i
            > Github</a>

           
            <!-- Whatsapp -->
            <a class="btn btn-info btn-block"  href="https://www.tiktok.com/@persontechnology?lang=es" role="button"
            ><i class="fab fa-tiktok"></i> TikTok</a>
            

          @livewire('estaticas.escribenos')
  
        </div>
  
      </div>
  
    </section>
    <!--Section: Design Block-->
  
  </div>

<div class="container">
    <hr class="my-5" />
    @include('info.servicios')
</div>

@endsection
