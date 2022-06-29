<div class="bg-BlueSapphire-500 w-full fixed">
    <a href=" {{ route('home') }}">
        <h2 class="font-semibold text-xl text-white leading-tight m-auto px-6 py-4">
            {{ __("Cars N' Collectors") }}
        </h2>
    </a>

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
