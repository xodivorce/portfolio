@php

    $profile = config('profile');
    $seo = config('seo');

    $schema = [

        '@context' => 'https://schema.org',

        '@graph' => [

            /*
            |--------------------------------------------------------------------------
            | Person
            |--------------------------------------------------------------------------
            */

            [

                '@type' => 'Person',

                '@id' => url('/') . '/#person',

                'name' => $profile['name'],

                'alternateName' => [
                    $profile['username'],
                ],

                'identifier' => '@' . $profile['username'],

                'url' => url('/'),

                'mainEntityOfPage' => [
                    '@id' => url('/') . '/#profile',
                ],

                'image' => [

                    '@type' => 'ImageObject',

                    'url' => asset($profile['image']),

                    'width' => 886,

                    'height' => 886,

                ],

                'description' => $seo['description'],

                'email' => 'mailto:' . $profile['email'],

                'birthDate' => $profile['birth_date'],

                'nationality' => [

                    '@type' => 'Country',

                    'name' => $profile['nationality'],

                ],

                'homeLocation' => [

                    '@type' => 'Place',

                    'name' => $profile['location'],

                ],

                'jobTitle' => $seo['job_title'],

                'knowsLanguage' => $seo['languages'],

                'knowsAbout' => $seo['knows_about'],

                'alumniOf' => collect($seo['education'])
                    ->map(fn($school) => [

                        '@type' => 'CollegeOrUniversity',

                        'name' => $school,

                    ])
                    ->values()
                    ->all(),

                'sameAs' => array_values($profile['socials']),

            ],

            /*
            |--------------------------------------------------------------------------
            | Profile Page
            |--------------------------------------------------------------------------
            */

            [

                '@type' => 'ProfilePage',

                '@id' => url('/') . '/#profile',

                'url' => url('/'),

                'name' => $seo['profile']['title'],

                'mainEntity' => [

                    '@id' => url('/') . '/#person',

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Website
            |--------------------------------------------------------------------------
            */

            [

                '@type' => 'WebSite',

                '@id' => url('/') . '/#website',

                'url' => url('/'),

                'name' => $seo['website']['name'],

                'description' => $seo['website']['description'],

                'inLanguage' => $seo['website']['language'],

            ],

            /*
            |--------------------------------------------------------------------------
            | Current WebPage
            |--------------------------------------------------------------------------
            */

            [

                '@type' => 'WebPage',

                '@id' => url()->current() . '#webpage',

                'url' => url()->current(),

                'name' => $homeTitle,

                'description' => $ogDescriptions[$currentPage],

                'isPartOf' => [

                    '@id' => url('/') . '/#website',

                ],

                'about' => [

                    '@id' => url('/') . '/#person',

                ],

                'primaryImageOfPage' => [

                    '@type' => 'ImageObject',

                    'url' => asset($profile['image']),

                    'width' => 886,

                    'height' => 886,

                ],

                'inLanguage' => $seo['website']['language'],

            ],

            /*
            |--------------------------------------------------------------------------
            | Breadcrumbs
            |--------------------------------------------------------------------------
            */

            [

                '@type' => 'BreadcrumbList',

                '@id' => url()->current() . '#breadcrumb',

                'itemListElement' => collect($seo['breadcrumbs'])
                    ->map(fn($item) => [

                        '@type' => 'ListItem',

                        'position' => $item['position'],

                        'name' => $item['name'],

                        'item' => url($item['url']),

                    ])
                    ->values()
                    ->all(),

            ],

        ],

    ];

@endphp

<script type="application/ld+json">
{!! json_encode(
    $schema,
    JSON_UNESCAPED_SLASHES |
    JSON_UNESCAPED_UNICODE |
    JSON_PRETTY_PRINT
) !!}
</script>