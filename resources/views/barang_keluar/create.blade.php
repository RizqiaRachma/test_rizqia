
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
                                <label for="tgl_keluar" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal') }}</label>
                                <div class="col-md-4">
                                    <input id="tgl_keluar" type="date" class="form-control" name="tgl_keluar">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nik"class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="nik" name="nik">
                                        @foreach ($karyawan as $u)
                                           <option value="{{ $u->nik }}">{{ $u->nik }}</option>
                                        @endforeach
                                     </select>
                                </div>
                            </div>    
                            <div class="row mb-3">
                                <label for="nama"class="col-md-4 col-form-label text-md-end">{{ __('Nama Karyawan') }}</label>
                                <div class="col-md-4">
                                    <input id="nama" type="text" readonly class="form-control" name="nama" >
                                </div>
                            </div>                                   
                            <div class="row mb-3">
                                <label for="departement" class="col-md-4 col-form-label text-md-end">{{ __('Departement') }}</label>
                                <div class="col-md-4">
                                    <input id="departement" type="text" class="form-control" name="departement"  readonly >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <table id="example" class="table table-striped" >
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>BARANG</td>
                                        <td>LOKASI</td>
                                        <td>TERSEDIA</td>
                                        <td>QTY</td>
                                        <td>SATUAN</td>
                                        <td>KETERANGAN</td>
                                        <td>STATUS</td>
                                        <td>#</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                     
                                    </tbody>
                                </table>
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