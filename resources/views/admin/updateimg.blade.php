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
                <form action="{{ url('/update',$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="return"><a href="{{ url('/posts') }}">Return</a></div>
                    <div>
                        <div class="old">
                            <h1>Old Image:</h1>
                            <img src='/image/{{ $data->image }}' width="100" height="100">
                        </div>
                        <div class="update">
                            <h1>Update Image:</h1>
                            <input type="file" name="image" required>
                        </div>
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
