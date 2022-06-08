<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;

class AdminController extends Controller
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

    public function check(Request $request) {


        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.exists' => 'This email is not exists in administrator.'
        ]);


        $creds = $request->only('email', 'password');

        // return $creds;




        if(Auth::guard('admin')->attempt($creds)) {

            

            return redirect('/admin/dashboard')->with('success', 'Correct Credentials!');
        }
        else {
            return redirect()->route('admin.login')->with('error', 'Incorrect Credentials!');
        }

    }

    function logout() {
        Auth::guard('admin')->logout();
        return redirect('admin/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $this->validate($request, [
            'employee_id' => 'required',
            'fullname' => 'required',
            'usertype' => 'required',
            'email' => 'required',
            'password' => 'required',
            'status' => 'required',
            'password_confirmation' => 'required',
        ]);


        $admin = new Admin;
        $admin->employee_id = $request->input('employee_id');
        $admin->status = $request->input('status');
        $admin->name = $request->input('fullname');
        $admin->user_type_id = $request->input('usertype');
        $admin->email = $request->input('email');
        $admin->password = \Hash::make($request->password);
        $save = $admin->save();


        return redirect()->back()->with('success', 'You are now registered successfully!');
       
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
