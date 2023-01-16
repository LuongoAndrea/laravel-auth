@extends('layouts.app')
@section('content')
<h1>Edit</h1>
<h1>Modifica Progetto:{{ $project->title }}</h1>
<div class="row bg-white">
    <div class="col-12">
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST" enctype="multipart/form-data"
            class="p-4">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $project->title) }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <textarea class="form-control" id="content"
                    name="content">{{ old('content', $project->content) }}</textarea>
            </div>

    </div>
    <div class="mb-3">
        <label for="cover_image" class="form-label">cambia immagine</label>
        <input type="file" name="cover_image" id="cover_image"
            class="form-control  @error('cover_image') is-invalid @enderror">
        @error('cover_image')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
    <button class="btn btn-primary"><a href="{{ route('admin.projects.index') }}"
            style="color:white">Indietro</a></button>
    </form>
</div>
</div>

@endsection