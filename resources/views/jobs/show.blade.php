<x-site-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        This is pays {{ $job['salary'] }} per years.
    </p>
    <x-link-button-gray href="{{ route('jobs.edit', $job) }}">Edit</x-link-button-gray>
</x-site-layout>
