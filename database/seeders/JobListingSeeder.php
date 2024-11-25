<?php

namespace Database\Seeders;

use App\Models\JobListing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    public function run(): void
    {
        JobListing::factory()->count(5)->create();
    }
}
