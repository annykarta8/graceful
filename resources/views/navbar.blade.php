<div class="title">
    <div class="left">
        <a href="{{ url('/') }}"><img
                src="https://cdn4.iconfinder.com/data/icons/childhood-objects-2/128/_leaf_plant_hand_drawn_abstract-117-2-256.png"
                width="70" height="70" /></a>
    </div>
    <div class="right">
        <ul>
            <li class="item"><a href="{{ url('/about') }}">ABOUT</a></li>
            <li class="item"><a href="{{ url('/accessories') }}">ACCESSORIES</a></li>
            <li class="item"><a href="#">SERMONS</a></li>
            <li class="item"><a href="#">GALLERY</a></li>
            <li class="item"><a href="#">BLOG</a></li>
            <li class="item">
                @if (Route::has('login'))
                <div>
                    @auth
                    <x-app-layout>
                    </x-app-layout>
                    @else
                    <a href="{{ route('login') }}" class="text-base text-gray-500">Log in</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-base text-gray-500">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </li>
        </ul>
        <div class="bar"><img src="https://image.flaticon.com/icons/png/512/1828/1828859.png" width="40" height="40" />
        </div>
    </div>
</div>
