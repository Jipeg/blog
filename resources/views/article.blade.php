<x-layout>
    <x-slot:heading>
        {{$article['title']}}
    </x-slot:heading>
        <h1>{{$article['title']}}</h1>
        <p class="italic font-bold">Keywords: {{$article['keywords']}}</p>
        <a href="/articles" class="text-blue-500 hover:underline">
            Go back
        </a>
        <article>
            {!! html_entity_decode($article['body']) !!}
        </article>
        @if ($article['created_at'])
            <p class="italic mt-2">Created at: {{$article['created_at']}}</p>
        @endif
</x-layout>
