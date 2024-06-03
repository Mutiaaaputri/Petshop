@extends('layouts.app')
@section('content')

    <div class="container-sm mt-5">
        <form action="{{ route('product.update', ['product'=>'product->id']) }}" method="POST">
            @method('put')
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show">
                               {{ $error }}
                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif

                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Product</h4>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-md-6mb-3">
                    <label for="kodebarang"class="form-label">Kode Barang</label>
                    <input class="form-control @error('kodebarang') is-invalid @enderror"type="text"name="kodebarang"
                    id="kodebarang"value="{{ $errors->any()?old('kodebarang') : $product->kodebarang}}"placeholder="EnterKodebarang">
                    @error('kodebarang')
                    <div class="text-danger"><small>{{ $message}}</small></div>
                    @enderror
                   </div>
                    <div class="col-md-6mb-3">
                    <label for="namabarang"class="form-label">Nama Barang</label>
                    <input class="form-control @error('namabarang') is-invalid @enderror"type="text"name="namabarang"id="namabarang"
                    value="{{$errors->any() ?old('namabarang') : $product->namabarang }}"placeholder="EnterNamabarang">
                    @error('namabarang')
                    <div class="text-danger"><small>{{ $message}}</small></div>
                    @enderror
                    </div>
                    <div class="col-md-6mb-3">
                    <label for="jumlahbarang" class="form-label">Jumlah Barang</label>
                    <input class="form-control @error('jumlahbarang') is-invalid @enderror"type="text"name="jumlahbarang" id="jumlahbarang"
                    value="{{$errors->any() ?old('jumlahbarang') :$product->jumlahbarang}}"
                    placeholder="Enter Jumlahbarang">
                    @error('email')
                    <div class="text-danger"><small>{{ $message}}</small></div>
                    @enderror
                    </div>
                    <div class="col-md-6mb-3">
                    <label for="hargabarang"class="form-label">Harga Barang</label>
                    <input class="form-control @error('hargabarang') is invalid @enderror" 
                    type="text"name="hargabarang"id="hargabarang"value="{{ $errors->any()?old('hargabarang'): $product->hargabarang}}" placeholder="EnterHargabarang">
                    @error('age')
                    <div class="text-danger"><small>{{ $message}}</small></div>
                    @enderror
                    </div>
                    <div class="col-md-6mb-3">
                        <label for="description"class="form-label">Description</label>
                        <input class="form-control @error('description') is invalid @enderror" 
                        type="text"name="description"id="description" value="{{ $errors->any()?old('description'): $product->description}}" placeholder="EnterDescription">
                        @error('description')
                        <div class="text-danger"><small>{{ $message}}</small></div>
                        @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-md-6d-grid">
                    <a href="{{ route('product.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                        <i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6d-grid">
                    <button type="submit"class="btn btn-dark
                    btn-lgmt-3"><i class="bi-check-circle me-2"></i> Edit</button>
                        </div>
                </div>
                    </div>
            </div>
        </form>
    </div>
    @endsection