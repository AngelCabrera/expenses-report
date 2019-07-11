@extends('layouts.base')
@section('content')    
@if($errors->any())
    <div class="alert alert-danger m-0">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1>Crear Reporte</h1>
                    <a href="/expense_reports/" class="btn btn-outline-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="offset-2 col-8">
                <form action="/expense_reports/" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="title">Título: </label>
                    <input type="text" class="form-control" name="title" placeholder="Ingresa el título:" id="title" value="{{ old('title')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection