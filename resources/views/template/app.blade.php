<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.partial.head')
    <title>Dashboard - Mazer Admin Dashboard</title>
</head>

<body>

    <div id="app">
        @include('template.partial.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>{{ $title ?? '' }}</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>

            @include('template.partial.footer')
        </div>
    </div>
    @include('template.partial.script')


</body>

</html>
