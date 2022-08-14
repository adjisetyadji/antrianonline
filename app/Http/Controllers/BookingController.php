<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Pengunjung;
use App\Models\Booking;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      
        if (request()->start_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $bookings = DB::table('bookings')
            ->join('pengunjungs', 'bookings.pengunjungId', '=', 'pengunjungs.id')
            ->where('tanggal',[$start_date])->get();
            // Pengunjung::where('tanggal',[$start_date])->get();
        } else {
            $bookings = DB::table('bookings')
            ->join('pengunjungs', 'bookings.pengunjungId', '=', 'pengunjungs.id')
            ->where('tanggal', Carbon::now()->toDateString())->get();
            // Pengunjung::where('tanggal', Carbon::now()->toDateString())->get();
        }

        // dd($pengunjungs);
        $paginate = Booking::paginate(15);
        return view('admin/data_booking/index', compact('bookings','paginate'));
    }

    // public function destroy(Booking $booking)
    // {
    //     $pengunjung->delete();
    //     return redirect('pengunjungs')->with('status', 'Nomor Berhasil DiHapus!');
    // }
}
