<!DOCTYPE html>
<html lang="en">

<head>

    <!--
    - #Head
  -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="{{ 'Official Portfolio Website of Prasid Mandal - Full-Stack Web Developer - (Also Known as @' . config('app.name') . ').' }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--
    - #SEO Meta Data
  -->

    @php

    $currentPage = $page ?? 'about';

    $titles = [
    'about' => 'Portfolio',
    'resume' => 'Resume',
    'projects' => 'Projects',
    'blog' => 'Blog',
    'contact' => 'Contact',
    ];

    $ogDescriptions = [
    'about' => 'Official Portfolio Website of Prasid Mandal - Full-Stack Web Developer - (Also Known as @' . config('app.name') . ').',
    'resume' => 'Explore the Resume: cv@' . config('app.name') . ' - A Quick Look at My Education, Experience, and Skills.',
    'projects' => 'Browse the Projects - A Quick Overview of My Work, Tools, and Real-World Applications.',
    'blog' => 'Read the Blogs Shared by ' . config('app.name') . ' on Social Media, Development and Tech.',
    'contact' => 'Get in Touch with ' . config('app.name') . ' - for Collaborations, Projects, or Queries.',
    ];

    $homeTitle = $titles[$currentPage] . ' | @' . config('app.name');

    @endphp

    <!--
    - #Title
  -->

    <title>{{ $homeTitle }}</title>

    <!--
    - #Open Graph Meta Tags
  -->

    <meta property="og:title" content="{{ $homeTitle }}">
    <meta property="og:description" content="{{ $ogDescriptions[$currentPage] }}">
    <meta property="og:image" content="{{ asset('assets/images/user/xodivorce.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!--
    - #Favicon
  -->

    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}" />

    <!--
    - #StyleSheet
  -->

    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--
    - #Font
  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    <meta name="p:domain_verify" content="{{ config('app.pinterest_verify') }}">

    <!--
    - #Ionicon
  -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>

<body>

    <!--
    - #Preloader
  -->

    @include('components.ui.preloader')

    <!--
    - #Main
  -->

    <main>

        <!--
      - #Sidebar
    -->

        <aside class="sidebar" data-sidebar>

            <div class="sidebar-info">

                <figure class="avatar-box">
                    <img src="{{ asset('assets/images/user/xodivorce.png') }}" alt="Xodivorce" width="88">
                </figure>

                <div class="info-content">

                    <h1 class="name">{{ config('app.name') }}</h1>

                    <button onclick="window.location.href='{{ route('cv') }}'" class="view-cv-btn">
                        View CV
                    </button>

                </div>

                <button class="info_more-btn" data-sidebar-btn>

                    <span>Show Contacts</span>
                    <ion-icon name="chevron-down"></ion-icon>

                </button>

            </div>

            <div class="sidebar-info_more">

                <div class="separator"></div>

                <ul class="contacts-list">

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <div class="contact-info">

                            <p class="contact-title">Email</p>

                            <button class="contact-link"
                                onclick="window.location.href='mailto:{{ config('app.mail_username') }}'">
                                {{ config('app.mail_username') }}
                            </button>

                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Phone</p>

                            <button class="contact-link" onclick="window.location.href='tel:+918514860677'">
                                +91 (8514) 860 677
                            </button>

                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">

                            <ion-icon name="calendar-outline"></ion-icon>

                        </div>

                        <div class="contact-info">

                            <p class="contact-title">Birthday</p>

                            <time datetime="2006-01-20">
                                January 20, 2006
                            </time>

                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">

                            <ion-icon name="location-outline"></ion-icon>

                        </div>

                        <div class="contact-info">

                            <p class="contact-title">Based On</p>
                            <address>Kolkata, India</address>

                        </div>
                    </li>

                </ul>

                <div class="separator"></div>

                <!--
    - #Social Media
  -->

                <ul class="social-list">
                    <li class="social-item">
                        <a href="https://www.youtube.com/@xodivorce" target="_blank" rel="noopener noreferrer"
                            class="social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="https://www.instagram.com/xodivorce" target="_blank" rel="noopener noreferrer"
                            class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="https://github.com/xodivorce" target="_blank" rel="noopener noreferrer"
                            class="social-link">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="https://www.pinterest.com/xodivorc3" target="_blank" rel="noopener noreferrer"
                            class="social-link">
                            <ion-icon name="logo-pinterest"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="https://www.linkedin.com/in/xodivorce" target="_blank" rel="noopener noreferrer"
                            class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>
                </ul>

            </div>

        </aside>

        <!--
      - #Contents
    -->

        <div class="main-content">

            <section class="about-text hoverAnimatedContainer">

                <!--
        - #Navbar
      -->

                <nav class="navbar">

                    <ul class="navbar-list">

                        <li class="navbar-item">
                            <button class="navbar-link {{ $page === 'about' ? 'active' : '' }}"
                                onclick="window.location='{{ route('home') }}'">
                                Portfolio
                            </button>
                        </li>

                        <li class="navbar-item">
                            <button class="navbar-link {{ $page === 'resume' ? 'active' : '' }}"
                                onclick="window.location='{{ route('resume') }}'">
                                Resume
                            </button>
                        </li>

                        <li class="navbar-item">
                            <button class="navbar-link {{ $page === 'projects' ? 'active' : '' }}"
                                onclick="window.location='{{ route('projects') }}'">
                                Projects
                            </button>
                        </li>

                        <li class="navbar-item">
                            <button class="navbar-link {{ $page === 'blog' ? 'active' : '' }}"
                                onclick="window.location='{{ route('blog') }}'">
                                Blog
                            </button>
                        </li>

                        <li class="navbar-item">
                            <button class="navbar-link {{ $page === 'contact' ? 'active' : '' }}"
                                onclick="window.location='{{ route('contact') }}'">
                                Contact
                            </button>
                        </li>

                    </ul>

                </nav>


                <!--
        - #About
      -->

                <article class="portfolio {{ $page === 'about' ? 'active' : '' }}">

                    <header>
                        <h2 class="h2 article-title">Portfolio</h2>
                    </header>

                    @php
                    use Carbon\Carbon;

                    $birthDate = Carbon::parse('2006-01-20');
                    $age = $birthDate->age;

                    $experienceStartYear = 2023;
                    $experienceYears = now()->year - $experienceStartYear;
                    @endphp

                    <p>
                        Namaste! I'm Prasid,
                        better known as {{ '@' . (config('app.name')) }} - a {{ $age }}-year-old Full Stack Web Developer, Technology Enthusiast,
                        <button type="button" class="link-button" onclick="window.open('https://geministudentambassador.com/', '_blank', 'noopener,noreferrer')">Google Student Ambassador '26</button> at
                        <button type="button" class="link-button" onclick="window.open('https://camelliait.ac.in/', '_blank', 'noopener,noreferrer')">Camellia Institute of Technology</button>,
                        and an Open Source Contributor at <button type="button" class="link-button" onclick="window.open('https://gssoc.girlscript.org/', '_blank', 'noopener,noreferrer')">GSSoC '26</button>.
                    </p>

                    <p>
                        For over 3+ years, I've been building modern web applications, exploring AI-powered solutions, and working with modern technologies and frameworks including Laravel, Tailwind CSS, MySQL and Docker
                        - adding handcrafted touches to every pixel I've placed. Building things is what I do, exploring them is up to you. Run:
                        <button type="button" class="link-button"
                            onclick="navigator.clipboard.writeText(@js('npx ' . config('app.name'))).then(() => { this.textContent = 'Copied to Clipboard!'; setTimeout(() => this.textContent = '$ npx {{ config('app.name') }}', 1200); });">
                            $ npx {{ config('app.name') }}
                        </button>
                    </p>

                    <!--
          - #Service
        -->

                    <section class="service">

                        <h3 class="h3 service-title">What I'm Doing</h3>

                        <ul class="service-list">

                            <li class="service-item">

                                <div class="service-icon-box">

                                    <img src="{{ asset('assets/images/icons/icon-dev.svg') }}" alt="design icon"
                                        width="40">

                                </div>

                                <div class="service-content-box">
                                    <h4 class="h4 service-item-title">Web development</h4>

                                    <p class="service-item-text">
                                        Transforming my concepts into industry grade, high-quality code.
                                    </p>
                                </div>

                            </li>

                            <li class="service-item">

                                <div class="service-icon-box">
                                    <img src="{{ asset('assets/images/icons/icon-music-and-podcasts.svg') }}"
                                        alt="Music and Podcasts icon" width="40">
                                </div>

                                <div class="service-content-box">
                                    <h4 class="h4 service-item-title">Music And Podcasts</h4>

                                    <p class="service-item-text">
                                        Enjoying music and podcasts that keep me focused and relaxed while I work.
                                    </p>
                                </div>

                            </li>

                            <li class="service-item">

                                <div class="service-icon-box">
                                    <img src="{{ asset('assets/images/icons/icon-app.svg') }}" alt="mobile app icon"
                                        width="40">
                                </div>

                                <div class="service-content-box">
                                    <h4 class="h4 service-item-title">Android And iOS apps</h4>
                                    <p class="service-item-text">
                                        Building strong concepts while learning Android and iOS app development.
                                    </p>
                                </div>

                            </li>

                            <li class="service-item">

                                <div class="service-icon-box">
                                    <img src="{{ asset('assets/images/icons/icon-photo.svg') }}" alt="camera icon"
                                        width="40">
                                </div>

                                <div class="service-content-box">
                                    <h4 class="h4 service-item-title">Photography</h4>
                                    <p class="service-item-text">
                                        Capturing photos and videos, exploring creative visuals through my lens.
                                    </p>
                                </div>

                            </li>

                        </ul>

                    </section>

                    <!-- 
        - #Words by them 
        -->
                    <section class="words_by_them">

                        <h3 class="h3 words_by_them-title">Words by Them</h3>

                        <ul class="words_by_them-list has-scrollbar">

                            @foreach($testimonials as $t)
                            <li class="words_by_them-item" data-words_by_them-item data-name="{{ $t->name }}"
                                data-message="{{ e($t->message) }}" data-date="{{ $t->date }}">

                                <div class="content-card" data-model-trigger>
                                    <figure class="words_by_them-avatar-box">
                                        <img src="{{ asset($t->avatar) }}" alt="{{ $t->name }}" width="60"
                                            data-words_by_them-avatar>
                                    </figure>

                                    <h4 class="h4 words_by_them-item-title" data-words_by_them-title>
                                        {{ $t->name }}
                                    </h4>

                                    <time datetime="{{ $t->date }}">
                                        {{ \Carbon\Carbon::parse($t->date)->format('d F, Y') }}
                                    </time>

                                    <div class="words_by_them-text" data-words_by_them-text>
                                        <p>{{ $t->message }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>

                    </section>

                    <!-- 
        - #Words by Them Model 
    -->

                    <div class="model-container" data-model-container>

                        <div class="overlay" data-overlay></div>

                        <section class="words_by_them-model">

                            <button class="model-close-btn" data-model-close-btn>
                                <ion-icon name="close-outline"></ion-icon>
                            </button>

                            <div class="model-img-wrapper">

                                <figure class="model-avatar-box">
                                    <img src="" alt="" width="80" data-model-img>
                                </figure>

                                <img src="{{ asset('assets/images/icons/icon-quote.svg') }}" alt="quote icon">

                            </div>

                            <div class="model-content">

                                <h4 class="h3 model-title" data-model-title></h4>
                                <time datetime="" data-model-date></time>
                                <div data-model-text></div>

                            </div>

                        </section>

                    </div>

                    <!--
          - #Trusted By
        -->
                    <section class="clients">

                        <h3 class="h3 clients-title">Trusted By</h3>

                        <ul class="clients-list has-scrollbar">

                            <li class="clients-item">
                                <a>
                                    <img src="{{ asset('assets/images/brands/autosquare.png') }}" alt="Autosquare logo">
                                </a>
                            </li>

                            <li class="clients-item">
                                <a>
                                    <img src="{{ asset('assets/images/brands/sixseven.png') }}" alt="SixSeven logo">
                                </a>
                            </li>

                            <li class="clients-item">
                                <a>
                                    <img src="{{ asset('assets/images/brands/isdowndetectordown.png') }}"
                                        alt="isdowndetectordown logo">
                                </a>
                            </li>

                        </ul>

                    </section>

                </article>

                <!--
        - #Resume
        -->
                <article class="resume {{ $page === 'resume' ? 'active' : '' }}">

                    <header>
                        <h2 class="h2 article-title">Resume</h2>
                    </header>

                    <section class="timeline">

                        <div class="title-wrapper">
                            <div class="icon-box">
                                <ion-icon name="book-outline"></ion-icon>
                            </div>
                            <h3 class="h3">Education</h3>
                        </div>

                        <ol class="timeline-list">

                            @foreach($educations as $edu)
                            <li class="timeline-item">
                                <h4 class="h4 timeline-item-title">{{ $edu->title }}</h4>
                                <span>{{ $edu->start_year }} — {{ $edu->end_year }}</span>
                                <p class="timeline-text">
                                    {!! $edu->description !!}
                                </p>
                            </li>
                            @endforeach

                        </ol>

                    </section>

                    <section class="timeline">

                        <div class="title-wrapper">
                            <div class="icon-box">
                                <ion-icon name="book-outline"></ion-icon>
                            </div>
                            <h3 class="h3">Experience</h3>
                        </div>

                        <ol class="timeline-list">

                            @foreach($experience as $exp)
                            <li class="timeline-item">
                                <h4 class="h4 timeline-item-title">{{ $exp->title }}</h4>

                                <span>
                                    {{ $exp->start_year }} — {{ $exp->end_year ?? 'Present' }}
                                </span>

                                <p class="timeline-text">
                                    {!! $exp->description !!}
                                </p>
                            </li>
                            @endforeach

                        </ol>

                    </section>

                    <!--
        - #Skills
    -->

                    <section class="skill">

                        <h3 class="h3 skills-title">My Skills</h3>

                        <ul class="skills-list content-card">

                            @foreach($skills as $skill)
                            <li class="skills-item">
                                <div class="title-wrapper">
                                    <h5 class="h5">{{ $skill->name }}</h5>
                                    <data value="{{ $skill->percentage }}">{{ $skill->percentage }}%</data>
                                </div>
                                <div class="skill-progress-bg">
                                    <div class="skill-progress-fill" style="width: {{ $skill->percentage }}%;">
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>

                    </section>

                </article>

                <!--
        - #Projects
      -->
                <article class="projects {{ $page === 'projects' ? 'active' : '' }}">

                    <header>
                        <h2 class="h2 article-title">Projects</h2>
                    </header>

                    <section class="projects">

                        <ul class="filter-list">

                            <li class="filter-item">
                                <button class="active" data-filter-btn>All</button>
                            </li>

                            <li class="filter-item">
                                <button data-filter-btn>Web development</button>
                            </li>

                            <li class="filter-item">
                                <button data-filter-btn>Applications</button>
                            </li>

                        </ul>

                        <div class="filter-select-box">

                            <button class="filter-select" data-select>

                                <div class="select-value" data-selecct-value>Select category</div>

                                <div class="select-icon">
                                    <ion-icon name="chevron-down"></ion-icon>
                                </div>

                            </button>

                            <ul class="select-list">

                                <li class="select-item">
                                    <button data-select-item>All</button>
                                </li>

                                <li class="select-item">
                                    <button data-select-item>Web development</button>
                                </li>

                                <li class="select-item">
                                    <button data-select-item>Applications</button>
                                </li>

                            </ul>

                        </div>

                        <!-- 
                        - #For Isuues, Deploy Comeing-soon

                        <div class="container">
                         <div class="title"><i class="fa-regular fa-clock icon-spin"></i>&nbsp; Coming Soon</div>
                          <div class="subtitle">Please be patient, something interesting is cooking up...!!
                          </div>
                        </div>
                    -->

                        <ul class="project-list">

                            @foreach ($projects as $project)

                            <li class="project-item active" data-filter-item
                                data-category="{{ strtolower($project->category) }}">

                                <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer"
                                    style="display:block;">

                                    <figure class="project-img">
                                        <div class="project-item-icon-box">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </div>

                                        <img src="{{ asset($project->image) }}" alt="{{ $project->name }}"
                                            loading="lazy">
                                    </figure>

                                    <h3 class="project-title">
                                        {{ $project->name }}
                                    </h3>

                                    <p class="project-category">
                                        {{ $project->category }}
                                    </p>

                                </a>
                            </li>

                            @endforeach

                        </ul>

                    </section>

                </article>


                <!--
        - #Blog
      -->

                <!-- 
        - #For Isuues, Deploy Comeing-soon
          
        <div class="container">
          <div class="title"><i class="fa-regular fa-clock icon-spin"></i>&nbsp; Coming Soon</div>
          <div class="subtitle">Please be patient, something interesting is cooking up...!!
          </div>
        </div>
    -->

                <article class="blog {{ $page === 'blog' ? 'active' : '' }}">

                    <header>
                        <h2 class="h2 article-title">Blog</h2>
                    </header>

                    <section class="blog-posts">

                        <ul class="blog-posts-list">

                            @foreach ($blogs as $row)

                            <li class="blog-post-item">

                                <a href="{{ $row['post_link'] }}" target="_blank" rel="noopener noreferrer"
                                    style="display:block;">

                                    <figure class="blog-banner-box">

                                        {{-- Instagram --}}
                                        @if ($row['platform'] === 'Instagram')

                                        <blockquote class="instagram-media"
                                            data-instgrm-permalink="{{ $row['post_link'] }}" data-instgrm-version="14"
                                            style="width:100%;">
                                        </blockquote>
                                        <script async src="//www.instagram.com/embed.js"></script>

                                        {{-- Facebook --}}
                                        @elseif ($row['platform'] === 'Facebook' && !empty($row['post_iframe']))

                                        <iframe src="{{ $row['post_iframe'] }}" width="100%" height="365"
                                            style="border:none;overflow:hidden;" scrolling="no" frameborder="0"
                                            allowfullscreen="true">
                                        </iframe>

                                        {{-- Pinterest --}}
                                        @elseif ($row['platform'] === 'Pinterest' && !empty($row['post_iframe']))

                                        <iframe src="{{ $row['post_iframe'] }}" height="365" width="100%"
                                            frameborder="0" scrolling="no"></iframe>

                                        {{-- Default --}}
                                        @else

                                        <img src="{{ $row['post_image'] }}" alt="{{ $row['post_image_alt'] }}"
                                            loading="lazy">

                                        @endif

                                    </figure>

                                    <div class="blog-content">
                                        <div class="blog-meta">

                                            <p class="blog-category">
                                                {{ $row['post_category'] }}
                                            </p>

                                            <span class="dot"></span>

                                            <time datetime="{{ $row['post_date'] }}">
                                                {{ \Carbon\Carbon::parse($row['post_date'])->format('M d, Y') }}
                                            </time>

                                        </div>

                                        <h3 class="h3 blog-item-title">
                                            {{ $row['post_title'] }}
                                        </h3>

                                        <p class="blog-text">
                                            {!! $row['post_text'] !!}
                                        </p>

                                    </div>

                                </a>

                            </li>

                            @endforeach

                            <!--
                - #Temp For META Not Resolved Iframe
            -->

                            <!-- 
                        <div id="mobile-notification" class="notification">
                            <span class="close-btn" onclick="closeNotification()">&#10005;</span>

                            <p><span class="highlight-text">Apologies</span>, some blogs are unreachable due to
                                <span class="highlight-text">x-iframe</span><br> not being resolved by <span
                                    class="highlight-text">meta</span>. For the best experience,<br> switch to the
                                <span class="highlight-text">desktop mode</span>. Thanks for your understanding.
                            </p>
                        </div> 
                    -->

                        </ul>

                    </section>

                </article>

                <!--
        - #Contact
      -->
                <article class="contact {{ $page === 'contact' ? 'active' : '' }}">

                    <header>
                        <h2 class="h2 article-title">Contact</h2>
                    </header>

                    <section class="mapbox" data-mapbox>

                        <figure>
                            <iframe src="{{ config('app.app_location') }}" width="400" height="300"
                                loading="lazy"></iframe>
                            </iframe>
                        </figure>

                    </section>

                    <section class="contact-form">

                        <h3 class="h3 form-title">Contact Form</h3>
                        <form id="contact-form" class="form" method="POST" action="{{ route('contact.send') }}">
                            @csrf

                            <div class="input-wrapper">
                                <input type="text" name="fullname" class="form-input" placeholder="Your Full Name"
                                    required data-form-input>
                                <input type="email" name="email" class="form-input" placeholder="Your Email address"
                                    required data-form-input>
                            </div>

                            <textarea name="message" class="form-input" placeholder="Your Message" required
                                data-form-input></textarea>

                            <!-- 
                            - #Status Message 
                        -->
                            <div class="status-message">
                                <p id="form-status" style="display: none;"></p>
                            </div>

                            <button id="form-btn" class="form-btn" type="submit">
                                <ion-icon name="paper-plane"></ion-icon>
                                <span>Send Message</span>
                            </button>

                        </form>

                    </section>

                </article>


        </div>

    </main>

    <!--
    - #Scripts
  -->

    <script src="{{ asset('assets/js/home.js') }}"></script>
    <script src="{{ asset('assets/js/preloader_config.js') }}"></script>
    <script src="{{ asset('assets/js/meta_config.js') }}"></script>
    <script src="{{ asset('assets/js/mail_config.js') }}"></script>

</body>