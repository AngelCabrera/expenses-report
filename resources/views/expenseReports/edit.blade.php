@extends('layouts.base')
@section('content')    
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                <h1>Editar Reporte #{{ $expenseReport->id }}</h1>
                    <a href="/expense_reports" class="btn btn-outline-secondary">Volver</a>
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
                <form action="/expense_reports/{{ $expenseReport->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-3">
                        <label for="title">Editar Título:</label>
                        <input type="text" class="form-control" name="title" placeholder="Ingresa el título:" id="title2" value={{ $expenseReport->title }}>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection