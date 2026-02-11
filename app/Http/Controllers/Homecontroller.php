<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class Homecontroller extends Controller
{
    public function index()
    {
    $profiles = Profile::all();
    return view('pages.home', compact('profiles'));
    }
}
