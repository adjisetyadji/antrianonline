@extends('admin.main')
@section('title1', ' Tambah Nomor |')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Metode Antrian</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                            <strong>Simulasi</strong>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('metode') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-undo"></i>Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="my-2">
                                <form action="metode" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" name="start_date">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                
                                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                    <div class="col">
                                            <label>Jumlah Pengunjung</label>
                                            <input id="lamda"  class="form-control" value="{{ $jumlah}}"><br>
                                    </div>
                                    {{-- <div class="col">
                                        <div class="form-group">
                                            <label>Lama Pelayanan</label>
                                            <input type="number" id="lamda"  class="form-control" autofocus>
                                        </div>
                                    </div> --}}
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Jumlah Loket</label>
                                            <input id="server" class="form-control" value="4"><br>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Lama Pelayanan</label>
                                            <input type="number" id="miu"  class="form-control" autofocus>
                                        </div>
                                    </div>
                                    
                                </div>
                                    <button id="button" class="btn btn-success pull-right">Hitung</button>
                            
                                    <table id="bootstrap-data-table" class="table  table-bordered">
                                        <thead>
                                          <tr>
                                            <td>Tingkat kesibukan loket</td>
                                            <td>Probabilitas WP dalam layanan</td>
                                            <td>Jumlah WP dalam antrian</td>
                                            <td>Waktu WP dalam antrian</td>
                                            <td>Waktu WP dalam layanan</td>
                                            <td>Jumlah WP dalam sistem</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th id="hasilp"></th>
                                            <th id="hasilpo"></th>
                                            <th id="hasillq"></th>
                                            <th id="hasilwq"></th>
                                            <th id="hasilw"></th>
                                            <th id="hasill"></th>
                                        </tr>
                                        </tbody>
                                      </table>
                                     <script type="text/javascript">
                                     var lamda = document.getElementById("lamda")
                                     var miu = document.getElementById("miu")
                                     var server = document.getElementById("server")
                                     var button = document.getElementById("button")
                                     
                                     button.addEventListener("click", function(e){
                                         e.preventDefault();
                                         var ld = lamda.value;
                                         var m = miu.value;
                                         var s = server.value;

                                        //  hitung p
                                         var p = ld/(m*s)
                                         var p1 = Math.round(p)
                                         hasilp.innerHTML = `${p1}`;

                                        //  hitung po
                                         var po = 1-p
                                         var po1 = Math.round(po*60) 
                                         hasilpo.innerHTML = `${po1} menit`;

                                        // hitung lq
                                         var f = 1
                                         for (var i = s; i>0; i--) {
                                           f*= i;  
                                         }
                                         var b = po*(Math.pow((ld/m), s))*p
                                         var  c = f*(Math.pow((1-p), 2))
                                         var lq = b/c
                                         var lq1 = Math.round(lq)
                                         hasillq.innerHTML = `${lq1} orang`;

                                         // hitung wq
                                         var wq = (lq/ld)
                                         var wq1 = Math.round(wq*60)  
                                         hasilwq.innerHTML = `${wq1} menit`; 

                                         // hitung w
                                         var w = wq+(1/m)
                                         var w1 = Math.round(w*60) 
                                
                                         hasilw.innerHTML = `${w1} menit`;

                                         // hitung l
                                         var  l = Math.round(ld*w) 
                                         hasill.innerHTML = `${l} orang`;

                                     })

                                          
                                    </script>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection