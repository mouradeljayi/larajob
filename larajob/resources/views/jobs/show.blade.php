@extends('layouts.app')

@section('content')
<h1 class="text-3xl text-green-500 mb-3">{{ $job->title }}</h1>
<div class="px-3 py-5 mb-3 rounded shadow bg-white hover:shadow-lg border-2 border-gray-400">
  <p class="mb-4">{{ $job->description }}</p>
  <div class="flex items-center">
    <span class="h-2 w-2 bg-green-400 rounded-full mr-1 mt-1"></span>
    <a href="#">Consulter la mission</a>
  </div>
  <span class="text-sm text-gray-600 font-bold">{{ number_format($job->price / 100, 2, ',', '') }} €</span>
</div>
@endsection
