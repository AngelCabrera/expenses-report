<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;
use App\ExpenseReport;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param  ExpenseReport
     * @return \Illuminate\Http\Response
     */
    public function create(ExpenseReport $expenseReport)
    {
        return view('expenses.create', [
            'expenseReport' => $expenseReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ExpenseReport
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ExpenseReport $expenseReport)
    {
        $validatedData = $request->validate([
            'title' => 'bail|required|min:3|max:20',
            'amount' => 'bail|required|numeric|gt:0'
        ]);

        $expense = new Expense;
        $expense->expense_report_id = $expenseReport->id;
        $expense->title = $request->get('title');
        $expense->amount = $request->get('amount');
        $expense->save();

        return redirect("/expense_reports/{$expenseReport->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
