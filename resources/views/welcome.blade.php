@extends ('layouts.app')

@section('content')

<h1 class='text-center'> Ecco la pagina iniziale</h1>

<div class="container bg-dark w-75 p-5">
    <div class="row row-cols-4 gy-4">
        @forelse($comics as $comic)
        <div class="col">
            <a href="{{route('comics.show', $comic)}}">
                <div class="card">
                    <img width='200' class="card-img-top img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    <div class="card-body">
                        <h5 class="card-title fixed_height">{{$comic->title}}</h5>
                        <p class='fixed_height_small'><strong>{{$comic->series}}</strong></p>
                        <p class="card-text comic_description">{{$comic->description}}</p>
                        <small>{{$comic->price}} €</small>
                    </div>
                </div>
            </a>
           <!--  <div class="comic_card d-flex flex-column justify-content-center align-items-center">
                <div class="card_image">
                <img class='img-fluid' src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
                <h4>{{$comic->title}}</h4>
                <p><strong>{{$comic->series}}</strong></p>
                <p class='comic_description'>{{$comic->description}}</p>
                <small>{{$comic->price}} €</small>
            </div> -->
        </div>
        @empty
        <div class="col">
            No comics found
        </div>
        @endforelse

    </div>
</div>

@endsection
