<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ url('/slideimage/icon.ico') }}" />
    <title>Welcome Graceful</title>
</head>

<body onload="start()">
    @include('navbar')
    <div>@include('show')</div>
    <div>@include('banner')</div>
    <div>@include('gallery')</div>
    <div class="section">Top</div>
    @include('post')
    @include('footer')
    <!-- script -->
    @include('admin.script')
</body>

</html>
