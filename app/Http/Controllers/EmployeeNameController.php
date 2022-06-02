<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeName;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class EmployeeNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
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
            'employee_name' => 'required',
            'position' => 'required'
        ]);



        $employeeName = new EmployeeName;
        $employeeName->employee_name = $request->input('employee_name');
        $employeeName->position = $request->input('position');
        $employeeName->save();

        $log = new Log;
        $log->user_id = Auth::guard('admin')->user()->id;
        $log->log_type = 1;
        $log->affected_table = "Employee";
        $log->description = "Add new employee";
        $log->save();

        return redirect($request->input('route_name'))->with('success', 'Employee Name Added Successfully!');
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
