<div>
    <h1 class="text-3xl text-gray-800">{{ __('Regionalle instillinger') }}</h1>
    <form class="max-w-sm xl:max-w-lg w-1/2 bg-white border border-black p-6 rounded-lg shadow-lg mb-12"
          wire:submit.prevent="opdater">
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
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3 md:flex md:justify-end">
              <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                      type="submit">
                Opdater
              </button>
            </div>
          </div>
    </form>
</div>
