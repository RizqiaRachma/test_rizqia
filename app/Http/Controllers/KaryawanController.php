<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Departement;
use DB;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('karyawan')
            ->join('departement', 'departement.id', '=', 'karyawan.id_departement')
            ->get();
        return view('karyawan.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create')->with([
            'departement' => Departement::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'           => 'required|unique:Karyawan',
            'nama'          => 'required',
            'jabatan'       => 'required',
            'id_departement' => 'required',
        ]);
        $save = new Karyawan;
        $save->nik              = $request->nik;
        $save->nama             = $request->nama;
        $save->jabatan          = $request->jabatan;
        $save->id_departement   = $request->id_departement;
        $save->save();

        return to_route('karyawan.index')->with('success', 'Data Berhasil di Tambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
