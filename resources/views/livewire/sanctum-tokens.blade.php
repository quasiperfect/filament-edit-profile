@php
    $asideClass = config('filament-edit-profile.aside', true) ? 'aside' : '';
@endphp

<x-filament::section :class="$asideClass">
    <x-slot name="heading">
        {{ __('filament-edit-profile::default.token_section_title') }}
    </x-slot>
    <x-slot name="description">
        {{ __('filament-edit-profile::default.token_section_description') }}
    </x-slot>

    {{ $this->table }}
</x-filament::section>
