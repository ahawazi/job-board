@if (Route::has('login'))
    @auth
        <a href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
            Dashboard
        </a>
    @else
        <a href="{{ route('login') }}"
            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
            Log in
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                Register
            </a>
        @endif
    @endauth
@endif
