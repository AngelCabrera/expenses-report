@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <div class="jumbotron">
            <div class="container">
                <h1>{{ $expenseReport->title }}</h1>
                <a href="/expense_reports" class="btn btn-outline-secondary">Volver a Reportes</a>
                <a href="/expense_reports/{{ $expenseReport->id }}/confirmSendMail"
                    class="btn btn-outline-primary">Enviar Reporte</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Detalles</h3>
            <table class="table">
                @foreach ($expenseReport->expenses as $expense)
                <tr>
                    <td>{{ $expense->title }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td>{{ $expense->created_at }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports/{{ $expenseReport->id }}/expenses/create" class="btn btn-primary">
                Añadir nuevo gasto
            </a>
        </div>
    </div>
</div>
@endsection
