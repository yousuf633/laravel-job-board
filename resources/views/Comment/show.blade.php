<x-layout :title="$pageTitle">
    <h2>Show Comment by{{ $comments->author }}</h2>
    <p>{{ $comments->contant }}</p>
    @if($comments->post)
    <h3>Related Post</h3>
    <ul>
        <li>
            <strong>{{ $comments->post->title }}</strong>
            <p>Author: {{ $comments->post->author }}</p>
            <a href="{{ route('blog.show',$comments->post->id) }}">View Full Post</a>
        </li>
    </ul>
    @else
    <P>No related post found for this comment.</P>
    @endif


</x-layout>