<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use Carbon\Carbon;

class MetodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if (request()->start_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $pengunjungs = Pengunjung::where('tanggal',[$start_date])->get();
        } else {
            $pengunjungs = Pengunjung::where('tanggal', Carbon::now()->toDateString())->get();
        }

        $jumlah = $pengunjungs->count();

        // dd($jumlah);

        
        
        return view('admin/metode/index', compact('jumlah'));
    
    }
}
