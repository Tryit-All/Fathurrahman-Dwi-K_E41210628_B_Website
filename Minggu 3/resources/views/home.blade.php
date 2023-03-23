@extends('app')

@section('content')
<div class="jumbotron jumbotron-fluide">
    <div class="container">
        <h1 class="display-4">This Home Page</h1>
        <p class="lead">Hello this is home page</p>
    </div>
    {{--mengambil nilai nama yang kirim melalui controller--}}
    <p>Nama : {{ $nama }}</p>
    <p>Identitas</p>
    <ul>
        {{--mengambil nilai dataDiri yang kirim melalui controller--}}
        @foreach($dataDiri as $a)
        <li>{{ $a }}</li>
        @endforeach
    </ul>
</div>
@endsection