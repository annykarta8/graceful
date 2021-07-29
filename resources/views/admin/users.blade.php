<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="css/user.css" rel="stylesheet">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.theme')
            @include('admin.sidebar')
            <!-- partial -->
            <div class="list">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $data)
                    <tr>
                        <td>{{$data->name }}</td>
                        <td>{{$data->email }}</td>
                        @if($data->usertype == "0")
                        <td><a href="">Delete</a></td>
                        @else
                        <td>Not Allowed</td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>


    </div>
    <!-- script -->
    @include('admin.script')

</body>

</html>
