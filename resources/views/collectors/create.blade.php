<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-1 font-semibold text-xl text-gray-200 leading-tight">
                {{ __('Collectors') }}
            </h2>
            <div class=" pt-2 mr-6 mt-2">
                <a href="{{ route('collectors.create') }}"
                   class="flex-1 rounded text-stone-100 bg-RosyBrown-500 p-2 mx-2">
                    {{ __("Add Collector") }}
                </a>
            </div>
        </div>
    </x-slot>


    <form action="{{ route('collectors.store') }}"
          method="post"
          class="">
        @csrf

        <div class="flex w-full mt-2 mb-6 ">
            <h3 class="flex-1 border-1 border-stone-300 text-2xl">
                {{ __('Add New Collector') }}
            </h3>
        </div>

        <div class="flex w-full my-6 ">
            <label for="GivenName" class="w-32 pt-2">{{ __('Given Name') }}</label>
            <input type="text" id="GivenName" name="given_name"
                   value="{{old('given_name')}}"
                   class="flex-1 rounded-md border-1 border-stone-300
                                           @error('given_name') text-red-500 border-red-500 @enderror">
        </div>
        @error('given_name')
        <p class="m-0 p-0 mt-1 ml-32 italic text-red-500">
            {{ __('The given name is optional') }}
        </p>
        @enderror

        <div class="flex w-full mt-6 ">
            <label for="FamilyName" class="w-32 pt-2">{{ __('Family Name') }}</label>
            <input type="text" id="FamilyName" name="family_name"
                   value="{{ old('family_name') }}"
                   class="flex-1 rounded-md border-1 border-stone-300
                                           @error('family_name') text-red-500 border-red-500 @enderror">
        </div>
        @error('family_name')
        <p class="m-0 p-0 mt-1 ml-32 italic text-red-500">
            {{ __('The family name is required and must be at least one character long (not whitespace)') }}
        </p>
        @enderror


        {{--  tick boxes component      --}}
        {{--  created/edited by: aaron dalao        --}}
        <div class="flex w-full h-max-98 h-80 my-6 py-2 ">
            <label for="Cars" class="w-32 pt-2">{{ __('Cars Owned') }}</label>
            <div class="flex flex-1 flex-col flex-wrap">
                @foreach($cars as $car)
                    <div class=" transition ease-in-out delay-150 hover:-translate-y-1
                             hover:scale-110 hover:bg-sky-300 hover:shadow-inner duration-300">
                        <label>
                            <input id="{{ $car->code }}" name="car[]" type="checkbox"
                                   value="{{ $car->code }}">
                            {{ $car->code  }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>


{{--        <p class="m-0 p-1 mt-1 ml-32 bg-sky-200 text-sky-800 text-italic">--}}
{{--            Cars Owned: This will not function at this time, next version will have method to--}}
{{--            add owned cars.</p>--}}
{{--        @error('cars')--}}
{{--        <p class="m-0 p-0 mt-1 ml-32 italic text-red-500">--}}
{{--            {{ __('A car is required.') }}--}}
{{--        </p>--}}
{{--        @enderror--}}

        <div class="flex w-full my-6 gap-4">
            <label for="" class="w-32"> </label>
            <button type="submit" name="save"
                    class="rounded w-24 p-2
                                    bg-sky-500 -ml-4 text-sky-100 border border-sky-50 shadow-md
                                    hover:bg-sky-100 hover:border-sky-500 hover:text-sky-500 hover:shadow-sm
                                    transition ease-in-out duration-500">
                {{ __('Save') }}
            </button>
            <button type="submit" name="save"
                    class="rounded w-24  p-2
                                    bg-amber-500 text-amber-100 border border-amber-50 shadow-md
                                    hover:bg-amber-100 hover:border-amber-500 hover:text-amber-500 hover:shadow-sm
                                    transition ease-in-out duration-500">
                {{ __('Clear') }}
            </button>
            <a href="{{ route('collectors.index') }}"
               class="rounded text-center w-24 p-2
                               bg-stone-500 text-stone-100 border border-stone-50 shadow-md
                               hover:bg-stone-100 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-500">
                {{ __('Back') }}
            </a>
        </div>
    </form>

</x-app-layout>
