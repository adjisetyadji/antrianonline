@extends('admin.main')
@section('title1', ' Edit Nomor |')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Nomor Antrian</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Nomor</a></li>
                    <li class="active">Edit</li>
                </ol>
            </div>
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
                            <strong>Edit Nomor</strong>
                            </div>
                        <div class="pull-right">
                            {{-- route untuk kembali --}}
                            <a href="{{ url('jams') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Kembali
                            </a>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    {{-- route setelah input nomor antrian --}}
                                    <form action="{{ url('jams/'.$jam->id) }}" method="post">
                                        {{-- perlu mendeklarasikan method(sesuai dgn route) dan csrf  --}}
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label>Nomor Antrian</label>
                                            <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode', $jam->kode) }}">
                                            @error('kode')
                                            {{-- value menampilkan data yang ingin di ubah --}}
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Waktu</label>
                                            <input type="text" name="jam" class="form-control @error('jam') is-invalid @enderror" value="{{ old('jam', $jam->jam) }}">
                                            {{-- value menampilkan data yang ingin di ubah --}}
                                            @error('jam')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
@endsection