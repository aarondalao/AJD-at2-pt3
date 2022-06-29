<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-1 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Collectors') }}
            </h2>
            <div>
                <a href="{{ route('collectors.create') }}"
                   class="flex-0 rounded text-stone-100 bg-stone-500 p-1 mx-2">
                    {{ __("Add Collector") }}
                </a>
            </div>
        </div>
    </x-slot>


    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="min-w-lg max-w-6xl mx-auto my-8 px-8 py-8 bg-CafeAuLait-50 rounded-lg border-b border-gray-200">
                <form action="{{ route('collectors.update', ['collector'=>$collector->id]) }}"
                      method="post"
                      class="">

                    @csrf
                    @method('PUT')

                    <div class="flex w-full bg-PewterBlue-500 text-white p-4 rounded-md ">
                        <h3 class="flex-1 text-xl font-black ">
                            {{ __('Edit this Collector') }}
                        </h3>
                    </div>

                    <div class="flex w-full my-6 ">
                        <label for="GivenName" class="w-32 pt-2">{{ __('Given Name') }}</label>
                        <input type="text" id="GivenName" name="given_name"
                               value="{{old('given_name') ?? $collector->given_name }}"
                               class="flex-1 border-1 border-stone-300
                          @error('given_name') text-red-500 border-red-500
                          @enderror">
                    </div>

                    @error('given_name')
                    <p class="m-0 p-0 mt-1 ml-32 italic text-red-500">
                        {{ __('The given name is optional') }}
                    </p>
                    @enderror

                    <div class="flex w-full mt-6 ">
                        <label for="FamilyName" class="w-32 pt-2">{{ __('Family Name') }}</label>
                        <input type="text" id="FamilyName" name="family_name"
                               value="{{old('family_name') ?? $collector->family_name }}"
                               class="flex-1 border-1 border-stone-300
                          @error('family_name') text-red-500 border-red-500
                          @enderror">
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
                            @foreach($carList as $cl)
                                <div class=" transition ease-in-out delay-150 hover:-translate-y-1--}}
                                                 hover:scale-110 hover:bg-sky-300 hover:shadow-inner duration-300">
                                    <label>
                                        <input id="{{ $cl->code }}" name="car[]" type="checkbox"
                                               value="{{ $cl->code }}"
                                               @if( in_array( $cl->code, $collector->cars))
                                               checked
                                            @endif
>

                                        {{ $cl->code  }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    @error('cars')
                    <p class="m-0 p-0 mt-1 ml-32 italic text-red-500">
                        {{ __('A car is required.') }}
                    </p>
                    @enderror

                    <div class="flex w-full my-6 gap-4">

                        <label for="" class="w-32"> </label>

                        <button type="submit" name="save"
                                class="rounded w-24 p-2 bg-KhakiWeb-600 -ml-4 text-sky-100 border border-sky-50
                                hover:bg-sky-100 hover:border-sky-500 hover:text-sky-500 transition ease-in-out
                                duration-250">
                            {{ __('Save') }}
                        </button>

                        <button type="reset" name="reset"
                                class="rounded w-24  p-2
        bg-CafeAuLait-300 text-amber-100 border border-amber-50
        hover:bg-amber-100 hover:border-amber-500 hover:text-amber-500
        transition ease-in-out duration-250">
                            {{ __('Clear') }}
                        </button>

                        <a href=" {{ route('collectors.index')}}"
                           class="rounded text-center w-24 p-2
   bg-BlueSapphire-300 text-stone-100 border border-stone-50
   hover:bg-stone-100 hover:border-stone-500 hover:text-stone-500
   transition ease-in-out duration-250">
                            {{ __('Back') }}
                        </a>

                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
