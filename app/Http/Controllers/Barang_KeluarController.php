<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\daftar_barang;
use Illuminate\Http\Request;

class Barang_KeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang_keluar.create')->with([
            'daftar_barang' => daftar_barang::all(),
            'karyawan' => Karyawan::all(),
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
            'tgl_masuk'           => 'required',
            'id_barang'           => 'required',
        ]);
        $save = new Barang_masuk();
        $save->tgl_masuk           = $request->tgl_masuk;
        $save->id_barang           = $request->id_barang;
        $save->id_supplier         = $request->id_supplier;
        $save->stok_masuk          = $request->stok_masuk;
        $save->save();

        $barang = daftar_barang::find(
            $request->id_barang
        );

        $barang->qty += $request->stok_masuk;
        $barang->save();

        return to_route('barang_masuk.index')->with('success', 'Data Berhasil di Tambahkan');
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
