<x-app-layout>

    <div
        class=" min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

        <!-- Sidebar -->
        <div
            class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5 hidden md:block">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('admin.user') }}"
                            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Utilisateurs</span>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Articles</span>
                        </a>
                </ul>
            </div>
        </div>
        <!-- ./Sidebar -->

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

            <!-- Client Table -->
            <div class="pt-5">
                <form id='filter-form' class="grid grid-rows-3 grid-flow-col gap-4 sm:flex justify-between ">
                    <input id="search_input_post" name="title" type="text" class="mx-5 rounded-lg text-black"
                        placeholder="Rechercher un article">
                    <select id="search_select_post" name='created_at' class="mx-5 rounded-lg text-black">
                        <option value="">Filter</option>
                        <option value="desc">Newest</option>
                        <option value="asc">Oldest</option>
                    </select>
                    <button id="search_submit_post" class="px-2 mx-5 bg-blue-300 rounded-lg"
                        type="submit">Rechercher</button>
                </form>
            </div>
            <div class="mt-4 mx-4">
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Auteurs</th>
                                    <th class="px-4 py-3">Titres</th>
                                    <th class="px-4 py-3">Action</th>
                                    <th class="px-4 py-3">Date</th>
                                </tr>
                            </thead>
                            @foreach ($posts as $post)
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    <tr
                                        class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="{{ $post->user->profile_photo_url }}" alt=""
                                                        loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">{{ $post->user->name }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">{{ $post->title }}</td>
                                        <td class="px-4 py-3 text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight rounded-full bg-red-700 text-white"><a
                                                    href="#"
                                                    onclick="event.preventDefault;
                                                    document.getElementById('destroy-post-form-{{ $post->id }}').submit();">
                                                    Supprimer</a>

                                                <form action="{{ route('posts.destroy', $post) }}" method="post"
                                                    id="destroy-post-form-{{ $post->id }}" class="contents">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                                </a>
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">{{ $post->created_at }}</td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div
                        class="grid px-4 py-3 text-xs font-semibold tracking-wide uppercase border-t border-gray-700 bg-gray-800">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
            <!-- ./Client Table -->

        </div>
    </div>
</x-app-layout>
