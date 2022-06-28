<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Inertia\Inertia;

class SkillController extends Controller
{
    public function index() {
        return Inertia::render('Skills/All', [
            'skills' => Skill::all(),
        ]);
    }
}
