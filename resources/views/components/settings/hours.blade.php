<div class="flex flex-col items-center w-full justify-center">
    <h1 class="text-3xl text-gray-800">{{ __('Regionalle instillinger') }}</h1>
    <form class=" w-10/12 bg-white border border-black p-6 rounded-lg shadow-lg mb-12"
          wire:submit.prevent="updateHours">
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
