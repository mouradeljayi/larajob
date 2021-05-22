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
<section x-data="{open: false}">
  <a href="#" class="text-green-500" @click="open = !open">Cliquez ici pour ce mettre une candidature</a>
  <form x-show="open" action="{{ route('proposals.store', $job) }}" method="post">
    @csrf
    <textarea name="content" class="p-3 font-thin w-full max-w-md" rows="8" cols="80"></textarea>
    <button type="submit" class="block bg-green-700 text-white px-3 py-2">Soumettre ma lettre de motivation</button>
  </form>
</section>
@endsection
