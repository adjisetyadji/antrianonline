@extends('main')
@section('title', '| form register')
@section('register')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title mt-5">
      <span>Form Register</span>
      <h2>Form Register</h2>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="php-email-form">
            @livewire('multi-step-form')
          </div>
        </div>

      </div>
    </div>
  </div>
</section><!-- End Contact Section -->
@endsection