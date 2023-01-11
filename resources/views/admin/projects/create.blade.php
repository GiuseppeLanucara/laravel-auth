@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center mt-4 mb-4">Inserisci un nuovo progetto</h2>
        <div class="justify-content-center row ">
            <div class="col-8">
                @include('partials.errors')
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="form-group  mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title"
                            class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-group  mb-3">
                        <label for="title">Contenuto</label>
                        <textarea id="content" name="content" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary" type="submit">Salva Progetto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
