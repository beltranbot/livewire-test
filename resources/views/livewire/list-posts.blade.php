<div>
    @foreach ($posts as $post)
    <div wire:key="{{ $post->id }}">
        <div>{{ $post->id }}</div>
        <div>{{ $post->title }}</div>
        <div>{{ $post->content }}</div>
        <div><a href="/posts/{{ $post->id }}" wire:navigate>details</a></div>
        <div><a href="/posts/{{ $post->id }}/edit" wire:navigate>edit</a></div>
    </div>
    @endforeach

    <button
        type="button"
        wire:click="delete"
        wire:confirm="Are you sure you want to delete this post?">
        Delete post
    </button>

    <span x-text="await $wire.getPostCount()"></span>

</div>
