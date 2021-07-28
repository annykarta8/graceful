<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>首頁</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="title">
        <div class="left">
            <img src="https://cdn4.iconfinder.com/data/icons/childhood-objects-2/128/_leaf_plant_hand_drawn_abstract-117-2-256.png"
                width="70" height="70" />
        </div>
        <div class="right">
            <div class="item">Index</div>
            <div class="item">Shop</div>
            <div class="item">About</div>
            <div class="item">Connect</div>
            <div class="item">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>

                    @endif
                    @endauth
                </div>
                @endif
            </div>
            <div class="bar"><img src="image/bar.png" width="50" height="50" /></div>
        </div>
    </div>
    <div class="welcome">
        <div class="text">Welcome</div>
    </div>
    <div class="section">Top</div>
    <div class="box">
        <div class="list">
            <div class="content">
                <img src="image/pic1.jpg" />
            </div>
            <div class="content">
                <img src="image/pic2.jpg" />
            </div>
        </div>
        <div class="list">
            <div class="content">
                <img src="image/pic3.jpg" />
            </div>
            <div class="content">
                <img src="image/pic4.jpg" />
            </div>
        </div>
    </div>
    <div class="foot">
        <div class="calltoaction">call to Action</div>
    </div>
</body>

</html>
