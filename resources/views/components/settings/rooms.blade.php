<div class="flex flex-col items-center w-full justify-center">
    <h1 class="text-3xl text-gray-800">{{ __('Lokaler') }}</h1>
    <div class="max-w-sm md:max-w-full w-10/12 bg-white border border-black p-6 rounded-lg shadow-lg">
        <table class="table-fixed w-full rounded-t-lg">
            <thead class="border-2 border-black bg-gray-300 text-gray-700 w-full">
                <tr class="">
                    <th class="border-2 border-black w-auto">{{ __('Lokale') }}</th>
                    <th class="border-2 border-black w-36">{{ __('Prioritet') }}</th>
                    <th class="border-2 border-black w-36"></th>
                </tr>
            </thead>
            <tbody class="w-full">
                @foreach($rooms as $index => $room)
                    <tr>
                        <td class="border px-4 py-2">
                            <input type="text" wire:model="rooms.{{ $index }}.name" class="w-full px-4 py-2 focus:outline-none focus:bg-gray-100">
                        </td>
                        <td class="border px-4 py-2">
                            <select wire:model="rooms.{{ $index }}.priority">
                                <option value="5">{{ __('Højeste') }}</option>
                                <option value="4">{{ __('Høj') }}</option>
                                <option value="3">{{ __('Mellem') }}</option>
                                <option value="2">{{ __('Lav') }}</option>
                                <option value="1">{{ __('Laveste') }}</option>
                                <option value="0">{{ __('Offline') }}</option>
                            </select>
                        </td>
                        <td class="border px-4 py-4 flex justify-evenly h-full">
                            <button class="float-right">
                                <i class="fas fa-arrow-down"></i>
                            </button>
                            <button class="float-right">
                                <i class="fas fa-arrow-up"></i>
                            </button>
                            <button wire:click.prevent="destroyRoom({{ $room->id }})" class="float-right">
                                <i class="far fa-trash-alt"></i>
                            </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
