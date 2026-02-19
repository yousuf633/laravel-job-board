<x-layout :title="$pageTitle">
    <h1>Blog</h1>
    @foreach($posts as $post)
    <h1>{{ $post->title }}</h1>
    <p>{{  $post->body}}</p>
    <p>{{$post->author}}</p>
   @endforeach
  
   {{ $posts->links() }}
</x-layout>