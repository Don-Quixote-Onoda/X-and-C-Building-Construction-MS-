<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cheque;
use App\Models\Refund;
use App\Models\EmployeeName;

class ChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $cheques = Cheque::all();

        return view('cheques.index')->with('cheques', $cheques);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $employee_names = EmployeeName::all();

        return view('cheques.create')->with('employee_names', $employee_names);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cheque_number' => 'required',
            'amount' => 'required',
            'datetime' => 'required',
            'employee_id' => 'required' 
        ]);

        $cheque = new Cheque;
        $cheque->datetime = $request->input('datetime');
        $cheque->amount = $request->input('amount');
        $cheque->cheque_number = $request->input('cheque_number');
        $cheque->employee_id = $request->input('employee_id');
        $cheque->save();

        return redirect('/cheques')->with('sucess', 'Cheque Information Added Successfully!');
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
