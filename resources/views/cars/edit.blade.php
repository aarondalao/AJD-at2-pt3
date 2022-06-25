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


    @if(count($errors) > 0)
        <div
            class="errorBlock max-w-xl mt-4 mx-auto p-10 bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md"
            role="alert">
            <div class="errorBlock__wrapper block">
                <div class="errorBlock__alertBlock py-1bg-green-500">
                    <strong class="errorBlock__interjection text-3xl inline-block">Hmmm...</strong>
                    <i class="errorBlock__animatedIcon fa-solid fa-triangle-exclamation animate-ping h-50 w-50 inline-block float-right"></i>
                    <span class="errorBlock__alertMessage m-1 pt-2 block"> looks like there are some problems with your inputs. </span>
                </div>
                <div class="errorBlock_messageBlock block mx-4 px-4 ">
                    <ul class="errorBlock__messageList list-disc">
                        @foreach($errors->all() as $err)
                            <li class="errorBlock__message">{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif


    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white rounded-lg border-b border-gray-200">
                <div class="flex w-full mt-2 mb-6 ">
                    <h3 class="flex-1 border-1 border-stone-300 text-2xl">
                        {{ __('Edit this Car: ') }} {{ $car->manufacturer }} {{ $car->model  }}
                    </h3>
                </div>
                <form action="{{ route('cars.update',$car->id) }}" method="POST">
                    @csrf
                    @method('PUT')


                    <div class="flex w-full mt-6">
                        <label for="code" class="w-32 pt-2"> {{ __('Code') }} </label>
                        <input type="text" id="code" name="code" placeholder="{{ $car->code  }}"
                               class="flex-1 rounded-md border-1 border-stone-300" aria-required="true">

                    </div>
                    <div class="flex w-full mt-6">
                        <label for="manufacturer" class="w-32 pt-2"> {{ __('Manufacturer') }} </label>
                        <input type="text" id="manufacturer" name="manufacturer" placeholder="{{ $car->manufacturer  }}"
                               class="flex-1 rounded-md border-1 border-stone-300 aria-required="true">

                    </div>
                    <div class="flex w-full mt-6">
                        <label for="model" class="w-32 pt-2"> {{ __('Model') }} </label>
                        <input type="text" id="model" name="model" placeholder="{{ $car->model  }}"
                               class="flex-1 rounded-md border-1 border-stone-300" aria-required="true">

                    </div>
                    <div class="flex w-full mt-6">
                        <label for="price" class="w-32 pt-2"> {{ __('Price') }} </label>
                        <input type="text" id="price" name="price" placeholder="{{ $car->price  }}"
                               class="flex-1 rounded-md border-1 border-stone-300" aria-required="true">

                    </div>


                    <div class="flex w-full my-6 gap-4">
                        <label for="" class="w-32"> </label>
                        <button type="submit"
                                class="rounded w-24 p-2
                                    bg-KhakiWeb-600 -ml-4 text-sky-100 border border-sky-50 shadow-md
                                    hover:bg-sky-100 hover:border-sky-500 hover:text-sky-500 hover:shadow-sm
                                    transition ease-in-out duration-500">
                            {{ __('Save') }}
                        </button>
                        <button type="reset" value="reset"
                                class="rounded w-24  p-2
                                    bg-BlueSapphire-300 text-amber-100 border border-amber-50 shadow-md
                                    hover:bg-amber-100 hover:border-amber-500 hover:text-amber-500 hover:shadow-sm
                                    transition ease-in-out duration-500">
                            {{ __('Reset') }}
                        </button>
                        <a href="{{ route('cars.index') }}"
                           class="rounded text-center w-24 p-2
                               bg-CafeAuLait-300 text-stone-100 border border-stone-50 shadow-md
                               hover:bg-stone-100 hover:border-stone-500 hover:text-stone-500 hover:shadow-sm
                               transition ease-in-out duration-500">
                            {{ __('Back') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
