<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class JobController extends Controller
{
    public function index(Request $request)
    {
        return view('jobs.index', [
            // 'jobs' => Job::with('employer')->paginate(3),
            // 'jobs' => Job::with('employer')->simplePaginate(3),
            'jobs' => Job::with('employer')->latest()->simplePaginate(3),
        ]);
    }

    public function create(Request $request)
    {
        return view('jobs.create');
    }

    public function store(StoreJobRequest $request)
    {
        $request->user()->jobs()->create([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
            'employer_id' => 1,
        ]);
        return to_route('jobs.index');
    }

    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    public function edit(Request $request, Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(StoreJobRequest $request, Job $job)
    {
        $job->update([
            'title' => $request->input('title'),
            'salary' => $request->input('salary'),
            'employer_id' => 2,
        ]);
        return to_route('jobs.index');
    }
}
