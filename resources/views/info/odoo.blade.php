@extends('layouts.app')
@section('contenido')

<div class="bg-image my-5">
    <img
      src="{{ asset('img/odoo/pepple.jpg') }}"
      class="d-block w-100"
      alt="..."
    />
    <div class="mask" style="background-color: rgba(17, 0, 255, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-primary text-center">
          <h1 class="mt-3 note note-primary">
              5
            <strong>{{ __('Millones de usuarios') }}</strong>
            
          </h1>
          <h2 class="text-white">{{ __('hacen crecer sus negocios con ODOO') }}</h2>
        </div>
      </div>
    </div>
</div>

<div class="container">
    <section>
    <div class="row">
      <div class="col-md-6 gx-5 mb-4">
        <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/Kn1Bn6O3AIQ"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>

      <div class="col-md-6 gx-5 mb-4">
        <h4><strong>{{ __('Odoo ERP') }}</strong></h4>
        <p class="text-muted">
          {{ __('Odoo es un software empresarial todo en uno que incluye CRM, sitio web y comercio electrónico, facturación, contabilidad, fabricación, gestión de almacenes y proyectos, e inventario entre otros.') }}
        </p>
        <hr>
        <p>
          <strong>
          {{ __('¿Qué empresas utilizan ODOO?') }}
        </strong>
        </p>
        <p class="text-muted">
          {{ __('Muchas de las grandes multinacionales ya utilizan Odoo como su sistema de gestión, como es el caso de Toyota, Danone, Auchan, La Poste, Veolia, Singer, WWF, etc.') }}
        </p>
        
        <p class="text-primary">
            {{ __('¿Necesitas Odoo para tu empresa o negocio?') }}
        </p>
      <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#modalEscribenos">
        {{ __('Escríbenos') }}
      </button>
      
      </div>
    </div>
  </section>
</div>

<hr>
<h1 class="text-center my-5">{{ __('Una aplicación para cada necesidad') }}</h1>
<div class="container text-center">
    <div class="row ">
        <div class="col-md-4 col-sm-12">
            <img src="{{ Config::get('app.locale')=='en'?asset('img/odoo/odoo_ventas_en.png'):asset('img/odoo/odoo_ventas_es.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-4 col-sm-12">
            <img src="{{ Config::get('app.locale')=='en'?asset('img/odoo/odoo_servicios_en.png'):asset('img/odoo/odoo_servicios_es.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-4 col-sm-12">
            <img src="{{ Config::get('app.locale')=='en'?asset('img/odoo/odoo_operaciones_en.png'):asset('img/odoo/odoo_operaciones_es.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    <hr>
    <div class="row text-center">
        <div class="col-md-3 col-sm-12">
            <img src="{{ Config::get('app.locale')=='en'?asset('img/odoo/odoo_web_en.png'):asset('img/odoo/odoo_web_es.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-3 col-sm-12">
            <img src="{{ Config::get('app.locale')=='en'?asset('img/odoo/odoo_finanzas_en.png'):asset('img/odoo/odoo_finanzas_es.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-3 col-sm-12">
            <img src="{{ Config::get('app.locale')=='en'?asset('img/odoo/odoo_marketing_en.png'):asset('img/odoo/odoo_marketing_es.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-3 col-sm-12">
            <img src="{{ Config::get('app.locale')=='en'?asset('img/odoo/odoo_desarrollo_en.png'):asset('img/odoo/odoo_desarrolle_es.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</div>

<div class="mx-0 bg-primary my-5">
    <div class="card ml-0 mb-3 bg-primary text-white">
        <div class="row g-0">
          <div class="col-md-4">
            <img
              src="{{ asset('img/odoo/odoo-services.png') }}"
              alt="..."
              class="img-fluid"
            />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="mt-5">
                {{ __('El fin de las') }} 
              </h2>
              <h1 class="mb-5"><strong>{{ __('integraciones problemáticas.') }}</strong></h1>
              <h3 class="text-justify">
                {{ __('Si tiene soluciones de software individuales que funcionan, pero no se comunican entre sí, probablemente estás ingresando cosas más de una vez y se esté perdiendo una descripción general completa de lo que está sucediendo.') }}
              </h3>
              <h6 class="text-white text-justify mt-3">
                  <strong>
                  {{ __('Entre las aplicaciones de Odoo y las decenas de miles de aplicaciones de la comunidad, hay algo que te ayudará a abordar todas tus necesidades comerciales en una solución única, rentable y modular: no más trabajo para lograr que diferentes tecnologías cooperen.') }}
                </strong>
              </h6>
              <h5 class="mt-5 text-justify">
                  {{ __('Las aplicaciones de Odoo están perfectamente integradas entre sí, lo que te permite automatizar completamente tus procesos comerciales y cosechar los ahorros y beneficios.') }}
              </h5>
            </div>

            
            
              

          </div>
        </div>
      </div>
</div>

<div class="container  text-center">
    
    <h1 class="text-center text-primary">
        <strong>
            {{ __('Solicita información, será un gusto atender tu consulta.') }}
        </strong>
    </h1>
    <hr>
    <button type="button" class="btn btn-primary btn-lg mb-3" data-mdb-toggle="modal" data-mdb-target="#modalEscribenos">
        {{ __('Escríbenos') }}
      </button>
</div>


{{-- modal contactos --}}
@livewire('estaticas.escribenos')

@endsection