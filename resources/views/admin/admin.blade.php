<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <!-- partial -->
            @include('admin.sidebar')
            <!-- partial -->
        </div>
    </div>
    <!-- script -->
    @include('admin.script')

</body>

</html>
