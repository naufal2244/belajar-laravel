@extends('layouts/main')
  
  
@section('isi')
    <div class="container mt-4">

    @foreach ($post as $tempe)
    <article>
    <h2> <a href= "{{ $tempe["slug"] }}" >{{ $tempe["judul"] }}</a></h2>
    <h4>{{ $tempe["penulis"] }}</h4>
    <p>{{$tempe["isi"] }}</p>
    <hr>
    </article>
    @endforeach
    
    
    </div>
@endsection