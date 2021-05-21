<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{
    public $message;
    public $type;
    public $colors = [
      'error' => 'border-red-500 text-red-500 bg-red-200',
      'success' => 'border-green-500 text-green-500 bg-green-200',
      'warning' => 'border-yellow-500 text-yellow-500 bg-yellow-200',
      'info' => 'border-blue-500 text-blue-500 bg-blue-200'
    ];
    protected $listeners =  ['flash' => 'setFlashMessage'];

    public function setFlashMessage($message, $type)
    {
      $this->message = $message;
      $this->type = $type;

      $this->dispatchBrowserEvent('flash-message', ['message' => $this->message]);
    }

    public function render()
    {
        return view('livewire.flash');
    }
}
