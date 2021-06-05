<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = DB::table('pasien')
        ->get();
        return view('pasien0060' , ['pasien' => $pasien]);
    }

    public function join()
    {
        $pasien = DB::table('pasien')
        ->join('kamar', 'pasien.id', '=', 'kamar.id_pasien')
        ->join('dokter', 'kamar.id_dokter', '=', 'dokter.id')
        ->select('pasien.id', 'pasien.nama', 'pasien.alamat' , 'dokter.nama AS nama_dokter' , 'dokter.jabatan')
        ->get();
        return view('join0060' , ['pasien' => $pasien]);
    }

    public function cari(Request $request){
        $cari = $request->lihat;
        $pasien=DB::table('pasien')
        ->where('nama','like',"%".$cari."%")->paginate();
        return view('pasien0060',['pasien'=>$pasien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('pasien_tambah0060');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pasien')
        ->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect('/pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = DB::table('pasien')->where('id', $id)->get();
        return view('pasien_edit0060', ['pasien' => $pasien]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('pasien')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
        return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        DB::table('pasien')
        ->where('id', $id)->delete();
        return redirect('/pasien');
    }
}
