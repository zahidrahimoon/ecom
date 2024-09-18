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
    - #ABOUT
-->

<section class="section about" aria-labelledby="about-label">
    <div class="container">
        <div class="about-content">
            <p class="section-subtitle title-lg has-after" id="about-label">About Our Therapists</p>
            <h2 class="headline-md">Highly Skilled Professionals</h2>
            <p class="section-text">
                Our team of therapists comprises highly skilled professionals dedicated to providing exceptional care and holistic healing to our clients. Each therapist brings a wealth of knowledge and expertise to our practice, ensuring that every individual receives personalized treatment tailored to their specific needs.
            </p>
            <ul class="tab-list">
                <li>
                    <button class="tab-btn active">Qualifications</button>
                </li>
                <li>
                    <button class="tab-btn">Experience</button>
                </li>
                <li>
                    <button class="tab-btn">Specialties</button>
                </li>
            </ul>
            <p class="tab-text">
                Our therapists hold advanced degrees and certifications in various modalities of therapy, including massage therapy, physical rehabilitation, acupuncture, and aromatherapy. They stay updated with the latest advancements in their field and continuously expand their skills to provide the highest quality care to our clients.
            </p>
            <div class="wrapper">
                <ul class="about-list">
                    <li class="about-item">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <span class="span">Certified and Licensed</span>
                    </li>
                    <li class="about-item">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <span class="span">Years of Clinical Experience</span>
                    </li>
                    <li class="about-item">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <span class="span">Expertise in Specialized Techniques</span>
                    </li>
                    <li class="about-item">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <span class="span">Compassionate and Empathetic Care</span>
                    </li>
                </ul>
            </div>
        </div>
        <figure class="about-banner">
            <img src="{{ asset('images/about-banner.png') }}" width="554" height="678" loading="lazy" alt="about therapists banner" class="w-100">
        </figure>
    </div>
</section>

<!-- Include JS -->
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
