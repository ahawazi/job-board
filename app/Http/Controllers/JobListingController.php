<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class JobListingController extends Controller
{
    public function jobs()
    {
        return view('jobs', [
            'jobs' => JobListing::all(),
        ]);
    }

    public function job($id)
    {
        $job = Arr::first(JobListing::all(), fn($job) => $job['id'] == $id);
        return view('job', [
            'job' => $job,
        ]);
    }
}
