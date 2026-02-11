<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all(); //Eloquent ORM

        return view('pages.skills', compact('skills'));
    }
}
