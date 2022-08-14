<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Pengunjung;
use App\Models\Jam;
use App\Models\Booking;
use App\Models\Jenispajak;
use App\Models\Jenislayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MultiStepForm extends Component
{
    public $nik;
    public $nama;
    public $status;
    public $email;
    public $notelp;
    public $kec;
    public $alamatobjek;
    public $nop;
    public $layananId;
    public $tanggal;
    public $jenisId;
    public $jenis;
    public $jamId;
    public $jenislayanans;
    public $jams;
    public $kode;
    public $kdJenis;
    public $nobooking;
    public $jenispajaks;
    public $step = 1;

    



    public function render()
    {
        $pengunjungs = Pengunjung::with('jams','jenispajaks','jenislayanans');
        return view('livewire.multi-step-form');
       
    }


    public function next(){
        $this->resetErrorBag();
        $this->validateData();
         $this->step++;
    }

    public function back(){
        $this->resetErrorBag();
        $this->step--;
    }

    public function validateData(){

        if($this->step == 1){
            $this->validate([
                'nik'=>'required|min:16|unique:pengunjungs',
                'nama'=>'required|min:3',
                'status'=>'required',
                'email'=>'required|email:dns',
                'notelp'=>'required|unique:pengunjungs',
                
            ]);
        }
    }

    public function mount(){
        $this->step = 1;
        $this->jenispajaks = Jenispajak::orderby('jenis')->get();

        $this->updatedJenisID();
    }

    public function updatedJenisID()
    {
        if ($this->jenisId !='') {
            $this->jenislayanans = Jenislayanan::where('jenis_id', $this->jenisId)->get();
            $this->jams = Jam::where('jenis_id', $this->jenisId)->get();
        }else{
            $this->jams = [];
            $this->jenislayanans = [];
        }
    }


    public function formregis(){
        $this->resetErrorBag();
        if($this->step == 2){
            $this->validate([
            'jenisId'=>'required',
            'layananId'=>'required',
            'nop'=>'required|unique:pengunjungs',
            'kec'=>'required|min:5',
            'alamatobjek'=>'required',
            'tanggal'=>'required|date|after:today',
            'jamId'=>'required',
            
            ]);
        }

        $pengunjung = array(
            'nik'=> $this->nik,
            'nama'=> $this->nama,
            'status'=> $this->status,
            'email'=> $this->email,
            'notelp'=> $this->notelp,
            'jenisId'=> $this->jenisId,
            'layananId'=> $this->layananId,
            'nop'=> $this->nop,
            'kec'=> $this->kec,
            'alamatobjek'=> $this->alamatobjek,
            'tanggal'=> $this->tanggal,
            'jamId'=> $this->jamId,
        );

        $cek = Pengunjung::where(['jenisId' => $this->jenisId, 'tanggal' => $this->tanggal, 'jamId' => $this->jamId])->count();
        if($cek > 3) {
            return redirect()->back()->with(['alert' => 'Maaf, jam sudah penuh, Silahkan pilih jam atau tanggal yang lain']);
        } else {

            $id = Pengunjung::create($pengunjung)->id;

            $ambiltgl =  DB::table('pengunjungs')
            ->where('pengunjungs.id', $id)
            ->first();

            $month = Carbon::parse($ambiltgl->tanggal)->format('m');

            $data =  DB::table('bookings')
            ->join('pengunjungs', 'bookings.pengunjungId', '=', 'pengunjungs.id')
            ->where(['jenisId' => $this->jenisId])
            ->whereMonth('tanggal', $month)
            ->count();

            $jenis =  DB::table('pengunjungs')
            ->join('jenispajaks', 'pengunjungs.jenisId', '=', 'jenispajaks.id')
            ->where('pengunjungs.id', $id)
            ->first();
            
            $tipe = substr($jenis->kdJenis, -1);
            $tgl = Carbon::parse($ambiltgl->tanggal)->format('ym');

            $urut = " ";

            if ($data == 0) {
                $urut = "00001";
                
            } else {
                $ambil = DB::table('bookings')
                ->join('pengunjungs', 'bookings.pengunjungId', '=', 'pengunjungs.id')
                ->where(['jenisId' => $this->jenisId])
                ->orderBy('pengunjungId', 'desc')
                ->first();

                    $tmp = (int)substr($ambil->kode, -5)+1;
                    $urut = sprintf("%05s", $tmp);
                
            }
            $nomer = $tipe. $tgl .$urut;

            $kode = array(
                'kode' => $nomer,
                'pengunjungId' => $id
            );

            $nobooking = Booking::create($kode)->id;

            $pengunjungId = DB::table('bookings')
                ->join('pengunjungs', 'bookings.pengunjungId', '=', 'pengunjungs.id')
                ->where('bookings.id', $nobooking)
                ->first();

            $jam = DB::table('pengunjungs')
                ->join('jams', 'pengunjungs.jamId', '=', 'jams.id')
                ->where('pengunjungs.id', $id)
                ->first();
            $layanan = DB::table('pengunjungs')
                ->join('jenislayanans', 'pengunjungs.layananId', '=', 'jenislayanans.id')
                ->where('pengunjungs.id', $id)
                ->first();

            $urut = DB::table('bookings')
                ->select('kode')
                ->where('bookings.id', $nobooking)
                ->first();

            $sukses = [
                'id' => $nobooking,
                'kode'=> $urut->kode,
                'layanan'=> $layanan->layanan,
                'jam'=> $jam->jam,
                'tanggal'=> $this->tanggal,
            ];
            return redirect()->route('formsukses', $sukses);
        }

          
    }

  
}