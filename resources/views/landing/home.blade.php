{{--
    written by: aaron dalao


--}}

<x-guest-layout>
    <div class="bg-orange-200">
        <h2 class="font-semibold text-xl text-stone-700 dark:text-gray-500 leading-tight m-auto px-6 py-4">
            {{ __("Cars N' Collectors") }}
        </h2>

        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="card-header flex w-full bg-amber-700 text-amber-50 rounded-md">
                    <h3 class="ml-2 my-1 flex-1 text-2xl">
                        {{ __('Total document count:')  }}
                    </h3>
                </div>


                <div class="flex justify-center align-middle p-6 bg-white border-b border-gray-200">


                    <div class="bg-amber-100 mx-2 rounded w-96 mx-auto rounded-2xl shadow-lg border-emerald-800 border border-1
                    overflow-hidden">
                        <div class="h-48 p-3 overflow-hidden text-stone-500 font-black text-10xl text-center">
                            {{ $cars }}
                        </div>
                        <div class="bg-sky-300 text-stone-500 p-3">
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
                        <div class="bg-sky-300 text-stone-500 p-3">
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
