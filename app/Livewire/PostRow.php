<?php

namespace App\Livewire;

use Livewire\Component;

class PostRow extends Component
{

    public $post;

    public function mount($post)
    {
        $this->post = $post;
    }

    public function trash()
    {
        $this->post->delete();
    }

    public function render()
    {
        return view('livewire.post-row');
    }
}
