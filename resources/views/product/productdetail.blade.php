<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    @include('navbar')
    <div class="container productdetail">
        <div class="row">
            <div class="item-photo col-xs-12 col-md-6" id="zoom-pic">
                <img src="{{ asset('/product-image/'.$commodity->image) }}">
            </div>
            <div class=" product-content col-xs-12 col-md-6">
                <h4><span id="product_name">{{$commodity->name }}</span></h4>
                <div class="product_color ">{{$commodity->content }}</div>
                <h4 class="section-heading ">Product Description :</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda magni impedit corrupti
                    quia nulla ea odit numquam nisi nesciunt? Mollitia.</p>
                <div class="dropdown mt-5 ">
                    <h2 data-toggle="collapse" data-target="#menu" class="h5 mt-3 Tips-title">
                        Accessories Maintenance Tips
                        <i class="fa fa-chevron-down"></i>
                    </h2>
                    <ul class="collapse" id="menu" style="font-size:initial; list-style:none">

                        <li class="section-list" style="margin-top:10px">1、 Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Quibusdam, cum。</li>
                        <li class="section-list" style="margin-top:10px">2、Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Quibusdam, cum。</li>
                        <li class="section-list" style="margin-top:10px">3、Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Quibusdam, cum。</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    @include('footer')
    <!-- script -->
    @include('admin.script')
</body>

</html>
