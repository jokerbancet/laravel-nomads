<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- styling css --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    {{-- navbar --}}
    @include('includes.navbar2')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.footer')

    {{-- script js/jquery --}}
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>
