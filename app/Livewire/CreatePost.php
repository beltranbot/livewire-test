<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreatePost extends Component
{
    public PostForm $form;

    public function save()
    {
        $this->form->store();

        return redirect()->to('/posts')
            ->with('status', 'Post successfully created.');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
