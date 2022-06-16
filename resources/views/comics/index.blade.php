@extends('layouts.app')


@section('content')

<h1 class='p-5 text-center'>Comics</h1>

<div class="container">

<table class='table'>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>thumb</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>
            <th>Actions</th>
        </tr>

    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td><strong>{{$comic->title}}</strong> </td>
            <td>{{$comic->description}}</td>
            <td><a href="{{route('comics.show', $comic)}}"><img src="{{$comic->thumb}}" alt=""></a> </td>
            <td>{{$comic->price}}€</td>
            <td>{{$comic->series}}</td>
            <td class='w_10'>{{$comic->sale_date}}</td>
            <td class='w_10'>{{$comic->type}}</td>
            <td class='w_15'>View - Edit - Delete</td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>


@endsection