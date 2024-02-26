<div>
    <input type="text" wire:model="todo" placeholder="Todo...">

    <button wire:click="add">Add Todo</button>

    <br>

    <button x-on:click="$wire.todo = ''">Clear</button>

    <br>

    <!-- $wire.set sends a request, unless the third parameters is passed as false -->
    <button x-on:click="$wire.set('todo', '', false)">Clear set</button>

    <br>

    Todo character length: <h2 x-text="$wire.todo.length"></h2>

    Todo character length: <h2 x-text="$wire.get('todo').length"></h2>

    <ul>
        @foreach ($todos as $todo)
        <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>