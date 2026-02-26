<x-layout :title="$pageTitle">
    <h2>{{ $Post->title }}</h2>
    <p>{{ $Post->body }}</p>
    <p>{{ $Post->author }}</p>
    <ul class="mt-6 space-y-4">
        @foreach ($Post->comments as $comment )
        <li class="p-4 bg-gray-100 rounded-md shadow-sm">
            <p class="text-gray-800">{{ $comment->contant }}</p>
            <span class="mt-1 text-sm text-gray-600">-{{ $comment->author }}</span>
        </li>
            
        @endforeach

    </ul>
    <div>
    <form action="/comments" method="post" class="mt-8 bg-white p-6 rounded-xl shadow-md">
        @csrf
        <input type="hidden" name="post_id" value="{{ $Post->id }}">

        <div class="space-y-6">

            <!-- Author -->
            <div>
                <label for="author" class="block text-sm font-medium text-gray-900">
                    Your Name
                </label>

                <div class="mt-2">
                    <input 
                        type="text"
                        name="author"
                        id="author"
                        value="{{ old('author') }}"
                        class="w-full px-4 py-2 rounded-lg border shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none
                        {{ $errors->has('author') ? 'border-red-500 bg-red-50' : 'border-gray-300' }}"
                    />
                </div>

                @error('author')
                    <span class="text-red-500 text-sm mt-1 block">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <!-- Contant -->
            <div>
                <label for="contant" class="block text-sm font-medium text-gray-900">
                    Your Comment
                </label>

                <div class="mt-2">
                    <input 
                        type="text"
                        name="contant"
                        id="contant"
                        value="{{ old('contant') }}"
                        class="w-full px-4 py-2 rounded-lg border shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none
                        {{ $errors->has('contant') ? 'border-red-500 bg-red-50' : 'border-gray-300' }}"
                    />
                </div>

                @error('contant')
                    <span class="text-red-500 text-sm mt-1 block">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <!-- Button -->
            <div>
                <button 
                    type="submit"
                    class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition duration-200 shadow-sm"
                >
                    Submit Comment
                </button>
            </div>

        </div>
    </form>
</div>
    

</x-layout>