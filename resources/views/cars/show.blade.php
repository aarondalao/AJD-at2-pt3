<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-1 font-semibold mt-2 pt-2 text-2xl text-gray-800 leading-tight">
                {{ __('Cars') }}
            </h2>

            <div class=" pt-2 mr-6 mt-2">
                <a href="{{ route('cars.index') }}"
                   class="flex-1 rounded text-stone-100 bg-RosyBrown-500 p-2 mx-2">
                    {{ __("Go Back") }}
                </a>
            </div>
        </div>
    </x-slot>


    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="min-w-lg max-w-6xl mx-auto my-8 px-8 py-8 bg-CafeAuLait-50 rounded-lg border-b border-gray-200">
                <div class="w-full mt-2 mb-6 ">

                    <div class="flex w-full bg-PewterBlue-500 text-white p-4 rounded-md ">
                        <h3 class="flex-1 text-xl font-black ">
                            {{ __('Car feature: ') }} {{ $car->manufacturer }} {{ $car->model  }}
                        </h3>
                    </div>
                    <div class="border-1 border-stone-300"></div>

                    {{--         future plans: technical specs on each individual cars   :)      --}}

                    <div class="flex w-full my-6 ml-5 pl-5">
                        <p class="w-64 text-stone-500"> {{  __('Code') }}</p>
                        <p class="flex-1"> {{$car->code}}</p>
                    </div>

                    <div class="flex w-full my-6 ml-5 pl-5">
                        <p class="w-64 text-stone-500"> {{ __('Manufacturer')  }}</p>
                        <p class="flex-1"> {{  $car->manufacturer }}</p>
                    </div>


                    <div class="flex w-full my-6 ml-5 pl-5">
                        <p class="w-64 text-stone-500"> {{ __('Model')  }}</p>
                        <p class="flex-1"> {{  $car->model }}</p>
                    </div>

                    <div class="flex w-full my-6 ml-5 pl-5">
                        <p class="w-64 text-stone-500"> {{ __('Price')  }}</p>
                        <p class="flex-1"> {{  $car->price }}</p>
                    </div>

                    <div class="flex w-full my-6 gap-4">
                        <p for="" class="w-32"></p>

                        <a href="{{ route('cars.index') }}"
                           class="-ml-4 rounded text-center w-24 p-2
                               bg-KhakiWeb-600 text-stone-100 border border-stone-50 shadow-md
                               hover:bg-stone-100 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-500">
                            {{ __('Back') }}
                        </a>

                        <a href="{{ route('cars.edit', $car->id) }}"
                           class="rounded w-24  p-2 text-center
                                    bg-BlueSapphire-300 text-amber-100 border border-amber-50 shadow-md
                                    hover:bg-amber-100 hover:border-amber-500 hover:text-amber-500 hover:shadow-sm
                                    transition ease-in-out duration-500">
                            {{ __('Edit') }}
                        </a>

                        <a href="{{ route('cars.delete', $car->id) }}"
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
    </div>


</x-app-layout>
