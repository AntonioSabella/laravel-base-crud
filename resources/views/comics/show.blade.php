@extends('layouts.app')

@section('content')

<h1>{{$comic->title}}</h1>
<div class="comic">
    <img src="{{$comic->thumb}}" alt="">
    <p>{{$comic->description}}</p>
    <small>{{$comic->price}}€</small>
</div>


@endsection