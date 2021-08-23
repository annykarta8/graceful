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
                    <div class="old">
                        <label>Old Image:</label>
                        <label><img src='/image/{{ $data->image }}'
                                style="width: 10%; height:10%; display: inherit"></label>

                    </div>
                    <div class="new">
                        <label>Update Image:</label>
                        <input type="file" name="image" required>
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
