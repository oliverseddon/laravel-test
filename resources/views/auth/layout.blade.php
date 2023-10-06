<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <nav class="flex justify-center w-full text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
    @guest
      <ul class="w-full flex flex-wrap justify-center -mb-px">
        <li class="mr-2">
          <a class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 {{ (request()->is('login')) ? 'active border-amber-500 dark:text-amber-600' : 'border-transparent' }}" aria-current="page" href="{{ route('login') }}">Login</a>
        </li>
        <li class="mr-2">
          <a class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 {{ (request()->is('register')) ? 'active border-amber-500 dark:text-amber-600' : 'border-transparent' }}" href="{{ route('register') }}">Register</a>
        </li>
      </ul>
    @else    
      <ul class="w-full flex flex-wrap justify-end -mb-px">
        <li class="mr-2">
          <a class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
          </form>
        </li>
      </ul>
    @endguest
  </nav>    
  <div class="flex place-content-center">
    @yield('content')
  </div>
</body>
</html>