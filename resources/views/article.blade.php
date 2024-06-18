<x-layout>
    <x-slot:heading>
        {{$article['title']}}
    </x-slot:heading>
        <h1>{{$article['title']}}</h1>
        <p>Keywords: {{$article['keywords']}}</p>
        <a href="/articles" class="text-blue-500 hover:underline">
            Go back
        </a>
        <article>
            {!! html_entity_decode($article['body']) !!}
        </article>
        <p>Created at: {{$article['created_at']}}</p>
</x-layout>
