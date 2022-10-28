
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Satuan Barang') }}</div>
                

                <div class="card-body">
                    
                        <div class="col-md-10">
                            <form action="{{ route('satuan.store') }}" method="POST" >
                            @csrf
                            <div class="row mb-3">
                                <label for="satuan" class="col-md-4 col-form-label text-md-end">{{ __('Satuan Barang') }}</label>
                                <div class="col-md-6">
                                    <input id="satuan" type="text" class="form-control @error('satuan') is-invalid @enderror" name="satuan" value="{{ old('satuan') }}" required autocomplete="satuan" autofocus>

										@error('satuan')
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