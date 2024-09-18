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
            <p class="hero-subtitle has-before">Welcome To Zara Therapy</p>
            <h1 class="headline-lg hero-title">
                Find Nearest <br> Doctor.
            </h1>
            <div class="hero-card">
                <p class="title-lg card-text">
                    Search doctors, clinics, hospitals, etc.
                </p>
                <div class="wrapper">
                    <div class="input-wrapper title-lg">
                        <input type="text" name="location" placeholder="Locations" class="input-field">
                        <ion-icon name="location"></ion-icon>
                    </div>
                    <button class="btn has-before">
                        <ion-icon name="search"></ion-icon>
                        <span class="span title-md">Find Now</span>
                    </button>
                </div>
            </div>
        </div>
        <figure class="hero-banner">
            <img src="{{ asset('images/hero-banner.png') }}" width="590" height="517" loading="eager" alt="hero banner" class="w-100">
        </figure>
    </div>
</section>

<!-- Include JS -->
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
