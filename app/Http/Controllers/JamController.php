<?php

namespace App\Http\Controllers;

use App\Models\Jam;
use App\Models\Jenispajak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JamController extends Controller
{
    //method auth
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //method menampilkan jam
    public function index()
    {
        //passing data jenispajak
        $jenispajaks = Jenispajak::all();
        
        //fungsi untuk mencari data nomor berdasarkan jenis pajak
        if (request()->select) {
            $select = Jenispajak::orderBy('jenis')->get();
            $jams = Jam::where('jenis_id', request()->select)->get();
        } else {
            $jams = [];
        }

        // mmenampil view dengan passing data jam dan jenis pajak
        return view('admin/data_jam/index', compact('jams','jenispajaks'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //mmethod menambah data
    public function create()
    {
        //passing data, menambah nomor antrian berdasarkan jenis pajak
        $jenispajaks = Jenispajak::all();

        //menampilkan view data nomor dengan passing data jenis pajak
        return view('admin/data_jam/create', compact('jenispajaks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     //method save data
    public function store(Request $request)
    {
        //validasi form
        $request->validate([
            'jenis_id'=>'required',
            'jam'=>'required',
        ],[
            'jenis_id.required'=>'jenis pajak Tidak Boleh Kosong',
            'jam.required'=>'jam Tidak Boleh Kosong',
        ]);

        //input data
        Jam::create([
            'jenis_id'=> $request->jenis_id,
            'jam'=> $request->jam,
        ]);

        //kembali ke tampil data dengan status
        return redirect('jams')->with('status', 'Nomor Berhasil DiTambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */
    public function show(Jam $jam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */


     //methode form edit
    public function edit(Jam $jam)
    {
        //route mengarah ke form edit
        return view('admin/data_jam/edit', compact('jam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */

    //method update data
    public function update(Request $request, Jam $jam)
    {
        //validasi 
        $request->validate([
            'jam'=>'required',
        ],[
            'jam.required'=>'Waktu Tidak Boleh Kosong',
        ]);

        $jam->jam = $request->jam;
        $jam->save();

        //kembali ke tampil data dengan status
        return redirect('jams')->with('status', 'Nomor Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jam  $jam
     * @return \Illuminate\Http\Response
     */

     //method hapus data
    public function destroy(Jam $jam)
    {
        $jam->delete();

        //kembali ke tampil data dengan status
        return redirect('jams')->with('status', 'Nomor Berhasil DiHapus!');
    }
}
