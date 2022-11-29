@extends('layout.app')
@section('content')
<div class="container">
    <h1 class="text-center">Welcome to Dashboard</h1>
<form action="{{route('logout')}}" method="get">

    <button type="submit" class="btn btn-secondary">Log Out</button>
</form>

<table class='table'>
    <thead>

        <tr>
            <th>Title</th>
            <th>created by</th>
            
        </tr>
        @foreach($post as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
        </tr>
        @endforeach
    </thead>
</table>
</div>
@endsection
