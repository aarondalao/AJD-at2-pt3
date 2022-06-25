{{--
    written by: aaron dalao
--}}
<x-guest-layout>
    <div class="bg-BlueSapphire-500 w-full fixed">
        <h2 class="font-semibold text-xl text-white leading-tight m-auto px-6 py-4">
            {{ __("Cars N' Collectors") }}
        </h2>

        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-stone-100 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 text-sm text-stone-100 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>


    <div class="flex justify-center items-center h-screen bg-CafeAuLait-50 ">
        <div class="max-w-7xl my-auto mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-md shadow-gray-400 sm:rounded-lg">

                <div class="card-header flex w-full bg-PewterBlue-500 text-stone-100 rounded-md">
                    <h3 class="ml-2 my-1 flex-1 text-2xl">
                        {{ __('Total document count:')  }}
                    </h3>
                </div>

                <div class="flex justify-center align-middle p-6 bg-white border-b border-gray-200">
                    <div class="bg-amber-100 mr-4 rounded w-96 mx-auto rounded-2xl shadow-lg border-emerald-800 border border-1
                    overflow-hidden">
                        <div class="h-48 p-3 overflow-hidden text-stone-500 font-black text-10xl text-center">
                            {{ $cars }}
                        </div>
                        <div class="bg-KhakiWeb-500 text-stone-100 p-3">
                            <p class="text-2xl text-center">
                                Cars
                            </p>
                        </div>
                    </div>

                    <div class="bg-amber-100 mx-2 rounded w-96 mx-auto rounded-2xl shadow-lg border-emerald-800 border border-1
                    overflow-hidden">
                        <div class="h-48 p-3 overflow-hidden text-stone-500 font-black text-10xl text-center">
                            {{ $collectors }}
                        </div>
                        <div class="bg-KhakiWeb-500 text-stone-100 p-3">
                            <p class="text-2xl text-center">
                                Collectors
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

