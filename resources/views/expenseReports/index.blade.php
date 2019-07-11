@extends('layouts.base')
@section('content')    
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <div class="container">
                    <h1>Reports:</h1>
                    <a href="/expense_reports/create" class="btn btn-outline-primary">Crear nuevo Reporte</a>
            </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach($expenseReports as $expenseReport)
                    <tr>                            
                        <td>
                            <a href="/expense_reports/{{ $expenseReport->id }}">{{ $expenseReport->title }}</a>
                        </td>
                        <td>
                            <a href="/expense_reports/{{ $expenseReport->id }}/edit">Edit</a>
                        </td>
                        <td>
                            <a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection