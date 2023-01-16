@extends('layouts.app')
@section('content')
<div id="show">
    <h1>{{$project->title}}</h1>
    <p>{{$project->content}}</p>
    <div class="img">
        <img src="{{ asset('storage/' . $project->cover_image)}}" alt="{{$project->title}}">
    </div>

</div>
@endsection