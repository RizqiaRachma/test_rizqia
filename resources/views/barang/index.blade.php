
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Barang') }}</div>
                

                <div class="card-body">
                    <div class="col-md-6">
                        <a href="{{ route('barang.create') }}"><button type="button" class="btn btn-primary">Tambah Barang</button></a>
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
                                <td>NAMA</td>
                                <td>KATEGORI</td>
                                <td>LOKASI</td>
                                <td>QTY</td>
                                <td>SATUAN</td>
                                <td>#</td>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $u)
                                <tr>
                                    <td>{{ $u->nama_barang }}</td>
                                    <td>{{ $u->kategori }}</td>
                                    <td>{{ $u->lokasi }}</td>
                                    <td>{{ $u->qty }}</td>
                                    <td>{{ $u->satuan }}</td>
                                    <td> 
                                        <form action="{{ route('barang.destroy', $u->id_barang) }}" method="POST">
                                            @csrf 
                                            @method('delete')
                                            <a href="{{ route('barang.edit', $u->id_barang) }}" class="btn btn-success btn-sm">Edit</a>
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