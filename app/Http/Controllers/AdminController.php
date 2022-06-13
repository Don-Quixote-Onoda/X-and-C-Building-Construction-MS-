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

        // return Admin::all()[0]->password;




        if(Auth::guard('admin')->attempt($creds)) {
            return redirect('/admin/dashboard')->with('success', 'Welcome!');
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
            // 'profile_picture' => 'image|nullable|max:1999',
            'employee_id' => 'required',
            'employee_id' => 'required',
            'usertype' => 'required',
            'status' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        if($request->hasFile('profile_picture')) {
            $filenameWithExt = $request->file('profile_picture');
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('profile_picture')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('profile_picture')->storeAs('public/projects/profile_pictures', $filenameToStore);
        }
        else {
            $filenameToStore = 'noimage.jpg';
        }

        $admin = new Admin;
        $admin->employee_id = $request->input('employee_id');
        $admin->status = $request->input('status');
        $admin->name = $request->input('fullname');
        $admin->user_type_id = $request->input('usertype');
        $admin->email = $request->input('email');
        $admin->profile_picture = $filenameToStore;
        $admin->password = \Hash::make($request->password);
        $save = $admin->save();


        return redirect('/admin')->with('success', 'You are now registered successfully!');
       
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
