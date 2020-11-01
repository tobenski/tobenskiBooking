<x-slot name="sidebar">
    @include('components.settings.sidebar')
</x-slot>
<div class="w-full">
    @switch($page)
        @case('profile')
            @include('components.settings.profile')
            @break
        @case('hours')
            @include('components.settings.hours')
            @break
        @default
        Unknown Page
    @endswitch


</div>
