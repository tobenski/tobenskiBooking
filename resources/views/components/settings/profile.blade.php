<div class="flex items-center w-full justify-center">
    <h1 class="text-3xl text-gray-800">{{ __('Stamdata') }}</h1>
    <form action="" class="max-w-sm lg:max-w-sm w-1/2 bg-white border border-black p-6 rounded-lg shadow-lg">
        @csrf
        <div>
            <label for="name">{{ __('Virksomhed') }}</label>
            <input type="text"
                wire:model="user.name"
                >
        </div>
    </form>
</div>
