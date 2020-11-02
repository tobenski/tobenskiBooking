<div class="flex flex-col items-center w-full justify-center">
    <h1 class="text-3xl text-gray-800">{{ __('Tilføj åbningstid') }}</h1>
    <form class="w-10/12 bg-white border border-black p-6 rounded-lg shadow-lg mb-12">
        @csrf
        <div class="md:flex md:items-center rounded-lg p-4">
            <div class="flex md:w-1/5 items-start flex-col">
                <select wire:model="newhour.weekday mr-4">
                    <option value="0">Vælg En Dag</option>
                    <option value="1">{{ __('Mandag') }}</option>
                    <option value="2">{{ __('Tirsdag') }}</option>
                    <option value="3">{{ __('Onsdag') }}</option>
                    <option value="4">{{ __('Torsdag') }}</option>
                    <option value="5">{{ __('Fredag') }}</option>
                    <option value="6">{{ __('Lørdag') }}</option>
                    <option value="7">{{ __('Søndag') }}</option>
                </select>
                @error('newhour.weekday')
                    <span class="text-red-500 italic text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-between md:w-4/5">
                <div class="md:w-full flex justify-between items-center my-1">
                    <div>
                        <input type="time"
                            name="opening_time"
                            id="opening_time"
                            wire:model="newhour.opening_time"
                            class="mr-4 pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                        @error('newhour.opening_time')
                            <span class="text-red-500 italic text-xs">{{ $message }}</span>
                        @enderror
                        <label>til</label>
                        <input type="time"
                            name="closing_time"
                            id="closing_time"
                            wire:model="newhour.closing_time"
                            class="mx-4 pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                        @error('newhour.closing_time')
                            <span class="text-red-500 italic text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center mx-4">
                        <input type="checkbox"
                            name="online_booking"
                            id="online_booking"
                            wire:model="newhour.online_booking"
                            class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                        <label for="online_booking">{{ __('Online Booking') }}</label>
                    </div>
                    <button wire:click.prevent="addHour()" class="float-right mr-6">
                        <i class="fas fa-plus-square"></i>
                    </button>
                </div>
            </div>


        </div>
    </form>
    <h1 class="text-3xl text-gray-800">{{ __('Åbningstider') }}</h1>
    <form class="w-10/12 bg-white border border-black p-6 rounded-lg shadow-lg mb-12">
        @csrf
        @if (session()->has('message'))
            <div class="flex items-center justify-center w-full bg-gray-300 border border-black rounded-lg mb-6">
                <div class="text-green-500 italic">
                    {{ session('message') }}
                </div>
            </div>
        @endif

        @for($i = 1; $i <= 7; $i++)
            @include('components.settings.hours.day', ['day' => $i])
        @endfor

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
