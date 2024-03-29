<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Rule;

class CreatePost extends Component
{
    #[Rule('required', as : 'post title')]
    #[Rule('min:4', message : 'It is too short')]
    public $title = '';

    #[Rule('required', message: 'This field is required')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->redirect('show-posts');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
