<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\Pengunjung;
use App\Models\jam;

class CarinomorController extends Controller
{
    public function index()
    {
        $kode=Booking::latest();
        $antrian = Pengunjung::latest();

        if(request('cari')){
            $kode = DB::table('bookings')
            ->join('pengunjungs' , 'bookings.pengunjungId', 'pengunjungs.id')
            ->where('nik', request('cari'))->get();
            $antrian = Pengunjung::where('nik', request('cari'))->get();
        }else{
            return redirect()->back()->with(['alert' => 'Maaf, jam sudah penuh, Silahkan pilih jam atau tanggal yang lain']);
        }

        // dd($antrian);
        return view ('carinomor', compact('antrian', 'kode'));
    }
}
