<x-layout>
    <x-slot:heading>
        Contact page heading
    </x-slot:heading>
    <h1>{{$job['title']}}</h1>
    <p>This jobs pays {{$job['salary']}} per year</p>
    @if (isset($job['skills']))
        <p>Required skills are: {{$job['skills']}}.</p>
    @endif
    @if (isset($job['link']))
        <a target ="_blank" href="//www.{{$job['link']}}" class="text-blue-500 hover:underline">Become {{$job['title']}} now</a>
    @endif
</x-layout>