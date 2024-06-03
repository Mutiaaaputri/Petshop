@extends('layouts.app')
@section('content')


<div class="container-md d-flex justify-content-center">
    <div class="container-md mt-4">
        <p class="h4 fw-normal "> We keep pet with pleasure
        <p class="display-4 fw-bold">Selamat Datang Admin</p>
        </p>
    </div>
    <div class="container-md mt-4">
        <img class="img-fluid float-lg-start"
            src="{{ Vite::asset('resources/image/file.png') }}" alt="bg">
    </div>
</div>
@endsection

