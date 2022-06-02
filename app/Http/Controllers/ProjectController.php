<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeName;
use App\Models\Client;
use App\Models\Project;
use App\Models\Refund;
use App\Models\Cheque;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;


class ProjectController extends Controller
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
        // return Auth::guard('admin')->user()->id;
        $projects = Project::orderbyDesc("id")->get();

        return view('project.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();



        return view('project.create')->with('clients', $clients);
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
            'project_number' => 'required',
            'project_name' => 'required',
            'location' => 'required',
            'client_id' => 'required',
            'project_budget' => 'required',
            'project_start' => 'required',
            'project_eta' => 'required',
            'project_awarding' => 'required',
            'status' => 'required',
            'description' => 'required',
            'project_image' => 'image|nullable|max:1999',
            'admin_id' => 'required',
        ]);


        if($request->hasFile('project_image')) {
            $filenameWithExt = $request->file('project_image');
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('project_image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('project_image')->storeAs('public/projects/project_images', $filenameToStore);
        }
        else {
            $filenameToStore = 'noimage.jpg';
        }


        
        $project = new Project;
        $project->admin_id = $request->admin_id;
        $project->project_number = $request->input('project_number');
        $project->project_name = $request->input('project_name');
        $project->location = $request->input('location');
        $project->client_id = $request->input('client_id');
        $project->project_budget = $request->input('project_budget');
        $project->project_start = date("Y-m-d", strtotime($request->input('project_start')));
        $project->project_eta = date("Y-m-d", strtotime($request->input('project_eta')));
        $project->project_awarding = date("Y-m-d", strtotime($request->input('project_awarding')));
        $project->status = $request->input('status');
        $project->project_image = $filenameToStore;
        $project->description = $request->input('description');
        $project->save();

        $log = new Log;
        $log->user_id = Auth::guard('admin')->user()->id;
        $log->log_type = 1;
        $log->affected_table = "Projects";
        $log->description = " ";
        $log->save();

        return redirect('/admin/projects')->with('success', 'Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        $employee_names = EmployeeName::all();
        $project_infos = Project::all();
        $funds = Refund::orderByDesc('id')->where('project_id', $id)->get();

        $cheques = Cheque::orderByDesc('id')->get();
        $clients = Client::all();

        $log = new Log;
        $log->user_id = Auth::guard('admin')->user()->id;
        $log->log_type = 0;
        $log->affected_table = "Projects";
        $log->description = " ";
        $log->save();

        return view('project.show')
        ->with('cheques', $cheques)
        ->with('funds', $funds)
        ->with('project', $project)
        ->with('employee_names', $employee_names)
        ->with('project_infos', $project_infos)->with('clients', $clients);
    }

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::all();
        $project = Project::find($id);
        return view('project.edit')
        ->with('clients', $clients)
        ->with('project', $project);
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
        $this->validate($request, [
            'project_number' => 'required',
            'project_name' => 'required',
            'location' => 'required',
            'client_id' => 'required',
            'project_budget' => 'required',
            'project_start' => 'required',
            'project_eta' => 'required',
            'project_awarding' => 'required',
            'status' => 'required',
            'description' => 'required',
            'project_image' => 'file|nullable|max:1999'
        ]);

        if($request->hasFile('project_image')) {
            $filenameWithExt = $request->file('project_image');
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('project_image')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('project_image')->storeAs('public/projects/project_images', $filenameToStore);
        }
        else {
            $filenameToStore = 'noimage.jpg';
        }


        
        $project = Project::find($id);
        $project->project_number = $request->input('project_number');
        $project->project_name = $request->input('project_name');
        $project->location = $request->input('location');
        $project->client_id = $request->input('client_id');
        $project->project_budget = $request->input('project_budget');
        $project->project_start = date("Y-m-d", strtotime($request->input('project_start')));
        $project->project_eta = date("Y-m-d", strtotime($request->input('project_eta')));
        $project->project_awarding = date("Y-m-d", strtotime($request->input('project_awarding')));
        $project->status = $request->input('status');
        $project->project_image = $filenameToStore;
        $project->description = $request->input('description');
        $project->save();

        $log = new Log;
        $log->user_id = Auth::guard('admin')->user()->id;
        $log->log_type = 2;
        $log->affected_table = "Projects";
        $log->description = " ";
        $log->save();

        return redirect('/projects')->with('success', 'Updated Successfully!');
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
