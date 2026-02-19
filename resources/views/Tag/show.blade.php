<x-layout :title="$pageTitle">
    <h2>Show One Tag</h2>
    <h1>{{ $tags->title }}</h1>
    <ul>
        @forelse ($tags->posts as $post )
        <li>
            <strong>{{ $post->title }}</strong>
            <p>{{ $post->body }}</p>
            <p>Author: {{$post->author  }}</p>
            <a href="{{  route('blog.show',$post->id)}}">View Full Post</a>
        </li>
            
        @empty
           <p>No posts are accossiated with this tags.</p> 
        @endforelse
    </ul>

</x-layout>