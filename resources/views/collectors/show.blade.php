<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">
                {{--                {{ __('Collectors') }}--}}
            </h2>
            <a href="{{ route('collectors.create') }}"
               class="flex-0 rounded text-stone-100 bg-stone-500 p-1 mx-2">
                {{ __("Add Collector") }}
            </a>
        </div>
    </x-slot>

    <!-- Main Content -->


    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="min-w-lg max-w-6xl mx-auto my-8 px-8 py-8 bg-CafeAuLait-50 rounded-lg border-b border-gray-200">
                <div class="flex w-full bg-PewterBlue-500 text-white p-4 rounded-md ">
                    <h3 class="flex-1 text-xl font-black ">
                        {{ __('Collector Details') }}
                    </h3>
                </div>

                <div class="flex w-full my-6 ">
                    <p class="w-32 text-stone-500">{{ __('Given Name') }}</p>
                    <p class="flex-1">
                        {{ $collector->given_name}}
                    </p>
                </div>


                <div class="flex w-full mt-6 ">
                    <p class="w-32 text-stone-500">{{ __('Family Name') }}</p>
                    <p class="flex-1 ">
                        {{ $collector->family_name }}
                    </p>

                </div>


                <div class="flex w-full my-6 ">
                    <p class="w-32 text-stone-500">{{ __('Cars Owned') }}</p>
                    <p class="flex-1 flex-wrap ml-1 text-sm gap-1">
                        @foreach($collector->cars as $car)
                            <span class="p-1 px-2 m-1 rounded-full bg-stone-200 text-900">{{ $car }}</span>
                        @endforeach
                    </p>
                </div>


                <div class="flex w-full my-6 gap-4">
                    <p for="" class="w-32"></p>

                    <a href="{{ route('collectors.index') }}"
                       class="-ml-4 rounded text-center w-24 p-2
                               bg-KhakiWeb-600 text-stone-100 border border-stone-50 shadow-md
                               hover:bg-stone-100 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-500">
                        {{ __('Back') }}
                    </a>

                    <a href="{{ route('collectors.edit', $collector->id) }}"
                       class="rounded w-24  p-2 text-center
                                    bg-BlueSapphire-300 text-amber-100 border border-amber-50 shadow-md
                                    hover:bg-amber-100 hover:border-amber-500 hover:text-amber-500 hover:shadow-sm
                                    transition ease-in-out duration-500">
                        {{ __('Edit') }}
                    </a>

                    <a href="{{ route('collectors.delete', $collector->id) }}"
                       class="rounded text-center w-24 p-2
                               bg-CafeAuLait-300 text-red-100 border border-red-50 shadow-md
                               hover:bg-red-100 hover:border-red-500 hover:text-red-500 hover:shadow-sm
                               transition ease-in-out duration-500">
                        {{ __('Delete') }}
                    </a>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>
