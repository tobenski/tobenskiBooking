<nav class="flex w-full bg-gray-900 items-center flex-col md:flex-row">
    <div class="flex w-72 text-2xl pl-4 text-red-600 font-mono font-semibold">tobenski<span class="text-white">Booking</span></div>
    @auth
        <div class="flex w-full justify-between md:pl-6 pr-4 flex-wrap-reverse">
            <div class="flex text-white">
                <a href="#"
                   class="bg-gray-300 hover:bg-gray-200 h-full px-4 md:px-0 md:w-32 py-1 md:py-4 text-center text-gray-800 border-gray-500">
                   Booking
                </a>
                <a href="#"
                    class="bg-gray-900 hover:bg-gray-800 h-full px-4 md:px-0 md:w-32 py-1 md:py-4 text-center text-gray-300 border border-gray-700">
                    Arkiv
                </a>
            </div>
            <div class="flex flex-col text-gray-500 text-xs py-2 px-4 md:px-0">
                <div>
                    {{ Auth::user()->name }}
                </div>
                <div class="text-gray-300">
                    <a href="#" class="pr-2">
                        {{ __('Opsætning') }}
                    </a>
                    <a href="#" class="pr-2">
                        {{ __('Hjælp') }}
                    </a>
                    <a href="#" class="pr-2">
                        {{ __('Log ud') }}
                    </a>
                </div>
            </div>
        </div>
    @endauth
</nav>
