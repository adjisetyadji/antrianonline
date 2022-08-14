<form wire:submit.prevent="formregis" method="POST">
    @method('PUT')
    @csrf

        {{-- STEP 1 --}}

        @if ($step == 1)

                    <div class="form-section">
                        <label class="label">NIK</label>
                        <input class="form-control" id="nik" type="number" wire:model="nik" autofocus required>
                        <span class="text-danger">@error('nik'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Nama</label>
                        <input  class="form-control" type="text" wire:model="nama" required>
                        <span class="text-danger">@error('nama'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Status Pengunjung</label>
                        <select class="form-control" wire:model="status" required>
                            <option selected>Pilih</option>
                            <option value="wajib pajak">Wajib Pajak</option>
                            <option value="kuasa">Kuasa</option>
                            <option value="dll">Dll</option>
                        </select>
                        <span class="text-danger"> @error('status'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section"> 
                        <label class="label">Email</label>
                        <input class="form-control" type="email" wire:model="email" required>
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">No Telp</label>
                        <input class="form-control" id="telp" type="number"wire:model="notelp" required>
                        <span class="text-danger">@error('notelp'){{ $message }}@enderror</span>
                    </div>
        @endif

        @if ($step == 2)

                    <div class="form-section">
                        <label class="label">Jenis Pajak</label>
                        <select class="form-control" wire:model="jenisId" autofocus required>
                            <option selected>Pilih</option>
                            @foreach ($jenispajaks as $item)
                            <option value="{{ $item->id }}">{{ $item->jenis }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('jenisId'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Jenis Layanan</label>
                        <select class="form-control" wire:model="layananId" required>
                            <option selected>Pilih</option>
                            @foreach ($jenislayanans as $item)
                            <option value="{{ $item->id }}">{{ $item->layanan }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('layananId'){{ $message }}@enderror</span>
                    </div> 

                    <div class="form-section">
                        <label class="label">Nomor Objek Pajak</label>
                            <input class="form-control" id="nop" type="number" wire:model="nop" required>
                            <span class="text-danger">@error('nop'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Kecamatan</label>
                            <input class="form-control" type="text" wire:model="kec" required>
                            <span class="text-danger">@error('kec'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Alamat Objek Pajak</label>
                            <input class="form-control" type="text" wire:model="alamatobjek" required>
                            <span class="text-danger">@error('alamatobjek'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Tanggal Kunjungan</label>
                            <input class="form-control" type="date" wire:model="tanggal" required>
                            <span class="text-danger">@error('tanggal'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-section">
                        <label class="label">Waktu Kunjungan</label>
                        <select class="form-select" size="4" aria-label="size 5 select example" wire:model="jamId" required>
                            @foreach ($jams as $item)
                            <option value="{{ $item->id }}">{{ $item->jam }}</option>
                            @endforeach
                          </select>
                        <span class="text-danger">@error('jamId'){{ $message }}@enderror</span>
                    </div>

                    @if (session('alert'))
                        <br>
                        <div class="alert alert-danger">
                            {{ session('alert') }}
                        </div>
                    @endif
        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            @if ($step == 1)
                <div></div>
            @endif

            @if ($step == 2)
                <button type="button" class="btn btn-md btn-success" wire:click="back()">Back</button>
            @endif
            
            @if ($step == 1 )
                <button type="button" class="btn btn-md btn-success" wire:click="next()">Next</button>
            @endif
            
            @if ($step == 2)
                 <button type="submit" class="btn btn-md btn--green">Submit</button>
            @endif
        </div>
        
    </form>
