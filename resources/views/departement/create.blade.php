
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Karyawan') }}</div>
                

                <div class="card-body">
                    
                        <div class="col-md-10">
                            <form action="{{ route('departement.store') }}" method="POST" >
                            @csrf
                            <div class="row mb-3">
                                <label for="nama_departement" class="col-md-4 col-form-label text-md-end">{{ __('Departement') }}</label>
                                <div class="col-md-6">
                                    <input id="nama_departement" type="text" class="form-control @error('nama_departement') is-invalid @enderror" name="nama_departement" value="{{ old('nama_departement') }}" required autocomplete="nama_departement" autofocus>

										@error('nama_departement')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
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