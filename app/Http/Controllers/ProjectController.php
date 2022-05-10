<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
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
            'project_description' => 'required',
            'project_location' => 'required',
            'client_id' => 'required',
            'project_budget' => 'required',
            'project_startdate' => 'required',
            'project_enddate' => 'required',
            'project_awarding' => 'required'
        ]);
        
        $project = new Project;
        $project->project_number = $request->input('project_number');
        $project->project_name = $request->input('project_name');
        $project->description = $request->input('project_description');
        $project->location = $request->input('project_location');
        $project->client_id = $request->input('client_id');
        $project->project_start = $request->input('project_startdate');
        $project->project_ETA = $request->input('project_enddate');
        $project->project_awarding = $request->input('project_awarding');
        $project->project_budget = $request->input('project_budget');
        $project->save();

        return redirect('/projects/create')->with('success', 'Added Successfully!');
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
        $clients = Client::all();
        $project_infos = Project::all();

        return view('project.show')->with('project', $project)->with('clients', $client)->with('project_infos', $project_infos);
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
