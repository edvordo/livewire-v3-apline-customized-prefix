<div>
    <a href="{{ route('first') }}" wire:navigate>goto First</a>
    <button type="button" data-x-data data-x-on:click="alert('hi from second')">but I still work with <code>data-x-data data-x-on:click="alert('hi from second')"</code></button>
    <button type="button" wire:click="updateTitle('setting a title')"> and wire:click still works as well</button>
    <div>{{ $title ?? 'N/A' }}</div>
    <div data-x-cloak>am cloaked</div>
    <div x-cloak>am cloaked 2</div>
</div>
