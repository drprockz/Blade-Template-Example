<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="block hover:bg-gray-700 hover:text-white">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} annually
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
