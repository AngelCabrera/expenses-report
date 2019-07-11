@extends('layouts.base')
@section('content')    
    <div class="row">
        <div class="col">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                <h1>Eliminar Reporte #{{ $expenseReport->id }}</h1>
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
                    @method('delete')                   
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection