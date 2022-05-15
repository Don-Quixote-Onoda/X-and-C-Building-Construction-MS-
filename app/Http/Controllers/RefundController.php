<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;
use App\Models\EmployeeName;
use App\Models\Refund;

class RefundController extends Controller
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

        $this->validate($request, [
            'amount' => 'required',
        ]);

        if($request->input('isEmployee') == 'exist') {
            $this->validate($request, [
                'employee_id'=> 'required'
            ]);

            // add data to refund db
            $refund = new Refund;
            $refund->amount = $request->input('amount');
            $refund->employee_id = $request->input('employee_id');
            $refund->project_id = $request->input('project_id');
            $refund->save();

            return redirect('/projects/'.$request->input('project_id'))->with('success', 'Refund Inserted Successfully!');
        }
        else {
            $this->validate($request, [
                'employee_name'=> 'required',
                'position'=> 'required'
            ]);

            // add  new data to employee table
            $employee = new EmployeeName;
            $employee->employee_name = $request->input('employee_name');
            $employee->position = $request->input('position');
            $employee->save();

            // get last id of employee table
            $employees = EmployeeName::orderByDesc('id')->get();
            $employee_id = $employees[0]->id;

            // insert data to refund table

            $refund = new Refund;
            $refund->amount = $request->input('amount');
            $refund->employee_id = $employee_id;
            $refund->project_id = $request->input('project_id');
            $refund->save();
            return redirect('/projects/'.$request->input('project_id'))->with('success', 'Refund Inserted Successfully!');
        }
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
