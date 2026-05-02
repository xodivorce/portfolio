<!DOCTYPE html>
<html lang="en">

<head>

  <!--
    - #Head
  -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="{{ 'Official Portfolio Website of Prasid Mandal - Full-Stack Web Developer - (Also Known as @' . config('app.name') . ').' }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--
    - #SEO Meta Data
  -->

  @php

    $cvTitle = 'Curriculum Vitae | @' . config('app.name');

    $cvDescription = 'Explore the CV: cv@' . config('app.name') . ' - A Detailed Look at the Skills, Experience, and Education.';

  @endphp

  <!--
    - #Title
  -->

  <title>{{ $cvTitle }}</title>

  <!--
    - #Open Graph Meta Tags
  -->

  <meta property="og:title" content="{{ $cvTitle }}">
  <meta property="og:description" content="{{ $cvDescription }}">
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
  <link rel="icon" href="{{ asset('favicon.ico') }}">

  <!--
    - #StyleSheet
  -->

  <link rel="stylesheet" href="{{ asset('assets/css/cv-viewer.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

</head>

<body>

      @include('components.ui.preloader')

  <!--
    - #Content
  -->

  <iframe src="{{ asset('assets/pdf/' . $file) }}#toolbar=1&navpanes=0&scrollbar=1&view=FitH"></iframe>

</body>

 <!--
    - #Scripts
  -->

    <script src="{{ asset('assets/js/preloader_config.js') }}"></script>

</html>