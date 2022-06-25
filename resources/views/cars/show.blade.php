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
            <div class="p-6 bg-white rounded-lg border-b border-gray-200">
                <div class="w-full mt-2 mb-6 ">
                    <div class="flex-1">
                        <h3 class="rounded-md text-2xl">
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

                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
