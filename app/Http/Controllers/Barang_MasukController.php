<?php

namespace App\Http\Controllers;

use App\Models\Barang_masuk;
use App\Models\Supplier;
use App\Models\daftar_barang;
use DB;
use Illuminate\Http\Request;

class Barang_MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('barang_masuk')
            ->join('daftar_barang', 'daftar_barang.id', '=', 'barang_masuk.id_barang')
            ->join('supplier', 'supplier.id', '=', 'barang_masuk.id_supplier')
            ->select('barang_masuk.id as id_masuk', 'barang_masuk.stok_masuk', 'barang_masuk.tgl_masuk', 'daftar_barang.nama_barang', 'supplier.supplier')
            ->get();
        return view('barang_masuk.index')->with('data', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang_masuk.create')->with([
            'daftar_barang' => daftar_barang::all(),
            'supplier' => Supplier::all(),
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
        $data = Barang_masuk::find($id);
        $data->delete();

        $barang = daftar_barang::find(
            $data->id_barang
        );

        $barang->qty -= $data->stok_masuk;
        $barang->save();

        return back()->with('success', 'Data Berhasil di Hapus!.');
    }
}
