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
            // 'jobs' => JobListing::with('employer')->paginate(3),
            // 'jobs' => JobListing::with('employer')->simplePaginate(3),
            'jobs' => JobListing::with('employer')->cursorPaginate(3),
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
