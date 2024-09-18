<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Include Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>

<!--
    - #HERO
-->

<section class="section hero" style="background-image: url('{{ asset('images/hero-bg.png') }}');" aria-label="home">
    <div class="container">
        <div class="hero-content">
            <h1 class="headline-lg hero-title">{{ $title }}</h1>
        </div>
    </div>
</section>

<!-- Include JS -->
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
