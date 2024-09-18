<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <!--
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('{{ asset('images/footer-bg.png') }}')">
    <div class="container">
      <div class="section footer-top">
        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="{{ asset('images/ZARA_LOGO_with_Text.png') }}" width="136" height="46" loading="lazy" alt="Therapist Home">
          </a>
          <ul class="contact-list has-after">
            <li class="contact-item">
              <div class="item-icon">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>
              <div>
                <p>
                  Main Email: <a href="mailto:contact@therapy.com" class="contact-link">contact@&shy;therapy.com</a>
                </p>
                <p>
                  Inquiries: <a href="mailto:Info@therapy.com" class="contact-link">Info@therapy.com</a>
                </p>
              </div>
            </li>
            <li class="contact-item">
              <div class="item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>
              <div>
                <p>
                  Office Telephone: <a href="tel:0029129102320" class="contact-link">0029129102320</a>
                </p>
                <p>
                  Mobile: <a href="tel:000232439493" class="contact-link">000 2324 39493</a>
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="footer-list">
          <p class="headline-sm footer-list-title">About Us</p>
          <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum tortor quis arcu varius, sit amet tempus urna vestibulum. Integer vitae magna pretium, consequat velit nec.
          </p>
          <address class="address">
            <ion-icon name="map-outline"></ion-icon>
            <span class="text">
              1234 Therapy Lane <br>
              City, State 12345
            </span>
          </address>
        </div>
        <ul class="footer-list">
          <li>
            <p class="headline-sm footer-list-title">Services</p>
          </li>
          <li>
            <a href="#" class="text footer-link">Counseling</a>
          </li>
          <li>
            <a href="#" class="text footer-link">Therapy Sessions</a>
          </li>
          <li>
            <a href="#" class="text footer-link">Workshops</a>
          </li>
          <li>
            <a href="#" class="text footer-link">Group Therapy</a>
          </li>
          <li>
            <a href="#" class="text footer-link">Teletherapy</a>
          </li>
          <li>
            <a href="#" class="text footer-link">Mindfulness Training</a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <p class="headline-sm footer-list-title">Useful Links</p>
          </li>
          <li>
            <a href="#" class="text footer-link">Privacy Policy</a>
          </li>
          <li>
            <a href="#" class="text footer-link">Terms of Service</a>
          </li>
          <li>
            <a href="#" class="text footer-link">Client Testimonials</a>
          </li>
          <li>
            <a href="#" class="text footer-link">FAQs</a>
          </li>
        </ul>
        <div class="footer-list">
          <p class="headline-sm footer-list-title">Subscribe</p>
          <form action="" class="footer-form">
            <input type="email" name="email" placeholder="Email" class="input-field title-lg">
            <button type="submit" class="btn has-before title-md">Subscribe</button>
          </form>
          <p class="text">
            Get the latest updates via email. Any time you may unsubscribe.
          </p>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="text copyright">
          &copy; Therapist Hub 2022 | All Rights Reserved by YourTherapyPractice
        </p>
        <ul class="social-list">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

  <!--
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top">
    <ion-icon name="chevron-up"></ion-icon>
  </a>

  <!-- Include JS -->
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
