@extends('layouts.app')
@section('content')
<ul>
    @foreach ($projects as $project)
    <li class="m-3">
        <a class="btn btn-primary text-white btn-sm" href="{{route('admin.projects.show', $project->slug)}}"
            title="View Projects">{{ $project->title}}</a>
    </li>
    @endforeach
</ul>

@endsection