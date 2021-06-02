@extends('layouts.app')

@section('contenido')
<!-- Container for demo purpose -->
<div class="container my-5 p-5 shadow-5">

    <!--Section: Design Block-->
    <section>
  
      <div class="text-center">
        <h3 class="mb-3">Contact us</h3>
        <p>We will reply to your message as soon as possible. The average response time is 24h.</p>
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
            <iframe src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" style="border: 0; border-radius: .25rem;" allowfullscreen=""></iframe>
          </div>
          <!--Google Maps-->
  
          <p><strong>Address: </strong>New York, 94126, United States</p>
          <p><strong>Phone number: </strong>+ 01 234 567 89</p>
          <p><strong>E-mail: </strong>info@gmail.com</p>
  
        </div>
  
        <div class="col-md-5 mb-4">
  
          <form>
            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="form4Example1" class="form-control">
              <label class="form-label" for="form4Example1">Name</label>
            </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form4Example2" class="form-control">
              <label class="form-label" for="form4Example2">Email address</label>
            </div>
  
            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form4Example3" rows="4"></textarea>
              <label class="form-label" for="form4Example3">Message</label>
            </div>
  
            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked="">
              <label class="form-check-label" for="form4Example4">
                Send me a copy of this message
              </label>
            </div>
  
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">
              Send
            </button>
          </form>
  
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
