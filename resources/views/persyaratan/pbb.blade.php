@extends('main')
@section('title', '| pajak pbb')
@section('pbb')
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container">
  
      <div class="section-title">
        <span>PBB</span>
        <h2>PBB</h2>
      </div>
  
      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box"  >
            <h4>Objek Pajak baru</h4>
            <div>
            <p style="text-align: left">1. Permohonan tertulis WP</p>
            <p style="text-align: left">2. Mengisi SPOP/LSPOP</p>
            <p style="text-align: left">3. Surat Kuasa Bermaterai (Jika Dikuasakan)</p>
            <p style="text-align: left">4. Copy KTP/KK/KITAS/Lainnya</p>
            <p style="text-align: left">5. Copy Sertifikat/Surat Keterangan Tanah/Surat Kapling/SIPPT/AJB/Surat Tanah Garapan/Surat Keterangan Lurah/Kades/Surat Perjanjian Sewa/Lainnya</p>
            <p style="text-align: left">6. Surat IMB/IPB/Surat Keterangan Lurah/Kades/Lainnya</p>
            <p style="text-align: left">7. Copy SSPD-BPHTB</p>
            <p style="text-align: left">8. Copy SPPT-PBB Tetangga Terdekat</p>
            </div>
            
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <h4>Restitusi dan Kompensasi</h4>
            <p style="text-align: left">1. Permohonan tertulis WP</p>
            <p style="text-align: left">2. Surat Kuasa Bermaterai (Jika Dikuasakan)</p>
            <p style="text-align: left">3. Copy KTP/KK/KITAS/Lainnya</p>
            <p style="text-align: left">4. Asli SPPT/SKP/STP</p>
            <p style="text-align: left">5. Copy SPPT Tahun Berikutnya Dalam Kompensasi</p>
            <p style="text-align: left">6. Asli SK Penyelesaian Keberatan Pengurangan Atas Banding</p>
            <p style="text-align: left">7. Copy Bukti Lunas PBB Minimal 3 Tahun terakhir</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <h4>Mutasi</h4>
            <p style="text-align: left">1. Permohonan tertulis WP</p>
            <p style="text-align: left">2. Mengisi SPOP/LSPOP</p>
            <p style="text-align: left">3. Surat Kuasa Bermaterai (Jika Dikuasakan)</p>
            <p style="text-align: left">4. Copy KTP/KK/KITAS/Lainnya</p>
            <p style="text-align: left">5. Copy SPPT Tahun Terakhir</p>
            <p style="text-align: left">6. Copy Sertifikat/Surat Tanah/AJB/Akta Hibah/IMB/Akta Waris/Surat Keterangan Lurah/Kades/Lainnya</p>
            <p style="text-align: left">7. Copy SSPD-BPHTB</p>
            <p style="text-align: left">8. Copy Bukti Lunas PBB</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Salinan</h4>
            <p style="text-align: left">1. Permohonan tertulis WP</p>
            <p style="text-align: left">2. Mengisi SPOP/LSPOP</p>
            <p style="text-align: left">3. Surat Kuasa Bermaterai (Jika Dikuasakan)</p>
            <p style="text-align: left">4. Copy KTP/KK/KITAS/Lainnya</p>
            <p style="text-align: left">5. Copy SPPT/SKP Tahun Sebelumnya</p>
            <p style="text-align: left">6. Copy Bukti Lunas PBB</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Pembetulan</h4>
            <p style="text-align: left">1. Permohonan tertulis WP</p>
            <p style="text-align: left">2. Mengisi SPOP/LSPOP</p>
            <p style="text-align: left">3. Surat Kuasa Bermaterai (Jika Dikuasakan)</p>
            <p style="text-align: left">4. Copy KTP/KK/KITAS/Lainnya</p>
            <p style="text-align: left">5. Asli SPPT/SKP/STP Tahun Bersangkutan</p>
            <p style="text-align: left">6. Copy Sertifikat/Surat Keterangan Tanah/AJB/Akta Hibah/IMB/Lainnya</p>
            <p style="text-align: left">7. Copy Bukti Lunas PBB</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Keberatan Atas Penunjukan Sebagai WP</h4>
            <p style="text-align: left">1. Permohonan tertulis WP</p>
            <p style="text-align: left">2. Surat Kuasa Bermaterai (Jika Dikuasakan)</p>
            <p style="text-align: left">3. Copy KTP/KK/KITAS/Lainnya</p>
            <p style="text-align: left">4. Asli SPPT Tahun Bersangkutan</p>
            <p style="text-align: left">5. Copy Surat Keterangan Tanah/AJB/Surat Keterangan Lurah/Kades/Surat Pejanjian Sewa/Kontrak/Lainnya</p>
            <p style="text-align: left">6. Copy Bukti Lunas PBB Tahun Terakhir</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Pembatalan SPPT/SKP/STP</h4>
            <p style="text-align: left">1. Permohonan tertulis WP</p>
            <p style="text-align: left">2. Surat Kuasa Bermaterai (Jika Dikuasakan)</p>
            <p style="text-align: left">3. Asli SPPT Tahun Bersangkutan</p>
            <p style="text-align: left">4. Surat Pengantar Lurah/Kades Untuk Pengajuan Secara Kolektif</p>
            <p style="text-align: left">5. Melampirkan Bukti Pendukung Lainnya</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Keberatan Atas Pajak Terhutang</h4>
            <p style="text-align: left">1. Permohonan tertulis WP</p>
            <p style="text-align: left">2. Surat Kuasa Bermaterai (Jika Dikuasakan)</p>
            <p style="text-align: left">3. Copy KTP/KK/KITAS/Lainnya</p>
            <p style="text-align: left">4. Copy SPPT Tahun Bersangkutan</p>
            <p style="text-align: left">5. Copy Sertifikat/Surat Keterangan Tanah/AJB/IPB/IMB/Surat Keterangan Lurah/Kades/Lainnya</p>
            <p style="text-align: left">6. Copy Bukti Lunas PBB</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>Pengurangan Atas Pajak Terhutang/Denda Administrasi</h4>
            <p style="text-align: left">1. Permohonan tertulis WP</p>
            <p style="text-align: left">2. Surat Kuasa Bermaterai (Jika Dikuasakan)</p>
            <p style="text-align: left">3. Copy KTP/KK/KITAS/Lainnya</p>
            <p style="text-align: left">4. Copy SPPT Tahun Bersangkutan</p>
            <p style="text-align: left">5. Copy SK Pensiun/Tanda Penerima Uang Pensiun/Surat Pernyataan Dari Lurah/Kades/Ket. Lain Yang Dianggap Sama</p>
            <p style="text-align: left">6. Copy Bukti Lunas PBB Tahun Terakhir</p>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <h4>SK NJOP</h4>
            <p style="text-align: left">1. Permohonan tertulis WP</p>
            <p style="text-align: left">3. Surat Kuasa Bermaterai (Jika Dikuasakan)</p>
            <p style="text-align: left">3. Copy KTP/KK/KITAS/Lainnya</p>
            <p style="text-align: left">3. Copy SPPT</p>
            <p style="text-align: left">4. Copy Sertifikat/Surat Keterangan Tanah/AJB/IPB/IMB/Surat Keterangan Lurah/Kades/Lainnya</p>
            <p style="text-align: left">5. Copy Bukti Lunas PBB</p>
          </div>
        </div>
  
  
      </div>
    </div>
  </section><!-- End Services Section -->
  
@endsection