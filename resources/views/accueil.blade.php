<x-app-layout>

    <style>
        .mySlides {
            display: none;
        }



        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
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
    </style>
    </head>

    <body>

        <div style="background-image: url('{{ asset('images/axel.png') }}')" class="pt-20">
            <div class="py-10  flex justify-center">

                <div class=" w-full">
                    <div class="flex justify-center">
                        <div class="w-96 justify-center">
                            <div>
                                <h1 class="text-2xl text-center font-bold text-shadow text-white md:text-2xl"
                                    style="text-shadow: -1px 1px 0 #000, 1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000;">
                                    Nous ne sommes pas ennemis, mais amis ! Nous ne devons pas être ennemis. Même si la
                                    passion nous déchire, elle ne doit pas briser l’affection qui nous lie...</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-6 pt-20">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-around flex-wrap sm:justify-between ">
                    <a href="{{ route('posts.index') }}">
                        <h1 class="text-xl font-bold text-neutral-50 md:text-2xl">Les dernières News</h1>
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
                                <a href="/articles?page=1&search=user.id:{{ $post->user->id }}"
                                    class="flex items-center">
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
        <div style="background-image: url('{{ asset('images/banner_twitch.png') }}')">
            <div class="py-10 mt-40  flex justify-center">

                <div class=" w-full">
                    <div class="">
                        <div class="w-full ">
                            <div class="pl-6">
                                <a href="{{ route('twitch') }}">
                                    <h1 class="text-xl font-bold text-neutral-50 md:text-2xl">Le Twitch</h1>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="z-10 flex justify-center m-0 p-0">
                        {{-- <iframe class="lg:w-3/6 aspect-video sm:w-4/6 xs:w-full "
                            src="https://player.twitch.tv/?channel=esl_csgo&parent=127.0.0.1&parent=localhost"
                            allowfullscreen="true"> --}}
                        <iframe class="aspect-video w-7/12"
                            src="https://player.twitch.tv/?channel=esl_csgo&parent=127.0.0.1&parent=localhost"
                            allowfullscreen="true">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        @push('scripts')
            <script src="{{ asset('js/carousel.js') }}"></script>
        @endPush

        @include('partials.footer')
    </body>

</x-app-layout>
