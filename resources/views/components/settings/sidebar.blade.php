<div class="flex flex-col w-full text-xl text-gray-900 bg-gray-200 font-mono border border-gray-700 m-3">
    <a href="{{ route('settings', 'profile') }}"
       class="hover:bg-gray-400 pl-4 {{ (request()->is('settings/profile')) ? 'bg-gray-400' : '' }}">
       <i class="fas fa-house-user w-6"></i>
       <span class="pl-2">{{ __('Stamdata') }}</span>
    </a>
    <a href="{{ route('settings', 'hours') }}"
       class="hover:bg-gray-400 pl-4 {{ (request()->is('settings/hours')) ? 'bg-gray-400' : '' }}">
       <i class="fas fa-clock w-6"></i>
       <span class="pl-2">{{ __('Åbningstider') }}</span>
    </a>
    <a href="{{ route('settings', 'tables') }}"
       class="hover:bg-gray-400 pl-4 {{ (request()->is('settings/tables')) ? 'bg-gray-400' : '' }}">
       <i class="fas fa-chair w-6"></i>
       <span class="pl-2">{{ __('Borde') }}</span>
    </a>
    <a href="{{ route('settings', 'rooms') }}"
       class="hover:bg-gray-400 pl-4 {{ (request()->is('settings/rooms')) ? 'bg-gray-400' : '' }}">
       <i class="fas fa-hotel w-6"></i>
       <span class="pl-2">{{ __('Lokaler') }}</span>
    </a>
</div>
