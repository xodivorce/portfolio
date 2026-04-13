<!doctype html>
<html lang="en">

<head>

    <!--
    - #Head
  -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="{{ 'Official Portfolio Website of Prasid Mandal - Full-Stack Web Developer - (Also Known as @' . config('app.name') . ').' }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--
    - #SEO Meta Data
    -->

    @php

        $errorTitle = $message . ' | @' . config('app.name');

        $errorDescription = $message . ' — Sorry About That. Feel Free to Head Back to the Homepage of @' . config('app.name') . '.';

    @endphp

    <!--
    - #Title
  -->

    <title>{{ $errorTitle }}</title>

    <!--
    - #Open Graph Meta Tags
  -->

    <meta property="og:title" content="{{ $errorTitle }}">
    <meta property="og:description" content="{{ $errorDescription }}">
    <meta property="og:image" content="{{ asset('assets/images/user/xodivorce.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!--
    - #Favicon
  -->

    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">


    <!--
    - #StyleSheet
  -->

    <link rel="stylesheet" href="{{ asset('assets/css/error.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--
    - #Font
  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;600;700&display=swap"
        rel="stylesheet">

</head>

<!--
    - #Main
  -->

<body class="body-font">

    <main>

        <!--
    - #Content
  -->

        <div>

            <div>

                <span>{{ $code }} error</span>
                <span>{{ strtolower($message) }}</span>

            </div>

            <svg viewBox="0 0 200 600">

                <polygon
                    points="118.302698 8 59.5369448 66.7657528 186.487016 193.715824 14 366.202839 153.491505 505.694344 68.1413353 591.044514 200 591.044514 200 8">
                </polygon>

            </svg>

        </div>

        <svg class="crack" viewBox="0 0 200 600">

            <polyline
                points="118.302698 8 59.5369448 66.7657528 186.487016 193.715824 14 366.202839 153.491505 505.694344 68.1413353 591.044514">
            </polyline>

        </svg>

        <div>

            <svg viewBox="0 0 200 600">

                <polygon
                    points="118.302698 8 59.5369448 66.7657528 186.487016 193.715824 14 366.202839 153.491505 505.694344 68.1413353 591.044514 0 591.044514 0 8">
                </polygon>

            </svg>

            <div>

                <span>sorry&nbsp;about&nbsp;that!</span>

                <span>

                    <button class="return-btn" onclick="window.location.href='{{ url('/') }}'">
                        return home?
                    </button>

                </span>

            </div>

        </div>

    </main>

</body>

</html>