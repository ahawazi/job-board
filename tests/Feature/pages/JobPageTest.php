<?php

use App\Models\Job;
use Tests\TestCase;

use function Pest\Laravel\get;

beforeEach(function () {
    TestCase::class;
});

it ('show Jobs', function() {
    $job = Job::factory()->create();

    get('/jobs')
    ->assertSee($job->title)
    ->assertSee($job->salary);
});

it ('show single Job', function() {
    $job = Job::factory()->create();

    get(route('jobs.show', $job))
    ->assertSee($job->title)
    ->assertSee($job->salary);
});
