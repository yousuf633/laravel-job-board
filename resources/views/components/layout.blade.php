@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
      
        <title>Job Board{{ isset($title) ? "-".$title : "" }}</title>
    </head>
    <body>
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
<x-nav-link href="/" :active="request()->is('/')" class="bg-blue-600 text-white !important">
    Dashboard
</x-nav-link>
                <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
            </div>
          </div>
        </div>
        
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            @auth
              <span class="text-white mr-4">{{ Auth::user()->name }}</span>
              <form method="post" action="/logout">
                @csrf
                <button type="submit" class="bg-gray-800 text-gray-400 hover:text-white">
                Logout</button>
                

              </form>
           @else
           <a href="/signup" class="text-gray-400 px-2 hover:text-white">Signup</a>
           <a href="/login" class="text-gray-400 px-2 hover:text-white">Login</a>
            @endauth
          </div>
        </div>

        <div class="-mr-2 flex md:hidden">
          <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

   
  </nav>

  @if(isset($title))
  <header class="relative bg-white shadow-sm">
    <div class="mx-auto max-max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $title }}</h1>
    </div>
  </header>
  @endif

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    {{ $slot }}
    </div>
  </main>
</div>
    </body>
</html>