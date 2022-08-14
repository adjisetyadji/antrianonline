<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nomor Antrian</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">
</head>

<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">
    <h5 class="logo"><a href="/"><p>BPPRD</p> <small>Kota Bandar Lampung</small></a></h5>
  </div>
</header>

<section  class="contact">
  <div class="container">

    <div class="section-title mt-5">
      <span>Nomor Booking</span>
      <h2>Nomor Booking</h2>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="php-email-form">
            <h5 class="text-center"> Silahkan screenshoot nomor booking anda</h5>
             <div class="form-group mt-5" method="post">
               @csrf
               <h2 class="text-center"><b>{{ request()->kode}}</b></h2>
               <h3 class="text-center"><b>{{ request()->layanan}}</b></h3>
                <h3 class="text-center"><b>{{ request()->jam}}</b></h3>
                <h3 class="text-center"><b>{{ request()->tanggal}}</b></h3>
                </div>
                <h5 class="text-center mt-5">Silahkan datang 30 menit sebelum waktu antrian anda,
                  jika datang melebihi dari waktu yang di booking maka nomor booking tidak dapat digunakan.
                  Terima Kasih</h5>
                  <div class="card-body">
                    <h2 class="text-center"> <a href="/"> Selesai</a></h2>
                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</section>


 <!-- ======= Footer ======= -->
 <footer id="footer">

  <div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright <strong><span>BPPRD Kota Bandar Lampung</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://www.instagram.com/sativasetyadji/">Sativasetyadji</a>
    </div>
  </div>
</footer><!-- End Footer -->

 <!-- Vendor JS Files -->
 <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('style/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
 <script src="{{ asset('style/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('style/assets/vendor/purecounter/purecounter.js') }}"></script>
 <script src="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

 <!-- Template Main JS File -->
 <script src="{{ asset('style/assets/js/main.js') }}"></script>

</body>

</html>