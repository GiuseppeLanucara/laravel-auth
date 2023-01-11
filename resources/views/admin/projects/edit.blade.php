@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center mt-4">Modifica Progetto {{ $project->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ $project->title }}">
                    </div>

                    <div class="form-group mb-4">
                        <label for="content">Contenuto</label>
                        <textarea name="content" id="content" rows="10" class="form-control">{{ $project->content }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Salva Modifiche</button>
                </form>
            </div>
        </div>
    </div>
@endsection