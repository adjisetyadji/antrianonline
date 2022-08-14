@extends('main')
@section('title', '| admin')

<section id="contact" class="contact">
  <div class="container">

    @if (session('status'))
          <div class="alert alert-success">{{ session('status') }}</div>
     @endif

    <div class="section-title mt-5">
      <span>Silahkan Login</span>
      <h2>Silahkan Login</h2>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="php-email-form">
            <form class="contact-form" method="POST" action="{{ route('login') }}">
              @csrf

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus required>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center"><button type="submit">Login</button></div>

            <div class="register-link mt-3 text-center">
                <p>Belum punya akun ? <a href="{{ route('register') }}">Daftar!</a></p>
            </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
