<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Pengunjung;
use App\Models\Jenispajak;
use App\Models\jam;
use App\Models\Jenislayanan;

class JenislayananController extends Controller
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

        $paginate = Pengunjung::paginate(15);
        return view('admin/data_layanan/index', compact('pengunjungs','paginate'));
    }
}
