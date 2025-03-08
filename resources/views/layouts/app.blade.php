<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Boson-POS')</title>
    @include('components.header')
</head>

<body class="bg-light">
    <div id="db-wrapper">
        @include('layouts.sidebar')
        <!-- Page content -->
        <div id="page-content">
            <div class="header">
                @include('layouts.navbar')
            </div>

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Libs JS -->
    @include('components.script')
</body>

</html>
