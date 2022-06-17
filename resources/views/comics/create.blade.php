@extends('layouts.app')

@section('content')

<div class="container my-4">
     <h1>Add a new Comic</h1>
     @include('partials.error')
<form action="{{route('comics.store')}}" method="post">
    @csrf 

   <div class="form-group d-flex flex-column">
    <label for="title"><strong>Title</strong>:</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Insert comic title" aria-describedby="titleHelper">
    <small id="titleHelper" class="text-muted">Insert comic name</small>
     @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
     @enderror
   </div>

   <div class="form-group d-flex flex-column">
    <label for="thumb"><strong>Thumb</strong>:</label>
    <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb')}}" placeholder="Insert comic thumb" aria-describedby="thumbHelper">
    <small id="thumbHelper" class="text-muted">Insert comic thumb</small>
    @error('thumb')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
   </div>

   <div class="form-group d-flex flex-column">
    <label for="price"><strong>Price</strong>:</label>
    <input type="number" name="price" id="price" class="form-control  @error('price') is-invalid @enderror" value="{{old('price')}}" placeholder="Insert comic price" aria-describedby="thumbHelper">
    <small id="thumbHelper" class="text-muted">Insert comic price</small>
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
   </div>

   <div class="form-group d-flex flex-column">
    <label for="series"><strong>Series</strong>:</label>
    <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" value="{{old('series')}}" placeholder="Insert comic series" aria-describedby="thumbHelper">
    <small id="thumbHelper" class="text-muted">Insert comic series</small>
    @error('series')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
   </div>

   <div>
        <label for="description" class="form-label"><strong>Description</strong>:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="4">{{old('description')}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
   </div>
   <button type="submit" class="btn btn-primary mt-2">Add a new Comic</button>

</form>
</div>



@endsection