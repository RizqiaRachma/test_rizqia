
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Stok') }}</div>
                

                <div class="card-body">
                    
                        <div class="col-md-10">
                            <form action="{{ route('barang_masuk.store') }}" method="POST" >
                            @csrf
                            <div class="row mb-3">
                                <label for="tgl_masuk" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal') }}</label>
                                <div class="col-md-6">
                                    <input id="tgl_masuk" type="date" class="form-control" name="tgl_masuk"  required >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="id_barang"class="col-md-4 col-form-label text-md-end">{{ __('Nama Barang') }}</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="id_barang" name="id_barang">
                                        @foreach ($daftar_barang as $u)
                                           <option value="{{ $u->id }}">{{ $u->nama_barang }}</option>
                                        @endforeach
                                     </select>
                                </div>
                                <div class="col md-3">
                                    <a href="{{ route('barang.create') }}"><button type="button" class="btn btn-primary">+</button></a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="id_supplier"class="col-md-4 col-form-label text-md-end">{{ __('Supplier') }}</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="id_supplier" name="id_supplier">
                                        @foreach ($supplier as $u)
                                           <option value="{{ $u->id }}">{{ $u->supplier }}</option>
                                        @endforeach
                                     </select>
                                </div>
                                <div class="col md-3">
                                    <a href="{{ route('supplier.create') }}"><button type="button" class="btn btn-primary">+</button></a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="qty" class="col-md-4 col-form-label text-md-end">{{ __('QTY') }}</label>
                                <div class="col-md-6">
                                    <input id="qty" type="text" class="form-control" name="stok_masuk"  required >
                                </div>
                            </div>
                            
                            
    
    
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Simpan') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection