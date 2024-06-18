<x-layout>
    <x-slot:heading>
        Jobs list with details
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li><a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">{{ $job['title']}}</a> gets {{ $job['salary'] }} per year</li>
        @endforeach
    </ul>
</x-layout>