<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
                <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">OldImage:</label>
                        <img src='/image/{{ $data->image }}' width="150px"></td>
                    </div>
                    <div><label for="">NewImage:</label>
                        <input type="file" name="image" required>
                    </div>
                    <div><input class="submit" type="submit" value="Save"></div>
                </form>
            </div>
        </div>
    </div>
    <!-- script -->
    @include('admin.script')

</body>

</html>
