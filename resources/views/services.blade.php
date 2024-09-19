<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambulance Services Directory</title>

    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body>
@include('components.header')
@include('components.pagehero', ['title' => 'Our Services'])
@include('components.features')

    <section class="section listing" aria-labelledby="listing-label">
        <div class="container">
            <ul class="grid-list">
                <li>
                    <p class="section-subtitle title-lg" id="listing-label">Ambulance Services Directory</p>
                    <h2 class="headline-md">Explore Our Ambulance Services</h2>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <i class="fas fa-ambulance fa-3x"></i>
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Emergency Ambulance</h3>
                            <p class="card-text">Immediate response for urgent medical situations, 24/7 availability.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <i class="fas fa-user-md fa-3x"></i>
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Paramedic Services</h3>
                            <p class="card-text">Qualified paramedics providing medical care and transport to hospitals.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <i class="fas fa-hospital fa-3x"></i>
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Hospital Transfer</h3>
                            <p class="card-text">Safe and comfortable transport between medical facilities.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <i class="fas fa-stethoscope fa-3x"></i>
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Non-Emergency Transport</h3>
                            <p class="card-text">Non-urgent patient transport with medical supervision if needed.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <i class="fas fa-wheelchair fa-3x"></i>
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Wheelchair Accessible</h3>
                            <p class="card-text">Ambulance services with wheelchair accessibility and support.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <i class="fas fa-heartbeat fa-3x"></i>
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Critical Care Transport</h3>
                            <p class="card-text">Specialized transport for critically ill patients with advanced equipment.</p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>
    @include('components.reviews')

 @include('components.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
