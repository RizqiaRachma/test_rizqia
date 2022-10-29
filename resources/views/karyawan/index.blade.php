
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Karyawan') }}</div>
                

                <div class="card-body">
                    <div class="col-md-6">
                        <a href="{{ route('karyawan.create') }}"><button type="button" class="btn btn-primary">Tambah Karyawan</button></a>
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
                                <td>NIK</td>
                                <td>NAMA</td>
                                <td>JABATAN</td>
                                <td>DEPARTEMENT</td>
                                <td>#</td>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $u)
                                <tr>
                                    <td>{{ $u->nik }}</td>
                                    <td>{{ $u->nama }}</td>
                                    <td>{{ $u->jabatan }}</td>
                                    <td>{{ $u->nama_departement }}</td>
                                    <td> 
                                       <form action="{{ route('karyawan.destroy', $u->nik) }}" method="POST">
                                        @csrf 
                                        @method('delete')
                                        <a href="{{ route('karyawan.edit', $u->nik) }}" class="btn btn-success btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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