
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Karyawan') }}</div>
                

                <div class="card-body">
                    
                        <div class="col-md-10">
                            <form action="{{ route('karyawan.update', $karyawan->nik) }}" method="POST" >
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="nik" class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>
                                <div class="col-md-6">
                                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $karyawan->nik }}" required autocomplete="nik" autofocus>

										@error('nik')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="nama" value="{{ $karyawan->nama }}" required >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jabatan" class="col-md-4 col-form-label text-md-end">{{ __('Jabatan') }}</label>
                                <div class="col-md-6">
                                    <input id="jabatan" type="text" class="form-control" name="jabatan" value="{{ $karyawan->jabatan }}" required >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="id_departement"class="col-md-4 col-form-label text-md-end">{{ __('Departement') }}</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="id_departement" name="id_departement">
                                        @foreach ($departement as $u)
                                           <option value="{{ $u->id }}" @if($u->id === $karyawan->id_departement)  selected @endif>{{ $u->nama_departement }}</option>
                                        @endforeach
                                     </select>
                                </div>
                                <div class="col md-3">
                                    <a href="{{ route('departement.create') }}"><button type="button" class="btn btn-primary">+</button></a>
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