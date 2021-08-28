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
                    <div class="header">
                        <p>Products</p>
                    </div>
                    <div><label>Name:<input type="text" name="name" required></label></div>
                    <div><label>Image:<input type="file" name="image" required></label></div>
                    <div class="save"><input class="submit" type="submit" value="Save"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- script -->
    @include('admin.script')
</body>

</html>
