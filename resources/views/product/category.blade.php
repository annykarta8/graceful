<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ url('/slideimage/icon.ico') }}" />
    <title>Graceful Category</title>
</head>

<body>
    @include('navbar')
    <div class="container">
        <p class="product-title1">PRODUCT</p>
        <div class="row product">
            @foreach ($products as $product)
            <div class="col-md-4 col-sm-4 col-xs-6 col-lg-4">
                <div class="product-items">
                    <div class="image"><a href="{{ url('/product/productdetail').'/'.$product->id }}"><img
                                src="/product-image/{{$product->image }}" alt="" class="pic"></a></div>
                    <div class="name">
                        <h3>《{{$product->name }}》</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('footer')
    <!-- script -->
    @include('admin.script')
</body>

</html>
