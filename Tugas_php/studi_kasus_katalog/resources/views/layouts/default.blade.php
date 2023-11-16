<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Shayna Template" />
    <meta name="keywords" content="Shayna, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    {{-- Css --}}
    @include('includes.style')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')
    {{-- javascript --}}
    @include('includes.script')
</body>

</html>
