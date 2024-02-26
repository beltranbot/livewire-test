<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPosts extends Component
{
    public $posts;

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.list-posts');
    }
}
