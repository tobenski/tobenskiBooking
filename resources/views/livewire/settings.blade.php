<x-slot name="sidebar">
    @include('components.settings.sidebar')
</x-slot>
<div class="w-full">
    @switch($page)
        @case('profile')
            @include('components.settings.profile') <!-- -->
            @break
        @case('hours')
            @include('components.settings.hours')
            @break
        @case('rooms')
            @include('components.settings.rooms')
            @break
        @case('tables')
            @include('components.settings.tables')
            @break
        @case('booking')
            @include('components.settings.booking')
            @break
        @default
        Unknown Page
    @endswitch
</div>
