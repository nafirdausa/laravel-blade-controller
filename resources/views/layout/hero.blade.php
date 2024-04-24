<!-- resources/views/cafe/hero.blade.php -->
@extends('layout.master')
@section('title', 'Data Mahasiswa')
@section('css')
@endsection

@section('hero')
<div class="container" style="margin-top: 100px;">
    <div class="d-flex align-items-center">
        <div class="p-2">
            <h5>Experience the Luxurious Taste of</h5>
            <h1 class="d-inline-block">🌟Red Velvet Latte🌟</h1>
        <p>Indulge in our delighful Red Velvet Latte, a unique blend crafted to elevate coffe experience. Immerse yourself in the rich flavors of creamy cocoa and velvety smoothness, perfectly combined with our fitnest espresso. Savor the moment. Savor the flavor. Discover Red Velvet Latte today! 🍫☕</p>
        <button class="btn btn-info fw-bold">Buy Now!</button>
        </div>
        <div class="p-2">
            <img class="rounded" src="{{ asset('images/red-velvet.JPG') }}" alt="gambar red velvet latte" srcset="" width="350px" height="350px">
        </div>
    </div>
</div>
@endsection