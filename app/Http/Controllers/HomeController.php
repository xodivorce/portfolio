<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Project;
use App\Models\BlogPost;

class HomeController extends Controller
{

    public function index()
    {
        return view('pages.home', $this->getData('about'));
    }

    public function resume()
    {
        return view('pages.home', $this->getData('resume'));
    }

    public function projects()
    {
        return view('pages.home', $this->getData('projects'));
    }

    public function blog()
    {
        return view('pages.home', $this->getData('blog'));
    }

    public function contact()
    {
        return view('pages.home', $this->getData('contact'));
    }

    private function getData($page)
    {
        $testimonials = Testimonial::latest('date')->get();

        $educations = Education::latest('start_year')->get();

        $experience = Experience::latest('start_year')->get();

        $skills = Skill::all();

        $projects = Project::orderByRaw("
            CASE 
                WHEN category = 'Web development' THEN 1
                WHEN category = 'Applications' THEN 2
                ELSE 3
            END
        ")->orderByDesc('id')->get();

        $blogs = BlogPost::orderByRaw("FIELD(platform, 'Other','YouTube','Instagram','Facebook','Pinterest')")
            ->orderBy('post_date', 'desc')
            ->get();

        return compact(
            'page',
            'testimonials',
            'educations',
            'experience',
            'skills',
            'projects',
            'blogs'
        );
    }
}
