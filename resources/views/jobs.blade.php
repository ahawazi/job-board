<x-site-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="{{ route('job', $job['id']) }}"
                class="block px-4 py-6 border-gray-200 rounded-lg dark:border-white dark:bg-gray-600">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong class="dark:text-gray-700 dark:font-bold">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
    </div>
</x-site-layout>
