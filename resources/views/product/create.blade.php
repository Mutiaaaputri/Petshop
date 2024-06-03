@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('product.store') }}"method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4> Create Product </h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6mb-3">
                    <label for="code"class="form-label">Kode Barang</label>
            <input class="form-control @error('code') is invalid @enderror" type="text"name="code"id="code"
            value="{{old('code') }}"placeholder="Enter Kodebarang">
            @error('kodebarang')
            <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>
            <div class="col-md-6mb-3">
            <label for="namabarang"class="form-label"> Nama Barang</label>
            <input class="form-control @error('namabarang') is invalid @enderror"type="text"name="namabarang"id="namabarang"
            value="{{old('namabarang') }}" placeholder="Enternamabarang">
            @error('namabarang')
            <div class="text-danger"><small>{{ $message}}</small></div>
            @enderror
            </div>
            <div class="col-md-6mb-3">
            <label for="stok_id" class="form-label">Stok </label>
            <input class="form-control @error('stok_id') is-invalid @enderror" type="text"name="stok_id" id="stok_id"value="{{old('stok_id') }}"
            placeholder="Enter stok_id">
            @error('stok')
            <div class="text-danger"><small>{{ $message}}</small></div>
            @enderror
            </div>
            <div class="col-md-6mb-3">
            <label for="harga"class="form-label">Harga Barang</label>
            <input class="form-control @error('harga') is-invalid @enderror" type="text"name="harga"id="harga"value="{{old('harga')}}"
            placeholder="Enter Harga Barang">
            @error('hargabarang')
            <div class="text-danger"><small>{{ $message}}</small></div>
            @enderror
            </div>
            <div class="col-md-6mb-3">
                <label for="description"class="form-label">Description</label>
                <input class="form-control @error('description') is-invalid @enderror" type="text"name="description"id="description"value="{{old('description')}}"
                placeholder="Enter Description">
                @error('description')
                <div class="text-danger"><small>{{ $message}}</small></div>
                @enderror
            </select>
            @error('position')
                <div class="text-danger"><small>{{ $message}}</small></div>
            @enderror
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-6d-grid">
            <a href="{{ route('Products.index') }}" class="btn
            btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i>Cancel</a>
            </div>
            <div class="col-md-6d-grid">
            <button type="submit" class="btn btn-dark btn-lgmt
           3"><i class="bi-check-circle me-2"></i>Save</button>
            </div>
            </div>
            </div>
            </div>
            </form>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
@endsection