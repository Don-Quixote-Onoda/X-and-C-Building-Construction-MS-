<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Cheque;

class PurchaseController extends Controller
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'OR_Number' => 'required',
            'transaction_date' => 'required',
            'amount' => 'required', 
            'project_description' => 'required',
            'cheque_id' => 'required',
            'project_id' => 'required'
        ]);

        $purchase = new Purchase;
        $purchase->OR_Number = $request->input('OR_Number');
        $purchase->transaction_date = $request->input('transaction_date');
        $purchase->cheque_id = $request->input('cheque_id');
        $purchase->project_id = $request->input('project_id');
        $purchase->amount = $request->input('amount');
        $purchase->description = $request->input('description');
        $purchase->save();


        return redirect('/projects/'.$request->input('project_id'))->with('success', 'Purchase Inserted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
