
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Barang') }}</div>
                

                <div class="card-body">
                    
                        <div class="col-md-10">
                            <form action="{{ route('barang.store') }}" method="POST" >
                            @csrf
                            <div class="row mb-3">
                                <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama Barang') }}</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" required autocomplete="nama_barang" autofocus>

										@error('nama_barang')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="id_kategori"class="col-md-4 col-form-label text-md-end">{{ __('Kategori') }}</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="id_kategori" name="id_kategori">
                                        @foreach ($kategori_barang as $u)
                                           <option value="{{ $u->id }}">{{ $u->kategori }}</option>
                                        @endforeach
                                     </select>
                                </div>
                                <div class="col md-3">
                                    <a href="{{ route('kategori.create') }}"><button type="button" class="btn btn-primary">+</button></a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="id_lokasi"class="col-md-4 col-form-label text-md-end">{{ __('Lokasi') }}</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="id_lokasi" name="id_lokasi">
                                        @foreach ($lokasi as $u)
                                           <option value="{{ $u->id }}">{{ $u->lokasi }}</option>
                                        @endforeach
                                     </select>
                                </div>
                                <div class="col md-3">
                                    <a href="{{ route('lokasi.create') }}"><button type="button" class="btn btn-primary">+</button></a>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="qty" class="col-md-4 col-form-label text-md-end">{{ __('QTY') }}</label>
                                <div class="col-md-6">
                                    <input id="qty" type="text" class="form-control" name="qty"  required >
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="id_satuan"class="col-md-4 col-form-label text-md-end">{{ __('Satuan') }}</label>
                                <div class="col-md-4">
                                    <select class="form-control" id="id_satuan" name="id_satuan">
                                        @foreach ($satuan as $u)
                                           <option value="{{ $u->id }}">{{ $u->satuan }}</option>
                                        @endforeach
                                     </select>
                                </div>
                                <div class="col md-3">
                                    <a href="{{ route('satuan.create') }}"><button type="button" class="btn btn-primary">+</button></a>
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