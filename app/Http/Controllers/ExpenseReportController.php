<?php

namespace App\Http\Controllers;

use App\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReports.index', [
            'expenseReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'bail|required|min:3|max:50'
        ]);

        $expenseReport = new ExpenseReport();
        $expenseReport->title = $request->get('title');
        $expenseReport->save();
        return redirect('/expense_reports')->with('message', 'Agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        return view('expenseReports.show', compact('expenseReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseReport $expenseReport)
    {
        return view('expenseReports.edit', compact('expenseReport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseReport $expenseReport)
    {
        $expenseReport->title = $request->get('title');
        $expenseReport->save();
        return redirect('/expense_reports/')->with('message', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExpenseReport  $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseReport $expenseReport)
    {
        $expenseReport->delete();
        return redirect('/expense_reports')->with('message', 'Eliminado correctamente');
    }

    public function confirmDelete($id)
    {
        $expenseReport = ExpenseReport::findOrFail($id);
        return view('expenseReports.confirmDelete', compact('expenseReport'));
    }

    public function confirmSendMail(ExpenseReport $expenseReport)
    {
        return view('expenseReports.confirmSendMail', [
            'expenseReport' => $expenseReport
        ]);
    }

    public function sendMail(Request $request, ExpenseReport $expenseReport)
    {
        dd($request, $expenseReport);
    }
}
