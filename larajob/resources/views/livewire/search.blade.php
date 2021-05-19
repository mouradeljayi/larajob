<div x-data="{ open: true }" class="inline-block relative mr-8">
    <input
    wire:keydown.enter="showJob"
    @click.away="open = false; @this.resetIndex()"
    @click="open = true"
    wire:keydown.arrow-up.prevent="decrementIndex"
    wire:keydown.arrow-down.prevent="incrementIndex"
    wire:keydown.backspace="resetIndex()"
    wire:model="query" type="text"
    class="bg-gray-200 text-gray-700 border-2 border-green-500 px-4 rounded-full py-1 focus:outline-none mr-1" placeholder="Recherche une mission..">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 absolute top-0 right-0 mr-2 mt-2" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
    </svg>
    @if(strlen($query) > 1 )
    <div x-show="open" class="absolute border bg-white rounded mt-1 px-2 w-52">
      @if(count($jobs) > 0)
      @foreach($jobs as $index => $job)
      <p class="p-1  {{ ($index === $selectedIndex) ? 'text-green-500' : '' }}">{{ $job->title }}</p>
      @endforeach
      @else
      <span class="text-red-500 p-1">Pas de résultat pour "{{ $query }}"</span>
      @endif
    </div>
    @endif
</div>
