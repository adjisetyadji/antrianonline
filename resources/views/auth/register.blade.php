@extends('main')
@section('title', '| admin')


<section id="contact" class="contact">
  <div class="container">
    @if (session('status'))
          <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="section-title mt-5">
      <span>Form Register</span>
      <h2>Form Register</h2>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="php-email-form">
            <form class="contact-form" method="POST" action="{{ route('register') }}">
              @csrf

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label>Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" autofocus required>
                  @error('username')
                     <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                <label>Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label>Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center"><button type="submit">Daftar</button></div>

            <div class="register-link mt-3 text-center">
                <p>Sudah punya akun ? <a href="{{ route('login') }}">Masuk!</a></p>
            </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
