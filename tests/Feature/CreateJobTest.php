<?php

use App\Models\Employer;
use App\Models\User;
use Tests\TestCase;

use function Pest\Laravel\be;
use function Pest\Laravel\post;

beforeEach(function () {
    TestCase::class;
    $this->employer = Employer::factory()->create();
});

it('successfully creates a job', function () {
    $user = User::factory()->create();
    be($user);

    $response = post(route('jobs.store'), [
        'title' => 'Valid Job Title',
        'salary' => '20000',
        'employer_id' => $this->employer->id,
    ]);

    $response->assertRedirect(route('jobs.index'));

    $this->assertDatabaseHas('job_listings', [
        'title' => 'Valid Job Title',
        'salary' => '20000',
        'employer_id' => $this->employer->id,
        'user_id' => $user->id,
    ]);

    $this->withoutExceptionHandling();
});

it('requires title to be present', function () {
    $response = post(route('jobs.store'), [
        'salary' => '20000',
        'employer_id' => $this->employer->id,
    ]);

    $response->assertSessionHasErrors('title');
});

it('requires title to be a string', function () {
    $response = post(route('jobs.store'), [
        'title' => 123,
        'salary' => '20000',
        'employer_id' => $this->employer->id,
    ]);

    $response->assertSessionHasErrors('title');
});

it('requires title to be at least 3 characters', function () {
    $response = post(route('jobs.store'), [
        'title' => 'ab',
        'salary' => '20000',
        'employer_id' => $this->employer->id,
    ]);

    $response->assertSessionHasErrors('title');
});

it('requires title to be at most 20 characters', function () {
    $response = post(route('jobs.store'), [
        'title' => str_repeat('a', 21),
        'salary' => '20000',
        'employer_id' => $this->employer->id,
    ]);

    $response->assertSessionHasErrors('title');
});

it('requires salary to be present', function () {
    $response = post(route('jobs.store'), [
        'title' => 'valid title',
        'employer_id' => $this->employer->id,
    ]);

    $response->assertSessionHasErrors('salary');
});

it('requires salary to be numeric', function () {
    $response = post(route('jobs.store'), [
        'title' => 'valid title',
        'salary' => 'not-a-number',
        'employer_id' => $this->employer->id,
    ]);

    $response->assertSessionHasErrors('salary');
});
