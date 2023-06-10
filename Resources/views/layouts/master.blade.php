<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/admin.min.css') }}">
    <title>Homepage | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>

</head>

<body class="bg-light">
    @if (Route::currentRouteName() == 'login')
        <!-- Page content -->
        @yield('content')
    @else
        <div id="db-wrapper">
            <!-- navbar vertical -->
            @include('adminpanel::partials.navbar-vertical')
            <!-- Page content -->
            @yield('content')
        </div>
    @endif
    <script src="{{ mix('js/admin.min.js') }}"></script>
</body>

</html>
