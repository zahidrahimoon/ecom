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

<!--
    - #SERVICE
-->

<section class="service" aria-label="service">
    <div class="container">
        <ul class="service-list">
            <li>
                <div class="service-card">
                    <div class="card-icon">
                        <img src="{{ asset('images/message1.png') }}" width="71" height="71" loading="lazy" alt="icon">
                    </div>
                    <h3 class="headline-sm card-title">
                        <a href="#">Massage Therapy</a>
                    </h3>
                    <p class="card-text">
                        Get relief from stress and tension with our professional massage therapy sessions.
                    </p>
                    <button class="btn-circle" aria-label="read more about massage therapy">
                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </button>
                </div>
            </li>
            <li>
                <div class="service-card">
                    <div class="card-icon">
                        <img src="{{ asset('images/Physical Rehabilitation.png') }}" width="71" height="71" loading="lazy" alt="icon">
                    </div>
                    <h3 class="headline-sm card-title">
                        <a href="#">Physical Rehabilitation</a>
                    </h3>
                    <p class="card-text">
                        Regain mobility and strength with our personalized physical rehabilitation programs.
                    </p>
                    <button class="btn-circle" aria-label="read more about physical rehabilitation">
                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </button>
                </div>
            </li>
            <li>
                <div class="service-card">
                    <div class="card-icon">
                        <img src="{{ asset('images/Acupuncture.png') }}" width="71" height="71" loading="lazy" alt="icon">
                    </div>
                    <h3 class="headline-sm card-title">
                        <a href="#">Acupuncture</a>
                    </h3>
                    <p class="card-text">
                        Experience holistic healing with our traditional acupuncture treatments. We are Helping You.
                    </p>
                    <button class="btn-circle" aria-label="read more about acupuncture">
                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </button>
                </div>
            </li>
            <li>
                <div class="service-card">
                    <div class="card-icon">
                        <img src="{{ asset('images/Aromatherapy.png') }}" width="71" height="71" loading="lazy" alt="icon">
                    </div>
                    <h3 class="headline-sm card-title">
                        <a href="#">Aromatherapy</a>
                    </h3>
                    <p class="card-text">
                        Indulge your senses and relax your mind with our soothing aromatherapy sessions.
                    </p>
                    <button class="btn-circle" aria-label="read more about aromatherapy">
                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </button>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- Include JS -->
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
