
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
                                        <a href="" class="btn btn-success btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Edit</a>
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