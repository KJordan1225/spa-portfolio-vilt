<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Inertia\Inertia;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    public function index() {
        return Inertia::render('Projects/All', [
            'projects' => Project::all(),
            'availableTextColors' => Project::getAvailableTextColors(),
            'availableIcons' => Project::getAvailableIconNames(),            
        ]); 
    }

    public function store (Request $request){

        $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique(Project::class)
            ],

            'description' => [
                'required',
                'max:255',
            ],

            'color' => [
                'required',
                'in:'.implode(',',Project::getAvailableTextColors())
            ],

            'icon_name' => [
                'required',
                'in:'.implode(',',Project::getAvailableIconNames())
            ],            
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index'); 
    }
}


