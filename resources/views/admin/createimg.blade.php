<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<head>
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
                <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="return"><a href="{{ url('/posts') }}">Return</a></div>
                    <div><label>Image:</label>
                        {{--  <input type="file" name="image" required>  --}}

                    </div> <input type="file" id="file" name="image" style="display:none;" required>
                    <label for="file">
                        <img src="https://image.flaticon.com/icons/png/512/4206/4206322.png"
                            style="cursor: pointer; width: 10%; height:10%; display: inherit">
                    </label>
                    <div class="save"><input class="submit" type="submit" value="Save" onclick="success()"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- script -->
    @include('admin.script')

</body>

</html>
