<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
</x-app-layout>
