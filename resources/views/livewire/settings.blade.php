<x-slot name="sidebar">
    @include('components.settings.sidebar')
</x-slot>
<div class="w-full">
    @switch($page)
        @case('profile')
            @include('components.settings.profile')
            @break

        @default
        Unknown Page
    @endswitch


</div>
