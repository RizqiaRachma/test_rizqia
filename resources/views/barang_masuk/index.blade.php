
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
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success')}}
                        </div>
                        @endif
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
                                        <form action="{{ route('barang_masuk.destroy', $u->id_masuk) }}" method="POST">
                                            @csrf 
                                            @method('delete')
                                            
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
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