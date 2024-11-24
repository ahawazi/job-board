<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function jobs()
    {
        return view('jobs', [
            'jobs' => Job::all(),
        ]);
    }

    public function job($id)
    {
        $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
        return view('job', [
            'job' => $job, 
        ]);

    }

    public function contact()
    {
        return view('contact');
    }
}
