<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary meta tags -->
    <title>Rapid Rescue - Doctors</title>
    <meta name="description" content="This is a medical HTML template made by Muhammad Zahid">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/ZARA_LOGO.png') }}" type="image/svg+xml">

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Font link -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>


    <main>
        <article>
            <section class="doctors" id="doctors">
                <h1 class="heading"><span>Doctors</span></h1>
                <div class="box-container">
                    @if(!$doctors->isEmpty())
                        @foreach($doctors as $doctor)
                            <div class="box">
                                <img src="{{ asset('images/' . $doctor->image) }}" alt="{{ $doctor->name }}">
                                <h3>{{ $doctor->name }}</h3>
                                <span>{{ $doctor->specialty }}</span>
                                <div class="share">
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No doctors available.</p>
                    @endif
                </div>
            </section>
            @include('components.listing')
        </article>
    </main>

    <!-- Custom JS link -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
