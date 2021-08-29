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
                <div class="sheet">
                    <div class="header">
                        <p>Post</p>
                    </div>
                    {{--  <p>Post Image</p>  --}}
                    <table>
                        <div class="btn"><a href="{{ url('/createimg') }}">Create</a> </div>

                        @foreach ($data as $data)
                        <tr>
                            <td><img src='/image/{{ $data->image }}' width="150px"></td>
                            <td class="del"><a href="{{ url('/deleteimg',$data->id ) }}"
                                    onclick="javascript:return del();">Delete</a></td>
                            <td class="upd"><a href="{{ url('/updateimg',$data->id ) }}">Update</a></td>
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
