<x-layout :title="$pageTitle">
 @if ($errors->any())
    <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
        <ul class="list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  @if(session()->has('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
  @endif
  
   <div class="mt-6 flex items-center justify-end gap-x-6 ">
    <a href="\blog\create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</a>
  </div>
    @foreach($posts as $post)
    <div class="flex justify-between items-center px-4 py-6 border border-gray-200">
      <div>
    <h1><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h1>
    <p>{{$post->author}}</p>
    </div>
    <div>
      <a class="text-yellow-500 hover:text-gray-500" href="/blog/{{ $post->id }}/edit">Edit</a>
      <form method="post" action="/blog/{{ $post->id }}" onsubmit="return confirm('Are you sure can not be reversed')">
        @csrf
        @method('DELETE')
      <button type="submit" class="text-red-500 hover:text-gray-500">Delete</button>
      </form>
    </div>
    </div>
   @endforeach
  
   {{ $posts->links() }}
</x-layout>