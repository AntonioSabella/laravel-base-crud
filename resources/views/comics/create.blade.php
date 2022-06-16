@extends('layouts.app')

@section('content')

<div class="container my-4">
<form action="{{route('comics.store')}}" method="post">
    @csrf 

   <div class="form-group d-flex">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" placeholder="Insert comic title" aria-describedby="titleHelper">
    <small id="titleHelper" class="text-muted">Insert comic name</small>
   </div>

   <div class="form-group d-flex">
    <label for="thumb">Thumb:</label>
    <input type="text" name="thumb" id="thumb" placeholder="Insert comic thumb" aria-describedby="thumbHelper">
    <small id="thumbHelper" class="text-muted">Insert comic name</small>
   </div>

   <div>
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" name="description" id="description" rows="4"></textarea>
   </div>
   <button type="submit" class="btn btn-primary mt-2">Add a new Comic</button>

</form>
</div>



@endsection