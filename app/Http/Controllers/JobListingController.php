<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
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
            'jobs' => JobListing::with('employer')->latest()->simplePaginate(3),
        ]);
    }

    public function create(Request $request)
    {
        return view('jobs.create');
    }

    public function store(StoreJobRequest $request)
    {
        $request->user()->jobsListing()->create([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
            'employer_id' => 1,
        ]);
        return to_route('jobs.index');
    }

    public function show(JobListing $job)
    {
        return view('jobs.show', compact('job'));
    }
}
