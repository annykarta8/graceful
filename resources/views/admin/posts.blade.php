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
                <div>
                    <table>
                        <button><a href="{{ url('/createimg') }}">Create</a></td></button>
                        <tr>
                            <th>Uploaded:</th>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td><img src='/image/{{ $data->image }}' width="150px"></td>
                            <td><a href="{{ url('/deleteimg',$data->id ) }}">Delete</a></td>
                            <td><a href="{{ url('/updateimg',$data->id ) }}">Update</a></td>
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
