<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/ZARA_LOGO.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Rapid Rescue - Login</title>
</head>

<body>
    <h1>Login Page</h1>
    @include('auth.login')

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
