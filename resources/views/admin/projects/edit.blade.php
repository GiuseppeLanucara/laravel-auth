@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center mt-4 mb-4">Modifica Progetto {{ $project->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                @include('partials.errors')
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', $project->title) }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="cover_image">Immagine</label>
                        <input type="file" name="cover_image" id="cover_image" class="form-control">

                        <div id="image-preview">
                            @if ($project->cover_image)
                                <img class="w-50 mt-4 mb-3" src="{{ asset('storage/' . $project->cover_image) }}"
                                    alt="">
                            @else
                                <p>Nessuna Immagine</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="content">Contenuto</label>
                        <textarea name="content" id="content" rows="10" class="form-control">{{ old('content', $project->content) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Salva Modifiche</button>
                </form>
            </div>
        </div>
    </div>
@endsection
