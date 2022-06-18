@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>{{$comic->title}}</h1>
    <div class="comic">
        <img src="{{$comic->thumb}}" alt="">
        <p>{{$comic->description}}</p>
        <small>{{$comic->price}}€</small>
    </div>
</div>



@endsection