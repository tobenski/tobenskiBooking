<x-app-layout>
    <div class="flex items-center justify-center h-full w-full bg-gray-200">
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600 w-1/3">
            {{ session('status') }}
        </div>
    @endif
        <div class="max-w-sm lg:max-w-sm w-1/2 bg-white border border-black p-6 rounded-lg shadow-lg">
            <h1 class="text-3xl text-gray-800">{{ __('Login') }}</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <input type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="E-mail">
                    @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="password"
                        name="password"
                        id="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Password">
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="checkbox"
                           name="remember"
                           id="remember"
                           class="mr-2 leading-tight">
                    <span class="text-sm">
                        {{ __('Automatisk log ind fra denne computer') }}
                    </span>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        {{ __('Log ind') }}
                    </button>
                    <a href="#"
                       class="inline-block align-baseline font-bold text-sm text-gray-700 hover:text-black">
                        {{ __('Glemt kodeord?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
