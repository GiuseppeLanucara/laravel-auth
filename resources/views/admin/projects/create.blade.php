@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center mt-4">Inserisci un nuovo progetto</h2>
        <div class="justify-content-center row ">
            <div class="col-8">
                <form action="{{ 'admin.projects.store' }}" method="POST">
                    @csrf
                    <div class="form-group  mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>

                    <div class="form-group  mb-3">
                        <label for="title">Contenuto</label>
                        <textarea id="content" name="content" rows="10" class="form-control"></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Salva Progetto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
