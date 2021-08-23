<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/user.css') }}">

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

            <div class="form">
                <div class="sheet">
                    <div class="header">
                        <p>User</p>
                    </div>
                    <table>
                        <tr>
                            <th><img src="https://image.flaticon.com/icons/png/512/1077/1077063.png " width="16px"
                                    style="display:inline">Name</th>
                            <th><img src="https://image.flaticon.com/icons/png/512/646/646094.png" width="16px"
                                    style="display:inline">
                                Email</th>
                            <th><img src="https://image.flaticon.com/icons/png/512/74/74013.png" width="16px"
                                    style="display:inline"> Action
                            </th>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{$data->name }}</td>
                            <td>{{$data->email }}</td>
                            @if($data->usertype == "0")
                            <td><a href="{{ url('/delete',$data->id) }}" onclick="javascript:return del();">Delete</a>
                            </td>
                            @else
                            <td>Not Allowed</td>
                            @endif
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
