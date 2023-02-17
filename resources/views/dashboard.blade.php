@extends('layout.app')
@section('content')
<div class="container">
    <h1 class="text-center">Welcome to Dashboard</h1>
    <div class="container d-flex" style="gap:20px;">

        <form action="{{route('logout')}}" method="get">
            
            <button type="submit" class="btn btn-secondary">Log Out</button>
        </form>
        
        <form action="{{route('addpost')}}" method="get">
            
            <button type="submit" class="btn btn-secondary">Add</button>
        </form>
    </div>

<table class='table'>
    <thead>

        <tr>
            <th>Title</th>
            <th>created by</th>
            <th>action</th>
            
        </tr>
        @foreach($post as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
            @if($post->user->id == auth()->user()->id)
            
            <td>
               
                   <a href="{{route('delete',$post->id)}}" class="btn btn-danger">delete</a> 
           
            </td>
            @endif
        </tr>
        @endforeach
    </thead>
</table>
</div>
@endsection
