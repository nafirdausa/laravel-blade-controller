<!-- resources/views/cafe/list.blade.php -->
@extends('layout.master')
@section('title', 'Data Mahasiswa')
@section('css')
@endsection

@section('list')
<div class="container bg-info rounded mb-5 p-3" style="margin-top: 100px;" >
    <h1 class="text-center">Product</h1> 
    <hr width="50px" style="margin-left: auto; margin-right: auto; height:3px; color:black;background-color:black;">
    <div class="row row-cols-1 row-cols-md-4 g-3 mt-2">
        @foreach ($menu as $item)
        <div class="col"> 
            <div class="card h-100">
                <img src="{{ asset('images/'.$item['img']) }}" class="card-img-top rounded" alt="{{ $item['nm_kopi'] }}" height="250px">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{ $item['nm_kopi'] }}</h5>
                        <button class="btn btn-info fw-normal">Rp. {{ number_format($item['harga'], 0, ',', '.') }}</button>
                    </div>
                    <p class="card-text mt-5">{{ $item['deskripsi'] }}</p>
                    <button class="btn btn-primary w-100 mt-2">Pesan Sekarang</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
