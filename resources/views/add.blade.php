@extends('layout.app')
@section('content')
<form action="{{route('addpost')}}" method="post">
    @csrf
    <div class="mb-3">
    <!-- <label for="exampleInputEmail1" class="form-label">title</label> -->
    <input type="hidden" name="id" value="{{auth()->user()->id}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input type="text" name="title"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <button type="submit" class="btn btn-primary form-control">Add</button>
  </div>

</form>
@endsection