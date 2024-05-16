<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <title>Construction</title>

    @include('frontend.layouts.include.header-script')

</head>
<body>
@include('frontend.layouts.include.header')

@yield('content')

@include('frontend.layouts.include.footer')
@include('frontend.layouts.include.footer-script')
@yield('js')
@yield('script')
</body>
</html>
