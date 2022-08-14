<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jam;
use App\Models\Pengunjung;
use Carbon\Carbon;

class HomeController extends Controller
{
    //method auth login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //method dashboard
    public function index()
    {
        // $jams=Jam::simplePaginate(1);

        $now = Carbon::now()->format('d-m-y');

        $pbb = Pengunjung::where('jenisId', 1)
        ->whereDate('tanggal', $now)->count();

        $bphtb = Pengunjung::where('jenisId', 2)
        ->whereDate('tanggal', $now)->count();

        $air = Pengunjung::where('jenisId', 3)
        ->whereDate('tanggal', $now)->count();

        $hiburan = Pengunjung::where('jenisId', 4)
        ->whereDate('tanggal', $now)->count();

        $hotel = Pengunjung::where('jenisId', 5)
        ->whereDate('tanggal', $now)->count();

        $mineral = Pengunjung::where('jenisId', 6)
        ->whereDate('tanggal', $now)->count();

        $parkir = Pengunjung::where('jenisId', 7)
        ->whereDate('tanggal', $now)->count();

        $reklame = Pengunjung::where('jenisId', 8)
        ->whereDate('tanggal', $now)->count();

        $restoran = Pengunjung::where('jenisId', 9)
        ->whereDate('tanggal', $now)->count();

        

        // dd($now);

        //menampilkan data jam
        return view ('admin/home', compact('pbb','bphtb','air','hiburan',
        'hotel', 'mineral', 'parkir','reklame', 'restoran', 'now'));
    }
}
