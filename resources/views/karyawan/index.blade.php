
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