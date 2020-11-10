<div class="flex flex-col items-center w-full justify-center">
    <h1 class="text-3xl text-gray-800">{{ __('Stamdata') }}</h1>
    <form class="max-w-sm md:max-w-full w-10/12 bg-white border border-black p-6 rounded-lg shadow-lg"
          wire:submit.prevent="updateProfileData">
        @csrf
        @if (session()->has('message'))
            <div class="flex items-center justify-center w-full bg-gray-300 border border-black rounded-lg mb-6">
                <div class="text-green-500 italic">
                    {{ session('message') }}
                </div>
            </div>
        @endif
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="name" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Navn') }}</label>
            </div>
            <div class="md:w-2/3">
                <input type="text"
                       name="name"
                       id="name"
                       wire:model="profile.name"
                       class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                @error('profile.name')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="email" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Email') }} </label>
            </div>
            <div class="md:w-2/3">
                <input type="email"
                       name="email"
                       id="email"
                       wire:model="profile.email"
                       class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                @error('profile.email')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="phone" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Telefon') }}  </label>
            </div>
            <div class="md:w-2/3">
                <input type="string"
                       name="phone"
                       id="phone"
                       wire:model="profile.phone"
                       class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                @error('profile.phone')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="address" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Adresse') }}  </label>
            </div>
            <div class="md:w-2/3">
                <input type="text"
                       name="address"
                       id="address"
                       wire:model="profile.address"
                       class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                @error('profile.address')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="zip" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Postnummer') }}  </label>
            </div>
            <div class="md:w-2/3">
                <input type="number"
                       name="zip"
                       id="zip"
                       min="1000"
                       max="9999"
                       wire:model="profile.zip"
                       class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                @error('profile.zip')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="city" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('By') }}  </label>
            </div>
            <div class="md:w-2/3">
                <input type="text"
                       name="city"
                       id="city"
                       wire:model="profile.city"
                       class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                @error('profile.city')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="country" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Land') }}  </label>
            </div>
            <div class="md:w-2/3">
                <input type="text"
                       name="country"
                       id="country"
                       wire:model="profile.country"
                       class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                @error('profile.country')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </form>
    <hr class="my-2">
    <h1 class="text-3xl text-gray-800">{{ __('Regionalle instillinger') }}</h1>
    <form class="max-w-sm md:max-w-full w-10/12 bg-white border border-black p-6 rounded-lg shadow-lg mb-12"
          wire:submit.prevent="updateProfileData">
        @csrf
        @if (session()->has('message'))
            <div class="flex items-center justify-center w-full bg-gray-300 border border-black rounded-lg mb-6">
                <div class="text-green-500 italic">
                    {{ session('message') }}
                </div>
            </div>
        @endif
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="lang" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Sprog') }}</label>
            </div>
            <div class="md:w-2/3">
                <input type="text"
                       name="lang"
                       id="lang"
                       wire:model="profile.lang"
                       class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                @error('profile.lang')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="timezone" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('Timezone') }}  </label>
            </div>
            <div class="md:w-2/3">
                <input type="text"
                       name="timezone"
                       id="timezone"
                       wire:model="profile.timezone"
                       class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                @error('profile.timezone')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label for="24_hour" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __('24 timers ur') }}  </label>
            </div>
            <div class="md:w-2/3 md:flex md:items-start w-full">
                <input type="checkbox"
                       name="24_hour"
                       id="24_hour"
                       wire:model="profile.24_hour"
                       class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                @error('profile.24_hour')
                    <span class="text-red-500 italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </form>
</div>
