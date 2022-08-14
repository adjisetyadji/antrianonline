@extends('admin.main')
@section('title1', ' Data Nomor |')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Layanan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Layanan</strong>
                        </div>
                    <div class="card-body table-responsive">
                        <div class="my-2">
                            <form action="jenislayanans" method="GET">
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" name="start_date">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Jenis pajak</th>
                        <th>Jenis Layanan</th>
                        <th>NOP</th>
                        <th>Kecamatan</th>
                        <th>Alamat Objek</th>
                        <th>Tanggal</th>
                        <th>Dilayani</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengunjungs as $key=> $pengunjungs) 
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $pengunjungs ->jenispajaks['jenis'] }}</td>
                        <td>{{ $pengunjungs ->jenislayanans['layanan'] }}</td>
                        <td>{{ $pengunjungs ->nop }}</td>
                        <td>{{ $pengunjungs ->kec }}</td>
                        <td>{{ $pengunjungs ->alamatobjek }}</td>
                        <td>{{ $pengunjungs ->tanggal }}</td>
                        <td>{{ $pengunjungs ->jams['jam'] }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                  <div class="pull-right">
                    {{ $paginate->links('pagination::bootstrap-4') }}
                  </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection