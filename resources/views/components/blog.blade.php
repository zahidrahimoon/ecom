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
    <section class="section blog" aria-labelledby="blog-label">
        <div class="container">
            <p class="section-subtitle title-lg text-center" id="blog-label">
                Therapist Insights
            </p>
            <h2 class="section-title headline-md text-center">Latest Articles</h2>
            <ul class="grid-list">
                <li>
                    <div class="blog-card has-before has-after">
                        <div class="meta-wrapper">
                            <div class="card-meta">
                                <ion-icon name="person-outline"></ion-icon>
                                <span class="span">By Therapist</span>
                            </div>
                            <div class="card-meta">
                                <ion-icon name="folder-outline"></ion-icon>
                                <span class="span">Health Tips</span>
                            </div>
                        </div>
                        <h3 class="headline-sm card-title">The Importance of Self-Care for Therapists</h3>
                        <time class="title-sm date" datetime="2024-09-02">09-02-2024</time>
                        <p class="card-text">Exploring strategies for maintaining physical and emotional well-being while providing quality care to clients.</p>
                        <a href="#" class="btn-text title-lg">Read More</a>
                    </div>
                </li>
                <li>
                    <div class="blog-card has-before has-after">
                        <div class="meta-wrapper">
                            <div class="card-meta">
                                <ion-icon name="person-outline"></ion-icon>
                                <span class="span">By Therapist</span>
                            </div>
                            <div class="card-meta">
                                <ion-icon name="folder-outline"></ion-icon>
                                <span class="span">Wellness Tips</span>
                            </div>
                        </div>
                        <h3 class="headline-sm card-title">Mindfulness Techniques for Therapists</h3>
                        <time class="title-sm date" datetime="2024-09-02">09-02-2024</time>
                        <p class="card-text">Exploring mindfulness practices to enhance focus, reduce stress, and improve client interactions.</p>
                        <a href="#" class="btn-text title-lg">Read More</a>
                    </div>
                </li>
                <li>
                    <div class="blog-card has-before has-after">
                        <div class="meta-wrapper">
                            <div class="card-meta">
                                <ion-icon name="person-outline"></ion-icon>
                                <span class="span">By Therapist</span>
                            </div>
                            <div class="card-meta">
                                <ion-icon name="folder-outline"></ion-icon>
                                <span class="span">Prof-Dev</span>
                            </div>
                        </div>
                        <h3 class="headline-sm card-title">Navigating Boundaries in Therapeutic Relationships</h3>
                        <time class="title-sm date" datetime="2024-02-09">09-02-2024</time>
                        <p class="card-text">Exploring ethical considerations and practical strategies for establishing and maintaining boundaries with clients.</p>
                        <a href="#" class="btn-text title-lg">Read More</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Include JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
