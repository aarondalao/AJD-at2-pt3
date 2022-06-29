<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-1 font-semibold mt-2 pt-2 text-3xl text-gray-800 leading-tight">
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
                            {{ __('Delete this Car') }}
                        </h3>
                    </div>
                    <div class="border-b-2 border-gray-400"></div>

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

                    <div class="py-2 border-t-2 border-gray-400"></div>
                    <div class="bg-zinc-800 border-2 rounded-md border-red-700 mx-auto my-3 py-3">
                        <form action={{ route('cars.destroy', $car->id) }} method="post">
                            @csrf
                            @method('DELETE')
                            <span class="flex m-2 p-1 justify-center">
                            <strong
                                class="text-red-700 text-4xl"> Are you sure you want to delete this
                            {{ $car->manufacturer }} {{ $car->model  }} ?
                            </strong>
                        </span>
                            <div class="flex w-full justify-center m-2 p-2">
                                <button type="submit"
                                        class="rounded w-24 p-2 mr-5
                                    bg-red-500 ml-4 text-red-100 border border-sky-50 shadow-md
                                    hover:bg-red-800 hover:border-red-3 hover:text-red-200 hover:shadow-lg
                                    transition ease-in-out duration-500">
                                    {{ __('Delete') }}
                                </button>

                                <a href="{{ route('cars.index') }}"
                                   class="rounded text-center w-24 p-2
                               bg-stone-500 text-stone-100 border border-stone-50 shadow-md
                               hover:bg-stone-100 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-500">
                                    {{ __('Go back') }}
                                </a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
