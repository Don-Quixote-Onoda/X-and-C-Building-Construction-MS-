<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserType;
use App\Models\Admin;

class UserController extends Controller
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
        $admins = Admin::latest()->get();

        return view('users.index')->with('users', $admins);
    }

    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = User::select('*');
    //         return Datatables::of($data)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', function($row){
     
    //                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    
    //                         return $btn;
    //                 })
    //                 ->rawColumns(['action'])
    //                 ->make(true);
    //     }
        
    //     return view('users.index');
    // } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usertypes = UserType::all();
        return view('users.create')->with('usertypes', $usertypes);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        $usertypes = UserType::all();
        return view('users.show')->with('user', $user)->with('usertypes', $usertypes);
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

    public function changePassword(Request $request) {
        $this->validate($request, [
            'password' => 'required',
            'newpassword' => 'required',
            'renewpassword' => 'required',
            'id' => 'required'
        ]);

        $id = (int)$request->input('id');

        if($request->input('newpassword') == $request->input('renewpassword'))
        {
            $user = User::find($id);
            $user->password = $request->input('renewpassword');
            $user->save();
            return redirect('/users/'.$id)->with('success', 'Password Changed Succesfully!');
        }
        else {
            return redirect('/users/'.$id)->with('error', 'Password not match!');
        }
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'employee_id' => 'required',
            'employee_fullname' => 'required',
            'username' => 'required',
            'status' => 'required',
            'image_profile' => 'image|nullable|max:1999',
            'usertype' => 'required'
        ]);

        if($request->hasFile('image_profile')) {
            $filenameWithExt = $request->file('image_profile');
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image_profile')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('image_profile')->storeAs('public/users/image_profiles', $filenameToStore);
        }
        else {
            $filenameToStore = 'noimage.jpg';
        }

        $user = User::find($id);
        $user->employee_id = $request->input('employee_id');
        $user->employee_fullname = $request->input('employee_fullname');
        $user->username = $request->input('username');
        $user->status = $request->input('status');
        $user->usertype_id = $request->input('usertype');
        $user->image_profile = $filenameToStore;
        $user->save();

        $userInfo = User::find($id);
        $usertypes = UserType::all();


        return redirect('/users/'.$id)->with('success', 'Updated Succesfully!')->with('users', $userInfo)->with('usertypes', $usertypes);
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
