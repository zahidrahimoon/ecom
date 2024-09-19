<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rapid Rescue - Contact</title>
  <meta name="title" content="Doclab - Home">
  <meta name="description" content="This is a medical HTML template made by Muhammad Zahid">

  <!-- Font Awesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('images/ZARA_LOGO.png') }}" type="image/svg+xml">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- Custom CSS (from public/css folder) -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body id="top">
@include('components.header')
@include('components.pagehero', ['title' => 'Contact Us'])
  <main>
    <article>
      <section id="contact-details" class="section-p1" data-wow-delay="0.5s" data-wow-duration="1s">
        <div class="details wow animate__animated animate__fadeInLeft">
            <span>Contact Information</span>
            <h2>Welcome to Zara Therapy</h2>
            <div>
                <i class="fal fa-map"></i>
                <p>123 Therapy Lane, Cityville, ABC</p>
            </div>

            <div>
                <i class="far fa-envelope"></i>
                <p>contact@therapyhub.com</p>
            </div>

            <div>
                <i class="fas fa-phone"></i>
                <p>+1 234 567 890</p>
            </div>

            <div>
                <i class="far fa-clock"></i>
                <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
            </div>
        </div>

        <div class="map wow animate__animated animate__fadeInRight">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14471.99057347296!2d67.0682739871582!3d24.9321502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f4e2375278b%3A0x8f54a569b216cea0!2sAlKaram%20Studio%20-%20LuckyOne!5e0!3m2!1sen!2s!4v1703818297485!5m2!1sen!2s"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>

      <section id="contact-form" class="section-p1" data-wow-delay="0.5s" data-wow-duration="1s">
        <div id="form-details" class="contact-form wow animate__animated animate__fadeInUp">
            <span>Leave a Message</span>
            <h3>We Value Your Feedback</h3>
            <form id="contact-form">
                <input type="text" id="name" placeholder="Your Name">
                <input type="email" id="email" placeholder="Your Email">
                <textarea id="message" placeholder="Your Message"></textarea>
                <button id="submit-button" type="submit">Submit</button>
            </form>
        </div>

        <div class="people-container wow animate__animated animate__fadeInUp">
            <h1>Meet Our Experienced Therapists</h1>
            <div class="people">
                <img src="{{ asset('images/doctor3.avif') }}" alt="Therapist 1">
                <p><span>Dr. Jessica Smith</span> - Clinical Psychologist <br> Phone: +1 234 567 890 <br> Email: jessica.smith@therapyhub.com</p>
            </div>

            <div class="people">
                <img src="{{ asset('images/doctor2.avif') }}" alt="Therapist 2">
                <p><span>Dr. Michael Johnson</span> - Marriage and Family Therapist <br> Phone: +1 243 509 867 <br> Email: michael.johnson@therapyhub.com</p>
            </div>

            <div class="people">
                <img src="{{ asset('images/doctor1.avif') }}" alt="Therapist 3">
                <p><span>Dr. Emily Brown</span> - Child and Adolescent Therapist <br> Phone: +1 324 765 909 <br> Email: emily.brown@therapyhub.com</p>
            </div>
        </div>
      </section>
      @include('components.footer')
    </article>
  </main>

  <!-- Custom JS (from public/js folder) -->
  <script src="{{ asset('js/script.js') }}"></script>

  <!-- Wow.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>

</html>
