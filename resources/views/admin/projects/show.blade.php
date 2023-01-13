@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{ $project->title }}</h1>
        <div class="d-flex justify-content-between mt-3">
            <h3>{{ $project->created_at }}</h3>
            <p>{{ $project->slug }}</p>
        </div>
        <div class="text-center">
            @if ($project->cover_image)
                <img class="w-50 mt-4 mb-4" src="{{ asset('storage/' . $project->cover_image) }}" alt="">
            @else
                <div class="w-50 bg-secondary py-4 text-center d-inline-block">
                    No image
                </div>
            @endif
        </div>
        <p class="mt-3">{{ $project->content }}</p>
    </div>
@endsection
