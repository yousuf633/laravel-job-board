<x-layout :title="$pageTitle">
    <h2>{{ $Post->title }}</h2>
    <p>{{ $Post->body }}</p>
    <p>{{ $Post->author }}</p>
    
    <ul>
       @foreach ($Post->comments as $comment )
       <li>{{ $comment->contant }},{{ $comment->author }}</li>
       @endforeach
    </ul>

</x-layout>