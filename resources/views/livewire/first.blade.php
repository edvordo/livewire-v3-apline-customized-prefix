<div wire:init="iAmLongLoading">
    <a href="{{ route('second') }}" wire:navigate>goto Second</a>
    <button type="button" data-x-data data-x-on:click="alert('hi from first')">but I still work with <code>data-x-data data-x-on:click="alert('hi from first')"</code></button>
    <button type="button" wire:click="updateTitle('setting a title')"> and wire:click still works as well</button>

    <div x-data="{ collapsed: true }">
        <button type="button" x-on:click="collapsed = !collapsed" dusk="x.data.click.in.first">I wont work</button>
        <div x-collapse x-cloak x-show="!collapsed">
            I remain hidden in first
        </div>
    </div>
    <div data-x-data="{ collapsed: true }">
        <pre data-x-text="collapsed ? 'yes' : 'no'"></pre>
        <button type="button" data-x-on:click="collapsed = !collapsed" dusk="data.x.data.click.in.first">click me reveal</button>
        <div data-x-collapse data-x-cloak data-x-show="!collapsed">
            I was hidden in first
        </div>
    </div>
    <div>{{ $title ?? 'N/A' }}</div>
    <div wire:loading>Loading long lasting task</div>
    <div>{{ $title2 }}</div>
    <div data-x-cloak>am cloaked</div>

</div>
