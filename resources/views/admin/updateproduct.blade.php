<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<head>
    <base href="/public">
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
                <form action="{{ url('/updateview',$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="return"><a href="{{ url('/products') }}">Return</a></div>
                    <div class="product-name">
                        <h1>Product Name:</h1>
                        <input type="text" name="name" value="{{ $data->name }}" required>
                    </div>
                    <div class="old">
                        <h1>Old Image:</h1>
                        <label><img src='/product-image/{{ $data->image }}'
                                style="width: 10%; height:10%; display: inherit"></label>

                    </div>
                    <div class="new">
                        <h1>Update Image:</h1>
                        <input type="file" name="image">
                    </div>
                    <div class="update">
                        <h1>Category:</h1>
                        <select name="category" id="category">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="content">
                        <h1>Content:</h1>
                        <textarea name="content" id="content" cols="30" rows="10">{{ $data->content }}</textarea>
                    </div>
                    <div class="save"><input class="submit" type="submit" value="Save"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- script -->
    @include('admin.script')

</body>

</html>
