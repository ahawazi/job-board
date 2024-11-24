<x-site-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li class="text-white">
                {{-- @dd($job) --}}
                <a href="{{ route('job', $job['id']) }}" class="text-white">
                    <p>{{ $job['title'] }}: Pays {{ $job['salary'] }} per years.</p>
                </a>
            </li>
        @endforeach
    </ul>
</x-site-layout>
