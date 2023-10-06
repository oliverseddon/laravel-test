@extends('auth.layout')

@section('content')

<div class="w-full max-w-7xl p-6">
  @if ($message = Session::get('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      {{ $message }}
    </div>    
  @endif
  <h1 class="text-3xl font-semibold mb-2">Test Dashboard</h1>
  <div class="text-2xl">
    Welcome {{ Auth::user()->name }},
  </div>
  <div class="grid grid-cols-1 gap-3 mt-12 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3 lg:gap-6">
    @for ($i = 0; $i < 6; $i++)
      <article class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="p-5">
          <a href="#">
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lorem ipsum dolor sit amet</h2>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-amber-600 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
            Read more
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
          </a>
        </div>
      </article>
    @endfor
  </div>
</div>
    
@endsection