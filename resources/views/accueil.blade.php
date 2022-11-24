<x-app-layout>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>
    </head>

    <body>
        <div class="px-6 pt-20">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-around flex-wrap sm:justify-between ">
                    <a href="{{ route('posts.index') }}">
                        <h1 class="text-xl font-bold text-neutral-50 md:text-2xl">Les derniers Articles</h1>
                    </a>
                </div>
            </div>
        </div>



        <div class="slideshow-container">
            @foreach ($posts as $post)
                <div class="mt-6 mySlides fade">
                    <div class="slide max-w-4xl px-10 py-6 mx-auto bg-stone-600 rounded-lg shadow-md">
                        <div class="flex items-center justify-between">
                            <span class="font-light text-white">{{ $post->created_at->format('d M Y') }}</span><a
                                href="/articles?page=1&search=category.id:{{ $post->category->id }}"class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500 text-center">{{ $post->category->name }}</a>
                        </div>
                        <div class="mt-2"><a href="{{ route('posts.show', $post) }}"
                                class="text-2xl font-bold text-white hover:underline">{{ $post->title }}</a>
                            <p class="mt-2 text-white">{{ Str::limit($post->content, 120) }}</p>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <a href="{{ route('posts.show', $post) }}"
                                class="text-gray-400 hover:text-white hover:underline">lire
                                plus</a>
                            <div>
                                <a href="#" class="flex items-center">
                                    <img src={{ $post->user->profile_photo_url ?? 'https://ui-avatars.com/api/?name=?&color=7F9CF5&background=EBF4FF' }}
                                        alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                    <h1 class="font-bold text-white hover:underline">
                                        {{ ucfirst($post->user->name) }}</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="px-6 mt-40">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-around flex-wrap sm:justify-between ">
                    <a href="{{ route('twitch') }}">
                        <h1 class="text-xl font-bold text-neutral-50 md:text-2xl">Le Twitch</h1>
                    </a>
                </div>
            </div>
        </div>

        <div class="pb-20 xs:flex xs:justify-center lg:justify-center">
            <iframe class="lg:w-3/6 aspect-video sm:w-4/6 xs:w-full "
                src="https://player.twitch.tv/?channel=esl_csgo&parent=127.0.0.1&parent=localhost"
                allowfullscreen="true">
            </iframe>
        </div>

        @push('scripts')
            <script src="{{ asset('js/carousel.js') }}"></script>
        @endPush

        @include('partials.footer')
    </body>

</x-app-layout>
