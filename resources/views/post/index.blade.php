<x-app-layout>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot> --}}

    <div class="overflow-x-hidden">

        <div class="px-6 py-8 mt-20">

            @if (session('success'))
                {{ session('success') }}
            @endif

            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-neutral-50 md:text-2xl">Articles</h1>
                        <form id='filter-form' class="flex justify-between">
                            <input id="search_input" name="title" type="text" class="mx-5"
                                placeholder="Rechercher un article">
                            <select id="search_select" name='created_at'
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="">Filter</option>
                                <option value="desc">Newest</option>
                                <option value="asc">Oldest</option>
                            </select>
                            <button id="search_submit" class="px-2 mx-5 bg-blue-300" type="submit">Rechercher</button>
                        </form>
                    </div>
                    @foreach ($posts as $post)
                        <div class="mt-6">
                            <div class="max-w-4xl px-10 py-6 mx-auto bg-stone-600 rounded-lg shadow-md">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="font-light text-white">{{ $post->created_at->format('d M Y') }}</span><a
                                        href="#"class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">{{ $post->category->name }}</a>
                                </div>
                                <div class="mt-2"><a href="#"
                                        class="text-2xl font-bold text-white hover:underline">{{ $post->title }}</a>
                                    <p class="mt-2 text-white">{{ Str::limit($post->content, 120) }}</p>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <a href="#" class="text-gray-400 hover:text-white hover:underline">lire
                                        plus</a>
                                    <div>
                                        <a href="#" class="flex items-center">
                                            <img src={{ $post->user->profile_photo_path ?? 'https://ui-avatars.com/api/?name=?&color=7F9CF5&background=EBF4FF' }}
                                                alt="avatar"
                                                class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                            <h1 class="font-bold text-white hover:underline">
                                                {{ ucfirst($post->user->name) }}</h1>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="mt-8">
                        {{ $posts->links() }}
                    </div>
                </div>
                @include('partials.sidebar')
            </div>
        </div>
        @push('scripts')
            <script src="{{ asset('js/filter-select.js') }}"></script>
        @endPush
        @include('partials.footer')
    </div>

</x-app-layout>
