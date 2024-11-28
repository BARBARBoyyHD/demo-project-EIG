<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        $projects = Project::all();
        // return view('project.index',['projects'=>$projects]);
        return response()->json($projects);
    }

    public function create(){
        return view("project.create");
    }

    public function store(Request $request){
    
        $project = new Project();
        $project->name = $request->name;
        $project->deadline = $request->deadline;

        $project->save();
        
        // return redirect()->route('proj.index');
        return response()->json('success');
    }

    public function edit(Project $project){
        return view("project.edit",['project'=> $project]);
    }

    public function update(Request $request, Project $project){
    
        $project->name = $request->name;
        $project->deadline = $request->deadline;

        $project->save();
        
        // return redirect()->route('proj.index');
        return response()->json('success');
    }

    public function delete(Request $request, Project $project){
        $project->delete();
        
        return redirect()->route('proj.index');
    }


}
