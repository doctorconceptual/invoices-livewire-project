@props(['tab', 'text', 'selected'])

<button wire:click="$set('tab', '{{ $tab }}')"
    {{ $attributes->merge(['class' => 'pb-3 font-medium ' . ($selected == $tab ? 'text-main border-b-2 border-main text-center' : 'border-b border-gray-300 text-light-gray-dark') . ($tab != 'all' ? ' px-[25px]' : '') . ($tab == 'paid' ? ' text-start' : '')]) }}>
    <span>{{ $text }}</span>
</button>
