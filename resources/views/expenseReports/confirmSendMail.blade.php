@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>Enviar Reporte #{{ $expenseReport->id }}</h1>
                <a href="/expense_reports/{{ $expenseReport->id }}" class="btn btn-outline-secondary">Volver</a>
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
            <form action="/expense_reports/{{ $expenseReport->id }}/sendMail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Insertar email:"
                        value="{{old('email')}}" id="email">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection
