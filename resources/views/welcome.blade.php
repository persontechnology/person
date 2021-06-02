@extends('layouts.app')

@section('slider')

  <div id="carouselExampleIndicators" class="carousel slide carousel-fade my-5" data-mdb-ride="carousel">
    <ol class="carousel-indicators">
      <li
        data-mdb-target="#carouselExampleIndicators"
        data-mdb-slide-to="0"
        class="active"
      ></li>
      <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1"></li>
      <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2"></li>
      <li data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img
          src="{{ asset('img/slider/1.jpeg') }}"
          class="d-block w-100"
          alt="..."
        />
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-justify">
              <h1 class="my-0">
                PERSON<sup><small>&reg;</small></sup>
              </h1>
              <h4 class="my-0">
                TECHNOLOGY
              </h4>
              
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img
          src="{{ asset('img/slider/2.jpeg') }}"
          class="d-block w-100"
          alt="..."
        />
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
              <h1 class="mb-3">{{ __('Ciencia') }}</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="{{ asset('img/slider/3.jpeg') }}"
          class="d-block w-100"
          alt="..."
        />
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
              <h1 class="mb-3">{{ __('Tecnología') }}</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="{{ asset('img/slider/4.jpeg') }}"
          class="d-block w-100"
          alt="..."
        />
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
              <h1 class="mb-3">{{ __('e Ingeniería') }}</h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    <a
      class="carousel-control-prev"
      href="#carouselExampleIndicators"
      role="button"
      data-mdb-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      href="#carouselExampleIndicators"
      role="button"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  
@endsection

@section('contenido')
  
  

  <div class="container">
    @include('info.nosotros')
  </div>
  <div class="container">
    <hr class="my-5" />
    @include('info.servicios')
  </div>

  @include('info.frase-clientes')

  
  {{-- messenger api --}}
  @include('info.api-facebook')

@endsection