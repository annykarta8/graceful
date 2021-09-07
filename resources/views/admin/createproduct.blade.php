<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">

            @include('admin.theme')
            <!-- partial -->
            @include('admin.sidebar')
            <!-- partial -->
            <div class="form">
                <form action="{{ url('/uploadproduct') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="return"><a href="{{ url('/products') }}">Return</a></div>
                    <div class="header">
                        <h1>Products</h1>
                    </div>
                    <div class="create-product">
                        <p>Name: <input type="text" name="name" required></p>
                        <p>Category:
                            <select name="category" id="category">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </p>
                        <p class="product-image">Image: <input type="file" name="image" required></p>
                        <p>Content:</p>
                        <textarea name="content" id="content" cols="30" rows="10"></textarea>

                    </div>
                    <div class="save"><input class="submit" type="submit" value="Save" onclick="success()"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- script -->
    @include('admin.script')
</body>

</html>
