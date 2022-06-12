<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Admin;

class VisitorsController extends Controller
{
    //

    public function index() {

        $projects = Project::latest()->get();
        $admin = Admin::all()[0]->password;

        return view('welcome')
        ->with('projects', $projects)
        ->with('password', $admin);
    }
}
