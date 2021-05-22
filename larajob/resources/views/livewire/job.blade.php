<div>
  <div class="px-3 py-5 mb-3 rounded shadow bg-white hover:shadow-lg border-2 border-gray-400">
    <div class="flex justify-between">
      <h1 class="text-xl font-bold text-green-700">{{ $job->title }}</h1>
      <svg wire:click="addLike" fill="{{ $job->isLiked() ? 'green' : 'white' }}" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
      </svg>
    </div>
    <div class="flex items-center">
      <span class="h-2 w-2 bg-green-400 rounded-full mr-1 mt-1"></span>
      <a href="{{ route('jobs.show', $job->id) }}">Consulter la mission</a>
    </div>
    <span class="text-sm text-gray-600 font-bold">{{ number_format($job->price / 100, 2, ',', '') }} €</span>
  </div>
</div>
