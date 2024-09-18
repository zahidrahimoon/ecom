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
    <!-- Include Ionicons (legacy support) -->
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<header class="header">
    <div class="container">

      <a href="{{ url('/') }}" class="logo" style="font-size: larger;">
        <img src="{{ asset('images/ZARA_LOGO_with_Text.png') }}" style="width: max(12vw,100px);" alt="Zara">
      </a>
      <nav class="navbar">

        <div class="navbar-top">

          <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('images/ZARA_LOGO_with_Text.png') }}" width="136" height="46">
          </a>

          <button class="nav-close-btn" aria-label="close menu">
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="{{ url('/') }}" class="navbar-link title-md">Home</a>
          </li>

          <li class="navbar-item">
            <a href="{{ url('/about') }}" class="navbar-link title-md">About Us</a>
          </li>

          <li class="navbar-item">
            <a href="{{ url('/service') }}" class="navbar-link title-md">Services</a>
          </li>
          <li class="navbar-item">
            <a href="{{ url('/profile') }}" class="navbar-link title-md">Profile</a>
          </li>

          <li class="navbar-item">
            <a href="{{ url('/doctors') }}" class="navbar-link title-md">Doctors</a>
          </li>

          <li class="navbar-item">
            <a href="{{ url('/contact') }}" class="navbar-link title-md">Contact Us</a>
          </li>
          <li class="navbar-item">
            <a href="{{ url('/appointment') }}" class="navbar-link title-md" style="background-color: hsl(182, 100%, 35%); border-radius: 6px;">Get Appointment</a>
          </li>
        </ul>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <div class="overlay"></div>
    </div>
</header>

<!-- Include JS -->
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
