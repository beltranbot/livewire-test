<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Renderless;

class ListPosts extends Component
{
    public $posts;

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.list-posts');
    }

    #[Renderless]
    public function getPostCount()
    {
        return "Hello world";
    }
}
