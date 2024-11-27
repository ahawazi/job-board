<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class JobListingController extends Controller
{
    public function index(Request $request)
    {
        return view('jobs.index', [
            // 'jobs' => JobListing::with('employer')->paginate(3),
            // 'jobs' => JobListing::with('employer')->simplePaginate(3),
            'jobs' => JobListing::with('employer')->cursorPaginate(3),
        ]);
    }

    public function create(Request $request)
    {
        return view('jobs.create');
    }

    public function show(JobListing $job)
    {
        return view('jobs.show', compact('job'));
    }
}
