<x-site-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <div class="space-y-4">
        <x-link-button-green href="{{ route('jobs.create') }}">Create Job</x-link-button-green>
        @foreach ($jobs as $job)
            <a href="{{ route('jobs.show', $job['id']) }}"
                class="block px-4 py-6 border-gray-200 rounded-lg dark:border-white dark:bg-gray-600">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong class="dark:text-gray-700 dark:font-bold">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-site-layout>
