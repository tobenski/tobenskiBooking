<div class="md:flex md:items-center mb-6 border border-black rounded-lg p-4">
    <div class="flex md:w-1/5 items-start">
        <label for="opening_time" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">{{ __($dayOfWeekHeader[$day]) }}  </label>
    </div>
    @if(count($dayOfWeek[$day]))
        <div class="flex flex-col md:w-4/5">
            @foreach($dayOfWeek[$day] as $index => $hour)
                <div class="md:w-full flex justify-between items-center bg-gray-100 my-1">
                    <div>
                        <input type="time"
                            name="opening_time"
                            id="opening_time"
                            wire:model="dayOfWeek.{{ $day . '.' . $index }}.opening_time"
                            class="mr-4 pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                        <label>til</label>
                        <input type="time"
                            name="closing_time"
                            id="closing_time"
                            wire:model="dayOfWeek.{{ $day . '.' . $index }}.closing_time"
                            class="mx-4 pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                    </div>
                    <div class="flex items-center mx-4">
                        <input type="checkbox"
                            name="online_booking"
                            id="online_booking"
                            wire:model="dayOfWeek.{{ $day . '.' . $index }}.online_booking"
                            class="pl-4 bg-gray-200 appearence-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                        <label for="online_booking">{{ __('Online Booking') }}</label>
                    </div>
                    <button class="float-right mr-6">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </div>
            @endforeach
        </div>
    @else
        {{ __('Lukket') }}
    @endif
</div>
