<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/ZARA_LOGO.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Rapid Rescue - About</title>
</head>
<body>
    @include('components.header')

    <main>
        <article>
            @yield('content')
            @include('components.hero')
            @include('components.features')
            @include('components.about')
            @include('components.listing')
            @include('components.footer')

        </article>
    </main>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
