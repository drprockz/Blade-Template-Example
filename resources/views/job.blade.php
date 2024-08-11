<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <h2 class="text-2xl font-bold">{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} annually</p>
</x-layout>
