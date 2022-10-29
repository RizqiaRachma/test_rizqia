
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Barang Masuk') }}</div>
                

                <div class="card-body">
                    <div class="col-md-6">
                        <a href="{{ route('barang_masuk.create') }}"><button type="button" class="btn btn-primary">Tambah Stok</button></a>
                        </div>
                        <br>
                        <table id="example" class="table table-striped" >
                            <thead>
                            <tr>
                                <td>TANGGAL</td>
                                <td>NAMA</td>
                                <td>SUPPLIER</td>
                                <td>QTY</td>
                                <td>#</td>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $u)
                                <tr>
                                    <td>{{ $u->tgl_masuk }}</td>
                                    <td>{{ $u->nama_barang }}</td>
                                    <td>{{ $u->supplier }}</td>
                                    <td>{{ $u->stok_masuk }}</td>
                                    <td> 
                                        <a href="" class="btn btn-success btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>                                    
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection