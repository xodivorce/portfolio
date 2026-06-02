<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Testimonial;
use App\Models\Skill;
use App\Models\Project;
use App\Models\BlogPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //Testimonial::factory(3)->create();
        Testimonial::insert([
            [
                'name' => 'AutoSquare Store',
                'avatar' => 'assets/images/avatars/avatar-1.png',
                'message' => 'We recently came across your GitHub profile and were truly impressed by your skills and projects. We think you could be a fantastic addition to our team at AutoSquare as a Full Stack Software Engineer.',
                'date' => '2024-11-30'
            ],
            [
                'name' => 'IIT Guwahati',
                'avatar' => 'assets/images/avatars/avatar-5.png',
                'message' => "We are delighted to welcome you to the Credit-linked Program in Data Science, offered by Daksh Gurukul IIT Guwahati.\r\n\r\nYour journey toward academic excellence and personal growth begins now, and we are committed to supporting you every step of the way.",
                'date' => '2025-01-19'
            ],
            [
                'name' => 'Xiaorui from AutoMQ',
                'avatar' => 'assets/images/avatars/avatar-3.png',
                'message' => 'Prasid has shown a deep interest in open source, which immediately stood out to us. His passion and contributions align perfectly with high-performance systems like AutoMQ, and we believe his feedback and insights would be incredibly valuable.',
                'date' => '2025-06-12'
            ]
        ]);

        // Education::factory(5)->create();
        Education::insert([
            [
                'title' => 'Camellia Institute Of Technology',
                'start_year' => 2025,
                'end_year' => 2028,
                'description' => 'Bachelor of Technology (B.Tech) in Computer Science and Engineering (CSE);<br> Camellia Institute of Technology, under Maulana Abul Kalam Azad University of Technology (MAKAUT); Located at Digberia, Badu Road, Near NSG Hub, Madhyamgram, Kolkata - 700128.'
            ],
            [
                'title' => 'Kingston Polytechnic College',
                'start_year' => 2023,
                'end_year' => 2025,
                'description' => 'Diploma in Computer Science and Technology (WBSCVTESD);<br> Kingston Polytechnic College, affiliated with Kingston Educational Institute (KEI); Barasat - Barrackpore Rd, Kajibari, Kolkata, West Bengal 700126.'
            ],
            [
                'title' => 'Basirhat High School (HS)',
                'start_year' => 2021,
                'end_year' => 2023,
                'description' => 'Higher Secondary Education (WBCHSE); Completed 11th and 12th grade with Science (Physics, Chemistry, Biology) and Computer Applications under the WB Board at Basirhat High School (HS).'
            ],
            [
                'title' => 'Basirhat Town High School (HS)',
                'start_year' => 2015,
                'end_year' => 2021,
                'description' => 'Secondary Education (WBBSE);<br> Completed 5th to 10th grades under the WB Board at Basirhat Town High School (HS). Studied PT (Physical Training), Computer Studies, and Construction, gaining foundational knowledge and practical skills.'
            ],
            [
                'title' => 'Bhawanipur Harimohan Primary School',
                'start_year' => 2011,
                'end_year' => 2015,
                'description' => 'Primary Education (WBBPE);<br> Attended Bhawanipur Harimohan Primary School from class 1 to 4, starting with basic ABC and computer skills. Introduced to MS Paint, Word, and other applications from class 3 onwards.'
            ]
        ]);

        //Experience::factory(5)->create();
        Experience::insert([
            [
                'title' => "Google Gemini Student Ambassador '26",
                'start_year' => 2026,
                'end_year' => null,
                'description' => 'Selected as a Google Gemini Student Ambassador, representing Google Gemini and developer initiatives within the student community. Organizing workshops, technical sessions, and campus activities while helping students explore modern technologies, AI tools, and developer resources.'
            ],
            [
                'title' => "GirlScript Summer of Code '26",
                'start_year' => 2026,
                'end_year' => null,
                'description' => 'Contributing to open-source projects as part of GirlScript Summer of Code 2026 (GSSoC). Collaborating with maintainers and contributors, improving real-world projects, and gaining hands-on experience with modern development workflows and Git-based collaboration.'
            ],
            [
                'title' => 'GeeksforGeeks Campus Ambassador (Campus Mantri)',
                'start_year' => 2025,
                'end_year' => 2026,
                'description' => 'Representing GeeksforGeeks as the official Campus Mantri at Camellia Institute of Technology (CIT), Kolkata. Mentoring students in DSA, web development, and career preparation. Organizing workshops, coding initiatives, and technical sessions to foster a strong problem-solving and learning culture on campus.'
            ],
            [
                'title' => 'Mobile App Development (iOS & Android)',
                'start_year' => 2025,
                'end_year' => null,
                'description' => 'Learning to build modern iOS applications using Swift and SwiftUI, and modern Android applications using Kotlin and Jetpack Compose - with a strong focus on clean UI design, smooth performance, and intuitive user interactions.'
            ],
            [
                'title' => 'Web Developer (MERN)',
                'start_year' => 2024,
                'end_year' => null,
                'description' => 'Currently expanding my skills with the MERN stack (MongoDB, Express, React, Node.js). Working on new and exciting projects using modern web technologies. More MERN stack-based projects are coming soon!'
            ],
            [
                'title' => 'Web Developer (Laravel)',
                'start_year' => 2023,
                'end_year' => null,
                'description' => 'Self-taught Full Stacked Web Developer and managed web projects, including xodivorce.in. Collaborated with clients to create and deploy customized web solutions using HTML5, CSS3, JavaScript, PHP, and MySQL. Ensured mobile-friendliness with responsive design principles.'
            ],
            [
                'title' => 'CITA - IT And ITAS',
                'start_year' => 2023,
                'end_year' => 2024,
                'description' => 'Completed Youth Computer Training at CITA in Basirhat, West Bengal. Acquired practical experience with a range of IT tools and technologies. Successfully finished the IT/ITAS training program, which lasted for 6 months.'
            ]
        ]);

        //Skill::factory(22)->create();
        Skill::insert([
            [
                'name' => 'HTML',
                'percentage' => 100
            ],
            [
                'name' => 'TailwindCSS',
                'percentage' => 90
            ],
            [
                'name' => 'JavaScript',
                'percentage' => 80
            ],
            [
                'name' => 'React',
                'percentage' => 60
            ],
            [
                'name' => 'Vite',
                'percentage' => 55
            ],
            [
                'name' => 'Next',
                'percentage' => 50
            ],
            [
                'name' => 'Express.js',
                'percentage' => 65
            ],
            [
                'name' => 'Node.js',
                'percentage' => 80
            ],
            [
                'name' => 'Laravel',
                'percentage' => 95
            ],
            [
                'name' => 'Livewire',
                'percentage' => 45
            ],
            [
                'name' => 'PHP',
                'percentage' => 90
            ],
            [
                'name' => 'Kotlin',
                'percentage' => 55
            ],
            [
                'name' => 'C',
                'percentage' => 35
            ],
            [
                'name' => 'Java',
                'percentage' => 45
            ],
            [
                'name' => 'Python',
                'percentage' => 80
            ],
            [
                'name' => 'MySQL',
                'percentage' => 95
            ],
            [
                'name' => 'MongoDB',
                'percentage' => 85
            ],
            [
                'name' => 'Nginx',
                'percentage' => 80
            ],
            [
                'name' => 'Docker',
                'percentage' => 75
            ],
            [
                'name' => 'Figma',
                'percentage' => 40
            ],
            [
                'name' => 'NPM',
                'percentage' => 65
            ],
            [
                'name' => 'Git',
                'percentage' => 85
            ]
        ]);

        //Project::factory(33)->create();
        Project::insert([
            [
                'name' => 'Isdowndetectordown',
                'category' => 'Web development',
                'link' => 'https://github.com/xodivorce/isdowndetectordown',
                'image' => 'assets/images/projects/isdowndetectordown_project.webp'
            ],
            [
                'name' => 'Url-xodivorce-in',
                'category' => 'Web development',
                'link' => 'https://github.com/xodivorce/url-xodivorce-in',
                'image' => 'assets/images/projects/xeorl_project.webp'
            ],
            [
                'name' => 'Xodivorce-in',
                'category' => 'Web development',
                'link' => 'https://github.com/xodivorce/portfolio',
                'image' => 'assets/images/projects/portfolio_project.webp'
            ],
            [
                'name' => 'Zukes IG[Mass Reporter]',
                'category' => 'Applications',
                'link' => 'https://github.com/xodivorce/zukes-IG',
                'image' => 'assets/images/projects/zukes_ig_project.webp'
            ],
            [
                'name' => 'NPX Business Card',
                'category' => 'Applications',
                'link' => 'https://github.com/xodivorce/npx-xodivorce',
                'image' => 'assets/images/projects/npx_business_card_project.webp'
            ],
            [
                'name' => 'Encrypter Tool',
                'category' => 'Applications',
                'link' => 'https://github.com/xodivorce/encrypter-bot',
                'image' => 'assets/images/projects/encrypter_project.webp'
            ]
        ]);

        //BlogPost::factory(10)->create();
        BlogPost::insert(
            [
                [
                    'post_link' => 'https://www.youtube.com/watch?v=omSz7gUnyG0',
                    'post_image' => 'assets/images/blogs/how-to-install-grand-theft-auto-iv.webp',
                    'post_image_alt' => 'how-to-install-grand-theft-auto-iv',
                    'post_category' => 'Game',
                    'post_date' => '2024-06-27',
                    'post_title' => 'How To Install Grand Theft Auto IV - MacBook Air M1',
                    'post_text' => "Hey there, awesome people! 🚀 In this video, I’ll show you how to install GTA IV or else on macOS. We're exploring how people gonna play Mac games(🎮) for free and how the process works.",
                    'platform' => 'YouTube',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.youtube.com/watch?v=ZHySccRced0',
                    'post_image' => 'assets/images/blogs/your-mac-will-never-be-the-same!.webp',
                    'post_image_alt' => 'your-mac-will-never-be-the-same!',
                    'post_category' => 'OS',
                    'post_date' => '2024-08-17',
                    'post_title' => 'Your Mac will NEVER be the same!',
                    'post_text' => "Hey there, awesome people! 🚀 In today’s video, I’ll show you how to effortlessly update your Mac to macOS 15.1. And khow about is it perfect to update the base model of Mac with M1 chip 🍏✨!",
                    'platform' => 'YouTube',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.youtube.com/watch?v=0xZDMwt3aXA',
                    'post_image' => 'assets/images/blogs/bluestacks-air-tutorial-m1.webp',
                    'post_image_alt' => 'bluestacks-air-tutorial-m1',
                    'post_category' => 'OS',
                    'post_date' => '2025-03-31',
                    'post_title' => 'How To Play Android Games - Mac Book Air M1',
                    'post_text' => "Hey there, awesome people!🚀 In this video, I’ll show you how to effortlessly install Android Games on your macOS. It's quick & easy for all you gamers out there 🎮🍏!",
                    'platform' => 'YouTube',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.youtube.com/watch?v=D7ZGFCCfVkM',
                    'post_image' => 'assets/images/blogs/cracked-softwares-on-macbook.webp',
                    'post_image_alt' => 'cracked-softwares-on-macbook',
                    'post_category' => 'OS',
                    'post_date' => '2025-11-04',
                    'post_title' => 'Cracked Softwares On MacBook?',
                    'post_text' => "This video is for educational purposes(📚) only. We’re exploring how people find modified Mac apps and how the process works - but please use this knowledge responsibly 👻.",
                    'platform' => 'YouTube',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/CtG2gzyrGEQ/',
                    'post_image' => null,
                    'post_image_alt' => 'It Ends With Us 🥀',
                    'post_category' => 'Instagram',
                    'post_date' => '2023-09-13',
                    'post_title' => 'It Ends With Us 🥀',
                    'post_text' => "There is no such thing as bad people. We're all just people who sometimes do bad things...🥀 #IT ENDS WITH US, click to view on Instagram.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/C5LnyqLS5HR/',
                    'post_image' => null,
                    'post_image_alt' => 'Apple MacBook Air M1 💻',
                    'post_category' => 'Instagram',
                    'post_date' => '2024-03-31',
                    'post_title' => 'Apple MacBook Air M1 💻',
                    'post_text' => "Sometimes it's you, all you need to find yourself..☺️, I've tried to spend all days through my Mac Air M1; click to view on Instagram.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DMF7eIcyqKE/',
                    'post_image' => null,
                    'post_image_alt' => 'Spotify 🎧',
                    'post_category' => 'Instagram',
                    'post_date' => '2024-05-14',
                    'post_title' => 'Spotify 🎧',
                    'post_text' => "Her~ @this.is.gini , in dream 🌬️✨ !!, I've tried this song and in love with it - spend all days 😭♥️; click to view on Instagram.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/C78eHXlS3jf/',
                    'post_image' => null,
                    'post_image_alt' => '나비 🦋',
                    'post_category' => 'Instagram',
                    'post_date' => '2024-06-08',
                    'post_title' => '나비 🦋',
                    'post_text' => "Nymphalis polychloros & micro generative video. The butterfly(나비) is so pretty 😭🦋♥️ and fully upscaled through AI, click to view on Instagram.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DMF8pH6yHRn/',
                    'post_image' => null,
                    'post_image_alt' => 'Best of 2k23 🗿',
                    'post_category' => 'Instagram',
                    'post_date' => '2024-08-19',
                    'post_title' => 'Best of 2k23 🗿',
                    'post_text' => "Don't compare me with others, if they're better, go with them; idgaf...!!; click to view on Instagram.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DMF_FFMydz1/',
                    'post_image' => null,
                    'post_image_alt' => 'My small Lilith.. 💨',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-07-19',
                    'post_title' => 'My small Lilith..💨',
                    'post_text' => "So, I bought the MacBook Air M1 finally. After lots of efforts finally full-fill my dream towards apple devices.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DMGDoGZyagG/',
                    'post_image' => null,
                    'post_image_alt' => 'Kolkata: The City of Joy 🤩',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-07-18',
                    'post_title' => 'Kolkata: The City of Joy 🤩',
                    'post_text' => "I explored all of the parts of Kolkata, with my friends and we made a lot of memories.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DAuptyny9dz/',
                    'post_image' => null,
                    'post_image_alt' => 'Happy endings ✨',
                    'post_category' => 'Instagram',
                    'post_date' => '2024-10-05',
                    'post_title' => 'Happy endings✨',
                    'post_text' => "Tried this trend ' 💀, better luck next time <3. '; Everyone does deserve happy endings 🗿, for me not everyone. Click to view on Instagram.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/C64SDX1yI2B/',
                    'post_image' => null,
                    'post_image_alt' => 'Prequelapp',
                    'post_category' => 'Instagram',
                    'post_date' => '2024-05-13',
                    'post_title' => 'Prequelapp',
                    'post_text' => "Try this app @prequelapp with my sorts, in love 😭♥️. The filter named Air, Click to view on Instagram.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DMGPxPSSI_9/',
                    'post_image' => '',
                    'post_image_alt' => 'HR Meetup, Euphoria..💨',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-07-20',
                    'post_title' => 'HR Meetup, Euphoria..💨',
                    'post_text' => "Memories in 2k24, the fan meetup in Sep was unexpected! Some great clicks—check them out on Instagram.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DMGQhIeyID4/',
                    'post_image' => '',
                    'post_image_alt' => 'Santiniketan 🧩',
                    'post_category' => 'Instagram',
                    'post_date' => '2024-09-10',
                    'post_title' => 'Santiniketan 🧩',
                    'post_text' => "Explored Santiniketan tourist spots. Although the adventure is awesome, must try at least once in a life.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DNdRT2pS2X-/',
                    'post_image' => '',
                    'post_image_alt' => 'iPhone 16 🪻.𖥔 ݁˖‧˖',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-08-15',
                    'post_title' => 'iPhone 16 🪻.𖥔 ݁˖‧˖',
                    'post_text' => "And if I changed everything - yeah, my whole fucking life! would you please love me? - yeah thats for my iPhone 16 🌪️.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DN2ROTx5BZR/',
                    'post_image' => null,
                    'post_image_alt' => 'Salt Lake City 🌆',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-08-27',
                    'post_title' => 'Salt Lake City 🌆',
                    'post_text' => "At the dawn, the city feels like: Baby, I’m obsessed with you, and there’s no replica.. 🦋.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DOJlR9XkkEn/',
                    'post_image' => '',
                    'post_image_alt' => 'A moody Kolkata 🌧️',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-09-06',
                    'post_title' => 'A moody Kolkata 🌧️',
                    'post_text' => "So give me the night to show you, hold you - don’t leave me out here dancin’ alone! Kolkata on a railny day hits hard though.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DP2GE0-kpL8/',
                    'post_image' => null,
                    'post_image_alt' => 'Naihati, 24 PGS(N)',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-10-16',
                    'post_title' => 'Naihati, 24 PGS(N)',
                    'post_text' => "I visited the Naihati, 24 PGS(N) with my mom; specially for Puja. Else I shot down some amazing pics on there ✨.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DQz1NK4k5-t/',
                    'post_image' => null,
                    'post_image_alt' => 'Swipe 👉🏻',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-11-09',
                    'post_title' => 'Swipe 👉🏻',
                    'post_text' => "Exactly nothing. I just live for a few hours on Instagram, Omegle. I enjoyed taking to random people from the world 🌍.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DSWpP51kvSN/',
                    'post_image' => null,
                    'post_image_alt' => 'Abroad Fair, LeapScholar 💻',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-12-15',
                    'post_title' => 'Abroad Fair, LeapScholar 💻',
                    'post_text' => "I visited the Abroad Study Fair by LeapScholar and spoke with representatives from several Western universities 🌍🎓.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DSWrQ-iElV3/',
                    'post_image' => null,
                    'post_image_alt' => 'St. Paul\'s Cathedral ♾️ †',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-12-16',
                    'post_title' => 'St. Paul\'s Cathedral ♾️ †',
                    'post_text' => "I spent a peaceful afternoon at Kolkata Maidan 🌿 and visited St. Paul’s Cathedral †. Overall it was a quiet and well-maintained place!",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DMavV9XSh5Z/',
                    'post_image' => null,
                    'post_image_alt' => 'The Theory of One Lap 🏎️',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-07-22',
                    'post_title' => 'The Theory of One Lap 🏎️',
                    'post_text' => "There's a point at 7,000 RPM... where everything fades. The machine becomes weightless. Just disappears!",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DPZefBpk1HA/',
                    'post_image' => null,
                    'post_image_alt' => 'Basirhat Carnival 25\'.. 🎡',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-10-05',
                    'post_title' => 'Basirhat Carnival 25\'.. 🎡',
                    'post_text' => "Shot on iPhone 16, edited on Mac, and brought to you on Instagram 📸 - capturing the energy, colors, and moments of the Basirhat Carnival 🎡.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [

                    'post_link' => 'https://www.instagram.com/reel/DPf6IlmkbZk/',
                    'post_image' => null,
                    'post_image_alt' => 'Yeah, we changed 🥀',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-10-07',
                    'post_title' => 'Yeah, we changed 🥀',
                    'post_text' => "This edit is for my gaming channel @divorce_plays 🎮💔 - moments, emotions, and silence between the shots. Sometimes the loudest changes happen quietly.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DRm9id_kgOY/',
                    'post_image' => null,
                    'post_image_alt' => '日本利用压电瓷砖将脚步转化...',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-11-28',
                    'post_title' => '日本利用压电瓷砖将脚步转化...',
                    'post_text' => "I tried using this prompt purely for virality - and yeah, it worked. 🚀 We crossed 4.5M+ views ⚡️.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DSeh4BvkoEN/',
                    'post_image' => null,
                    'post_image_alt' => '日本利用压电瓷砖将脚步转化为...',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-12-20',
                    'post_title' => '日本利用压电瓷砖将脚步转化为...',
                    'post_text' => "I tried a second time using this prompt purely for virality - and this time, it didn’t work 😔.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DSkPhNBEZbN/',
                    'post_image' => null,
                    'post_image_alt' => 'Recap \'25 ⏳',
                    'post_category' => 'Instagram',
                    'post_date' => '2025-12-22',
                    'post_title' => 'Recap \'25 ⏳',
                    'post_text' => "POV: 2025 is about to end - and this is your recap. The moments, the lessons, the wins, and everything in between. ✨",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DUDPPikklvu/',
                    'post_image' => null,
                    'post_image_alt' => 'U da real love ❤️‍🩹',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-01-28',
                    'post_title' => 'U da real love ❤️‍🩹',
                    'post_text' => "A calm rooftop evening, lost in the moment 🌆. Clicked a few frames while the city slowed down - soft skies ☁️, quiet thoughts, and that kind of peace you don’t plan.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DUOYFRBEq-R/',
                    'post_image' => null,
                    'post_image_alt' => 'A day at GFG Kolkata 🏢',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-02-02',
                    'post_title' => 'A day at GFG Kolkata 🏢',
                    'post_text' => "Invited to the GeeksforGeeks Kolkata office - a day filled with insightful conversations 💡, community energy 🤝, and a closer look at how ideas turn into impact. Grateful for the experience and the people behind the platform.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DUdF6BJEvns/',
                    'post_image' => null,
                    'post_image_alt' => 'Last night, unforgettable 🎸',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-02-07',
                    'post_title' => 'Last night, unforgettable 🎸',
                    'post_text' => "Last night was unforgettable - attending the KEI Alumni event as an ex-student. Pure vibes, great music, and moments that stay with you. Huge love to @fakiramusic for making it special 🎶✨.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DVjPepLkl5C/',
                    'post_image' => null,
                    'post_image_alt' => 'She’s the colour :)',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-03-20',
                    'post_title' => 'She’s the colour :)',
                    'post_text' => "When she becomes your colour, and you start painting your life with her interests 🎨✨.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DWrYsG6ki-5/',
                    'post_image' => null,
                    'post_image_alt' => 'You just need a haircut! 🫪',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-04-05',
                    'post_title' => 'You just need a haircut! 🫪',
                    'post_text' => "Visited Zudio, Basirhat for a quick outing 🛍️✨ - had a little fun, tried some fits, and clicked a few mirror selfies 📸🪞. Just one of those simple days that feels good.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DW6PBlXEgKQ/',
                    'post_image' => null,
                    'post_image_alt' => 'I didn’t know what I was looking for ~ 🫪',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-04-12',
                    'post_title' => 'I didn’t know what I was looking for ~ 🫪',
                    'post_text' => "Visited Zudio, Basirhat with homies 🫂✨ - took some pinkish aesthetic selfies with soft poses and chill vibes. Just going with the moment 🪞🌸.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DXRYuquEXmC/',
                    'post_image' => null,
                    'post_image_alt' => 'Recreated Project Hail Mary on Minecraft',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-04-20',
                    'post_title' => 'Project Hail Mary in Minecraft 🚀',
                    'post_text' => "Recreated Project Hail Mary’s Tau Ceti moment in Minecraft 🧱 - building it block by block to capture the scale, isolation, and sci-fi atmosphere 🛰️✨.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DXlc_cwkmRQ/',
                    'post_image' => null,
                    'post_image_alt' => 'Day 1 @amd Slingshot Ideation ⚡️',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-04-26',
                    'post_title' => 'Day 1 @amd Slingshot Ideation ⚡️',
                    'post_text' => "Explored vibe coding with Google's Antigravity ✨ and later took part in a Prompt-a-thon at Future Institute of Engineering and Management, Kolkata 🚀.",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DYIY3BxkgiR/',
                    'post_image' => null,
                    'post_image_alt' => "A L E G R I A '26 x DC 🎸",
                    'post_category' => 'Instagram',
                    'post_date' => '2026-05-8',
                    'post_title' => "A L E G R I A '26 x DC 🎸",
                    'post_text' => "Captured one of my favorite moments from the A L E G R I A '26 at Camellia Institute of Technology, featuring an electrifying live performance by Distorted Chromosomes. A night filled with music, energy, and unforgettable memories through iPhone 16. 📸✨",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DYHzqZhSxs1/',
                    'post_image' => null,
                    'post_image_alt' => "Phir Kabhi @ DC at A L E G R I A 🍃",
                    'post_category' => 'Instagram',
                    'post_date' => '2026-05-08',
                    'post_title' => "Phir Kabhi @ A L E G R I A 🍃",
                    'post_text' => "A special moment from A L E G R I A '26 as Distorted Chromosomes performed 'Phir Kabhi' live on stage. Hearing unreleased music in front of a live audience made the experience even more memorable. ⚡🎸",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DYKK1O9xJoV/',
                    'post_image' => null,
                    'post_image_alt' => "A L E G R I A, Memories ✨",
                    'post_category' => 'Instagram',
                    'post_date' => '2026-05-10',
                    'post_title' => "A L E G R I A, Memories ✨",
                    'post_text' => "My first ALEGRIA at Camellia Institute of Technology, yet it gave me memories that will stay forever. A night filled with music, friendships, and moments that reminded us how quickly time passes. ❤️✨",
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DYNXarKEghf/',
                    'post_image' => null,
                    'post_image_alt' => 'Korean Stadium AI Trend',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-05-12',
                    'post_title' => 'Why Not? 🇰🇷✨',
                    'post_text' => 'Joined the viral Korean stadium AI trend just for fun. Sometimes all it takes is a good photo, a little AI, and a curiosity to see what happens. Why not be the main character for a day? 😄✨ Living the K-drama moment. 🇰🇷',
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DY0MfF4zDad/',
                    'post_image' => null,
                    'post_image_alt' => 'Building With Gemini',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-05-26',
                    'post_title' => 'Building Thoughts With Gemini 💙✨',
                    'post_text' => 'From coding to creativity, Gemini has become part of my daily workflow. Helping me learn faster, think deeper, and turn ideas into reality one prompt at a time. 💙✨',
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DYwbjbiEpiV/',
                    'post_image' => null,
                    'post_image_alt' => 'KKR vs DC at Eden Gardens',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-05-24',
                    'post_title' => 'KKR Forever At Eden Gardens 💜🏏',
                    'post_text' => 'Just weeks after becoming a Google Student Ambassador, I got the chance to watch KKR vs DC at Eden Gardens through Google India. The result hurt, but the experience was unforgettable. 💜🏏',
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DYxWluKyrs_/',
                    'post_image' => null,
                    'post_image_alt' => 'One Last Match Before Life Gets Serious!! 🏏',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-05-24',
                    'post_title' => 'One Last Match Before Life Gets Serious!! 🏏',
                    'post_text' => 'A glimpse from KKR vs DC at Eden Gardens. One last carefree evening before life gets a little more serious, filled with cricket, memories, and the electric atmosphere only Eden can offer. 💜🏏✨',
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/reel/DYfwoc7Sf90/',
                    'post_image' => null,
                    'post_image_alt' => 'Google Student Ambassador 2026',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-05-19',
                    'post_title' => 'Google Student Ambassador 2026 💙',
                    'post_text' => 'One of the biggest milestones of my journey - being selected for the Google Student Ambassador Program 2026. Grateful to Google India for this opportunity and excited to learn, build, and grow with the community. 💙✨',
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'post_link' => 'https://www.instagram.com/p/DZDkr4mkuM3',
                    'post_image' => null,
                    'post_image_alt' => 'Former Love @ Kolkata ♥️✨',
                    'post_category' => 'Instagram',
                    'post_date' => '2026-06-01',
                    'post_title' => 'Former Love @ Kolkata ♥️✨',
                    'post_text' => 'With a former love, at the former capital of India, Kolkata. Some places hold memories long after people become part of the past. A city of nostalgia, stories, and moments that quietly stay with you. ✈️🌆',
                    'platform' => 'Instagram',
                    'post_iframe' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
