<?php

namespace App\Http\Controllers;

use App\Models\daftar_barang;
use App\Models\Kategori_barang;
use App\Models\Lokasi;
use App\Models\Satuan;
use DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = DB::table('daftar_barang')
            ->join('kategori_barang', 'kategori_barang.id', '=', 'daftar_barang.id_kategori')
            ->join('satuan', 'satuan.id', '=', 'daftar_barang.id_satuan')
            ->join('lokasi', 'lokasi.id', '=', 'daftar_barang.id_lokasi')
            ->select('daftar_barang.id as id_barang', 'daftar_barang.nama_barang', 'daftar_barang.qty', 'kategori_barang.kategori', 'satuan.satuan', 'lokasi.lokasi')
            ->get();
        return view('barang.index')->with('data', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create')->with([
            'satuan' => Satuan::all(),
            'lokasi' => Lokasi::all(),
            'kategori_barang'   => Kategori_barang::all(),
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
            'nama_barang'           => 'required|unique:daftar_barang',
        ]);
        $save = new daftar_barang();
        $save->nama_barang         = $request->nama_barang;
        $save->id_kategori         = $request->id_kategori;
        $save->id_lokasi           = $request->id_lokasi;
        $save->qty                 = $request->qty;
        $save->id_satuan           = $request->id_satuan;
        $save->save();

        return to_route('barang.index')->with('success', 'Data Berhasil di Tambahkan');
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


        return view('barang.edit')->with([
            'daftar_barang'     => daftar_barang::find($id),
            'satuan'            => Satuan::all(),
            'lokasi'            => Lokasi::all(),
            'kategori_barang'   => Kategori_barang::all(),
        ]);
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
        $request->validate([
            'nama_barang'           => 'required|unique:daftar_barang',
        ]);
        $save = daftar_barang::find($id);
        $save->nama_barang         = $request->nama_barang;
        $save->id_kategori         = $request->id_kategori;
        $save->id_lokasi           = $request->id_lokasi;
        $save->qty                 = $request->qty;
        $save->id_satuan           = $request->id_satuan;
        $save->save();

        return to_route('barang.index')->with('success', 'Data Berhasil di Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = daftar_barang::find($id);
        $data->delete();

        return back()->with('success', 'Data Berhasil di Hapus!.');
    }
}
