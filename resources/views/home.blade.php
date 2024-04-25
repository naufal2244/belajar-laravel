@extends('layouts/main')



@section('isi')
<div class="container mt-4">
    <h1>Hello <?= $name;?>!! </h1>
    <h2>Anda sedang berada di {{ $hal }}</h2>
</div>
@endsection

