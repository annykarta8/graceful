<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                <div class="sheet product">
                    <div class="header">
                        <p>Products</p>
                    </div>
                    <table>
                        <div class="btn"><a href="{{ url('/createproduct') }}">Create</a> </div>
                        <tr>
                            <th>Number</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($datas as $data )
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td><img height="100" width="100" src="/product-image/{{ $data->image }}" alt=""></td>
                            <td class="del"><a href="{{ url('/deleteproduct',$data->id ) }}"
                                    onclick="javascript:return del();">Delete</a>
                                <span class="upd"><a href="{{ url('/updateproduct',$data->id ) }}">Update</a></span>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $datas->links() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- script -->
    @include('admin.script')
</body>

</html>
