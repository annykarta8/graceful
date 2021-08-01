<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="css/admin.css" rel="stylesheet">

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
                    <div><label for="">Image:</label>
                        <input type="file" name="image" required>
                    </div>
                    <div><input class="submit" type="submit" value="Save"></div>
                </form>
                <div>
                    <table>
                        <tr>
                            <th>Uploaded:</th>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td><img src='/image/{{ $data->image }}' width="150px"></td>
                            <td><a href="{{ url('/deleteimg',$data->id ) }}">Delete</a></td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- script -->
    @include('admin.script')

</body>

</html>
