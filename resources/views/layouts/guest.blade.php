<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link nonce="{{ csp_nonce() }}" rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png')}}">
    <link nonce="{{ csp_nonce() }}" rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png')}}">
    <link nonce="{{ csp_nonce() }}" rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png')}}">

    <title>Staff Management System | Authentication</title>

    <link nonce="{{ csp_nonce() }}" rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}">
    <link nonce="{{ csp_nonce() }}" rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/sharp-solid.min.css')}}">
    <link nonce="{{ csp_nonce() }}" rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.css')}}">
    <link nonce="{{ csp_nonce() }}" rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.css')}}">
    <link nonce="{{ csp_nonce() }}" rel="stylesheet" href="{{ asset('assets/dist/css/style.css')}}">
</head>

<body class="hold-transition lockscreen login-page backgroun-image-wrapper">
    <div class="login-box">

        {{session('status')}}

        <div class="login-logo text-center text-white">
            <img src="{{ asset('assets/images/logo.webp')}}" width="64px" alt="" srcset="">
            <b>NAS</b> System
        </div>
        {{ $slot }}
        <br>
        <div class="lockscreen-footer text-center text-white">
            © 2023 Akari Cloud Solutions. All rights reserved.
        </div>
    </div>
    <script nonce="{{ csp_nonce() }}" src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script nonce="{{ csp_nonce() }}" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script nonce="{{ csp_nonce() }}" src="{{ asset('assets/dist/js/adminlte.js')}}"></script>

</body>

</html>
