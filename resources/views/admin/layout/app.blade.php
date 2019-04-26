<!DOCTYPE html>
<html lang="Fr-fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-construction | Dashbord admin</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/style5.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="{{ asset('admin/js/solid.js') }}" ></script>
    <script defer src="{{ asset('admin/js/fontawesome.js') }}" ></script>

</head>

<body>

<div class="wrapper">
    @include('admin.layout.partials.sidebar')
    <!-- Page Content Holder -->
    <div id="content">
        @include('admin.layout.partials._nav')
        <div class="container">
            @yield('content')
        </div>
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="{{ asset('admin/js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
<!-- Popper.JS -->
<script src="{{ asset('admin/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/js/toastr.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/script.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
</body>

</html>