<x-layout>
    <x-slot:heading>
        Articles
    </x-slot:heading>
    <ul>
        @foreach ($articles as $article)
            <li>
                <h2>{{$article['title']}}</h2>
                <p>Keywords: {{$article['keywords']}}</p>
                <a href="/articles/{{$article['id']}}" class="text-blue-500 hover:underline">
                    Read more...
                </a>
                <p>Created at: {{$article['created_at']}}</p>
            </li>
        @endforeach
    </ul>
</x-layout>
