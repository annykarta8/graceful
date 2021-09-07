<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>About Graceful</title>
</head>

<body>
    @include('navbar')
    <div class="container">
        <div class="row">
            <div class="about">
                <div class="col-4"><img src="{{ url('/slideimage/01.jpg') }}" alt=""></div>
                <div class="col-4"> <img src="{{ url('/slideimage/02.jpg') }}" alt=""></div>
                <div class="col-4"> <img src="{{ url('/slideimage/03.jpg') }}" alt=""></div>
                <div class="caption">
                    <p>Graceful</p>
                </div>
            </div>
        </div>
        <div class="introduce">
            <h1><img src="https://cdn4.iconfinder.com/data/icons/childhood-objects-2/128/_leaf_plant_hand_drawn_abstract-117-2-256.png"
                    width="50" height="50" />ABOUT GRACEFUL</h1>
            <p class="animate animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet consectetur adipisicing
                elit.
                Dolores aut earum sint ipsa nihil suscipit
                aspernatur eaque qui dignissimos est, dolor aliquam delectus laborum nostrum excepturi asperiores iste
                molestias ipsum quaerat consectetur? Deleniti, expedita dolorum! Dolores, nostrum voluptas non sequi
                molestiae excepturi explicabo autem omnis beatae eveniet dolorum maiores officia totam ducimus
                perspiciatis reiciendis minima libero laboriosam labore blanditiis. Dolor quo sit eius cupiditate veniam
                soluta eaque rerum ex dolorum similique nisi nihil eum officiis impedit quisquam, aperiam velit
                consequuntur, quaerat vitae ut sint, incidunt ducimus. Neque, adipisci nam porro mollitia sed provident
                eaque eius omnis! Accusamus doloremque minus eaque.</p>
        </div>
    </div>
    @include('footer')
    <!-- script -->
    @include('admin.script')
</body>

</html>
