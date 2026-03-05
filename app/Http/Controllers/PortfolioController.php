<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function home()
    {
        // Grabs the first profile record since you only have one
        $profile = Profile::first(); 
        return view('home', compact('profile'));
    }

    public function skills()
    {
        // Grabs all skills from the database
        $skills = Skill::all(); 
        return view('skills', compact('skills'));
    }

    public function projects()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function experience()
    {
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        return view('experience', compact('experiences'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('contact', compact('contact'));
    }
}
