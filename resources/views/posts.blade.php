@extends('layouts/main')
  
  
@section('isi')
    <div class="container mt-4">

    @foreach ($post as $tempe)
    <article>
    <h2> <a href= "{{ $tempe["id"] }}" >{{ $tempe->title }}</a></h2>
    
    <p>{{$tempe ->sebagian }}</p>
    <hr>
    </article>
    @endforeach
    
    
    </div>
@endsection