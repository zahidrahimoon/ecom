<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Therapists Directory</title>

    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!--
      - #LISTING
    -->

    <section class="section listing" aria-labelledby="listing-label">
        <div class="container">
            <ul class="grid-list">
                <li>
                    <p class="section-subtitle title-lg" id="listing-label">Therapists Directory</p>
                    <h2 class="headline-md">Explore Our Therapists</h2>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <img src="{{ asset('images/message1.png') }}" width="71" height="71" loading="lazy" alt="Massage Therapist icon">
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Massage Therapist</h3>
                            <p class="card-text">Specializes in various massage techniques for relaxation and pain relief.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <img src="{{ asset('images/Physical Therapist.png') }}" width="71" height="71" loading="lazy" alt="Physical Therapist icon">
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Physical Therapist</h3>
                            <p class="card-text">Expert in rehabilitation exercises and restoring mobility after injuries.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <img src="{{ asset('images/Acupuncture.png') }}" width="71" height="71" loading="lazy" alt="Acupuncturist icon">
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Acupuncturist</h3>
                            <p class="card-text">Specializes in traditional Chinese medicine techniques for pain management and wellness.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <img src="{{ asset('images/Aromatherapy.png') }}" width="71" height="71" loading="lazy" alt="Aromatherapist icon">
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Aromatherapist</h3>
                            <p class="card-text">Utilizes essential oils and aromatherapy techniques to promote relaxation and improve mood.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <img src="{{ asset('images/Holistic Therapist.png') }}" width="71" height="71" loading="lazy" alt="Holistic Therapist icon">
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Holistic Therapist</h3>
                            <p class="card-text">Employs holistic approach to wellness, integrating mind & body for comprehensive healing.</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="listing-card">
                        <div class="card-icon">
                            <img src="{{ asset('images/Chiropractor.png') }}" width="71" height="71" loading="lazy" alt="Chiropractor icon">
                        </div>
                        <div>
                            <h3 class="headline-sm card-title">Chiropractor</h3>
                            <p class="card-text">Specializes in spinal adjustments and manipulations to alleviate pain and improve mobility.</p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>

    <!-- Include JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
