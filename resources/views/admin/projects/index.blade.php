@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-5">Tutti i miei Progetti</h2>
        <div class="text-end">
            <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">
                Nuovo Progetto
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data di creazione</th>
                            <th scope="col">Immagine</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->created_at }}</td>
                                <td>
                                    @if ($project->cover_image)
                                        <img class="w-50" src="{{ asset('storage/' . $project->cover_image) }}"
                                            alt="">
                                    @else
                                        <div class="w-50 bg-secondary py-4 text-center">No image</div>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-success bg-primary"
                                        href="{{ route('admin.projects.show', $project->slug) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->slug) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
