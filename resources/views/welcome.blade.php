@extends('main')
@section('title', '| Booking Antrian Online ')

@section('welcome')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container" >
    <div class="row ">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
       
        <h1 class="pt-5">Booking Antrian Online</h1>
        <h5 class="mt-3">Selamat Datang wajib pajak, Sekarang anda bisa ambil nomor antrian kapan pun dan dimana pun</h5>
        <div class="d-flex mt-5">
          <a href="{{url ('formregis') }}" class="btn-get-started scrollto">Daftar Sekarang</a>
        </div>
        <form action="/carinomor" method="GET">
          <div class="input-group mt-5"> 
            <input type="number" class="form-control" placeholder="Masukan NIK" name="cari" required>
            <button class="btn btn-danger" type="submit">Cari Nomor Antrian</button>
        </form>
          </div>
          @if (session('alert'))
          <br>
          <div class="alert alert-danger">
              {{ session('alert') }}
          </div>
         @endif
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="{{ asset('style/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title mt-3">
        <span>Kontak</span>
        <h2>Kontak</h2>
        <p>Untuk info lebih lanjut silahkan hubungi kami dibawah ini</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-youtube"></i>
              <h4>Youtube:</h4>
              <p>BPPRD kota bandar lampung</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>bpprd@bandarlampungkota.go.id</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>No Telp:</h4>
              <p>0721 456-7890</p>
            </div>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.6994686034286!2d105.26171672965822!3d-5.429462324718453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da35c006c1ef%3A0x1d19e2b3c6140779!2sKantor%20Pencatatan%20Sipil%20Kota%20Bandar%20Lampung!5e1!3m2!1sid!2sid!4v1634964047605!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection
