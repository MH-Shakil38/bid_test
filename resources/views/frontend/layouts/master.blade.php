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
<script>
    $(document).ready(function() {
        alert();
        $('.fixed_rate').on('keyup', function() {
            alert()
            var price = parseFloat($('#price').val()) || 0;
            var commission = parseFloat($('#commission').val()) || 0;

            var total = price + (price * commission / 100);

            $('#calculate').val(total.toFixed(2));
        });
    });
</script>
@include('frontend.layouts.include.footer')
@include('frontend.layouts.include.footer-script')
@include('alert.toaster-notification')

@yield('js')
@yield('script')

</body>
</html>
