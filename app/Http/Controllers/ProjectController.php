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
    public function show(Request $request,$id){
       $project = new Project();
       $project = Project::find($id);
       return response()->json($project);
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

    public function delete($id)
    {
        // Find the project by ID
        $project = Project::find($id);
    
        // Check if the project exists
        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }
    
        // Delete the project
        $project->delete();
    
        // Return success response
        return response()->json(['message' => 'Project deleted successfully']);
    }
    


}
