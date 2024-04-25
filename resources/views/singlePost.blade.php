@extends('layouts/main')
   
    @section('isi')
    <div class="container mt-4">

    <h1>POLLOS!!</h1>
    <article class="mt-3">
    <h2> {{ $data["judul"] }} </h2>
    <h4>{{ $data["penulis"] }}</h4>
    <p>{{ $data["isi"] }}</p>
    
    </article>
    
    <a class= "mt-5" href="/blog">KEMBALI</a>
    </div>
@endsection