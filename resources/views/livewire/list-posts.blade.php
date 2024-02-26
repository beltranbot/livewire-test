<div>
    @foreach ($posts as $post)
        <div wire:key="{{ $post->id }}"> 
            <div>{{ $post->id }}</div>
            <div>{{ $post->title }}</div>
            <div><a href="/posts/{{ $post->id }}" wire:navigate>details</a></div>
        </div>
    @endforeach
</div>