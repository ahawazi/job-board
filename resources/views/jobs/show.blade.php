<x-site-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        This is pays {{ $job['salary'] }} per years.
    </p>
    <div class="flex items-center mt-3 gap-3">
        <x-link-button-gray href="{{ route('jobs.edit', $job) }}">Edit</x-link-button-gray>
        <form method="post" action="{{ route('jobs.destroy', $job) }}">
            @csrf
            @method('delete')

            <x-danger-button onclick="return confirm('Are you sure?')">
                Delete
            </x-danger-button>
        </form>
    </div>
</x-site-layout>
