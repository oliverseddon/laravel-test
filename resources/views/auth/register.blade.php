@extends('auth.layout')

@section('content')

<div class="block max-w-lg w-96 mt-16 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <form action="{{ route('store') }}" method="post">
    @csrf
    <div class="mb-6">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('name') text-red-700 dark:text-red-500 @enderror">Name</label>
      <input type="text" class="
        bg-gray-50
        border
        border-gray-300
        text-gray-900
        text-sm
        rounded-lg
        focus:ring-amber-500
        focus:border-amber-500
        block
        w-full
        p-2.5
        dark:bg-gray-700
        dark:border-gray-600
        dark:placeholder-gray-400
        dark:text-white
        dark:focus:ring-amber-500
        dark:focus:border-amber-500
        @error('name')
          bg-red-50
          border
          border-red-500
          text-red-900
          placeholder-red-700
          text-sm
          rounded-lg
          focus:ring-red-500
          dark:bg-gray-700
          focus:border-red-500
          block
          w-full
          p-2.5
          dark:text-red-500
          dark:placeholder-red-500
          dark:border-red-500
        @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Joe Bloggs">
      @if ($errors->has('name'))
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('name') }}</p>
      @endif
    </div>
    <div class="mb-6">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('name') text-red-700 dark:text-red-500 @enderror">Email Address</label>
      <input type="email" class="
        bg-gray-50
        border
        border-gray-300
        text-gray-900
        text-sm
        rounded-lg
        focus:ring-amber-500
        focus:border-amber-500
        block
        w-full
        p-2.5
        dark:bg-gray-700
        dark:border-gray-600
        dark:placeholder-gray-400
        dark:text-white
        dark:focus:ring-amber-500
        dark:focus:border-amber-500
        @error('email')
          bg-red-50
          border
          border-red-500
          text-red-900
          placeholder-red-700
          text-sm
          rounded-lg
          focus:ring-red-500
          dark:bg-gray-700
          focus:border-red-500
          block
          w-full
          p-2.5
          dark:text-red-500
          dark:placeholder-red-500
          dark:border-red-500
        @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="joe@bloggs.com">
      @if ($errors->has('email'))
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('email') }}</p>
      @endif
    </div>
    <div class="mb-6">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error('name') text-red-700 dark:text-red-500 @enderror">Password</label>
      <input type="password" class="
        bg-gray-50
        border
        border-gray-300
        text-gray-900
        text-sm
        rounded-lg
        focus:ring-amber-500
        focus:border-amber-500
        block
        w-full
        p-2.5
        dark:bg-gray-700
        dark:border-gray-600
        dark:placeholder-gray-400
        dark:text-white
        dark:focus:ring-amber-500
        dark:focus:border-amber-500
        @error('password')
          bg-red-50
          border
          border-red-500
          text-red-900
          placeholder-red-700
          text-sm
          rounded-lg
          focus:ring-red-500
          dark:bg-gray-700
          focus:border-red-500
          block
          w-full
          p-2.5
          dark:text-red-500
          dark:placeholder-red-500
          dark:border-red-500
        @enderror"
        id="password" name="password" placeholder="••••••••••••">
      @if ($errors->has('password'))
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('password') }}</p>
      @endif
    </div>
    <div class="mb-6">
      <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
      <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" id="password_confirmation" name="password_confirmation" placeholder="••••••••••••">
    </div>
    <button type="submit" class="text-white bg-amber-600 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Register</button>
  </form>   
</div>

@endsection