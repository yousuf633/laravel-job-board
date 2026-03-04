<x-layout-simple :title="$pageTitle">
     

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
   <a href="/">
    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="mx-auto h-10 w-auto" />
    </a>
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">
     Create your account
    </h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="/signup" method="POST" class="space-y-6">
        @csrf
        <div>
        <label for="name" class="block text-sm/6 font-medium text-gray-700">
          Full Name
        </label>
        <div class="mt-2">
          <input 
            id="name" 
            type="text" 
            name="name" 
            value="{{ old('name') }}"
            required 
           
            class="block w-full rounded-md bg-white border border-gray-300 px-3 py-1.5 text-base text-gray-900 outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm/6"
          />
        </div>
      </div>
      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-700">
          Email address
        </label>
        <div class="mt-2">
          <input 
            id="email" 
            type="email" 
            name="email" 
            value="{{ old('email') }}"
            required 
            autocomplete="email" 
            class="block w-full rounded-md bg-white border border-gray-300 px-3 py-1.5 text-base text-gray-900 outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm/6"
          />
        </div>
      </div>

      <div>
       
          <label for="password" class="block text-sm/6 font-medium text-gray-700">
            Password
          </label>
          
       
        <div class="mt-2">
          <input 
            id="password" 
            type="password" 
            name="password" 
            required 
            autocomplete="current-password" 
            class="block w-full rounded-md bg-white border border-gray-300 px-3 py-1.5 text-base text-gray-900 outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm/6"
          />
        </div>
      </div>
      <div>
       
          <label for="password_confirmation" class="block text-sm/6 font-medium text-gray-700">
            Confirm Password
          </label>
          
       
        <div class="mt-2">
          <input 
            id="password_confirmation" 
            type="password" 
            name="password_confirmation" 
            required 
            autocomplete="current-password" 
            class="block w-full rounded-md bg-white border border-gray-300 px-3 py-1.5 text-base text-gray-900 outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm/6"
          />
        </div>
      </div>
    
      <div>
        <button 
          type="submit" 
          class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
        >
        Create account
        </button>
      </div>
      @if($errors->all())
      @foreach ($errors->all() as $error )
      <div class="text-red-500 text-sm">
        {{ $error }}

      </div>
          
      @endforeach
      @endif
    </form>

   
  </div>
</div>

</x-layout-simple>