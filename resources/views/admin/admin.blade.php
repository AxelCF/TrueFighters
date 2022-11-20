<x-app-layout>
    <div x-data="setup()" :class="{ 'dark': isDark }">
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
                            <a href="#"
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
                            <a href="#"
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
                <div class="mt-4 mx-4">
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Utilisateurs</th>
                                        <th class="px-4 py-3">Email</th>
                                        <th class="px-4 py-3">Role</th>
                                        <th class="px-4 py-3">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    <tr
                                        class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Hans Burger</p>
                                                    <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">$855.85</td>
                                        <td class="px-4 py-3 text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                Approved </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">15-01-2021</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                            <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
                            <span class="col-span-2"></span>
                            <!-- Pagination -->
                            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                                <nav aria-label="Table navigation">
                                    <ul class="inline-flex items-center">
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                                aria-label="Previous">
                                                <svg aria-hidden="true" class="w-4 h-4 fill-current"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-blue-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                                        </li>
                                        <li>
                                            <span class="px-3 py-1">...</span>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                                aria-label="Next">
                                                <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </nav>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- ./Client Table -->

            </div>
        </div>
    </div>
</x-app-layout>
