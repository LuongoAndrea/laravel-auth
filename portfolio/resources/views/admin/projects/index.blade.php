@extends('layouts.app')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success mb-3 mt-3">
    {{session()->get('message')}}
</div>
@endif
<a class="btn btn-success m-3" href="{{route('admin.projects.create')}}">crea nuovo progetto</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <th scope="row">{{$project->id}}</th>
            <td><a href="{{route('admin.projects.show', $project->slug)}}" title="View Post">{{$project->title}}</a>
            </td>
            <td>{{Str::limit($project->content,100)}}</td>
            <td><a href="{{route('admin.projects.edit', $project->slug)}}">edit</a></td>

            <td>
                <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    {{-- <button type="submit" class="btn btn-warning"
                        data-item-title="{{$project->title}}">delete</button>
                    --}}
                    <button type="submit" class="delete-button btn btn-danger ms-3"
                        data-item-title="{{$project->title}}">delete</button>
                </form>
            </td>

        </tr>

        @endforeach
    </tbody>
</table>
@include('partials.admin.modal')
@endsection
{{-- /admin/project --}}