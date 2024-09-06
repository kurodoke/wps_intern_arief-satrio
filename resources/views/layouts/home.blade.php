<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'WPS')</title>
</head>

<body>
    <!-- Header -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-2 rtl:space-x-reverse">
                <div class="w-[42px] h-[42px] md:w-[64px] md:h-[64px]">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        id="Capa_1" viewBox="-50.49 -50.49 605.88 605.88" xml:space="preserve" fill="#000000"
                        stroke="#000000" stroke-width="0.00504895">
                        <g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)">
                            <rect x="-50.49" y="-50.49" width="605.88" height="605.88" rx="302.94" fill="#c8e7f4"
                                strokewidth="0"></rect>
                        </g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
                            stroke-width="15.146849999999997"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path style="fill:#ffffff;"
                                    d="M392.139,169.814H287.295l-30.847-45.246h-33.27l0.103,45.246H112.756 C54.624,169.814,7.5,216.938,7.5,275.07c0,58.131,47.124,105.256,105.256,105.256h279.383c58.132,0,105.256-47.125,105.256-105.256 C497.395,216.938,450.271,169.814,392.139,169.814z">
                                </path>
                                <circle style="fill:#7e7b63;" cx="112.756" cy="275.07" r="105.256"></circle>
                                <path style="fill:#0F2639;"
                                    d="M392.139,162.314h-100.88l-30.847-45.246h-44.75l0.103,45.246H112.756 C50.582,162.314,0,212.897,0,275.07s50.582,112.756,112.756,112.756h279.383c62.174,0,112.756-50.582,112.756-112.756 S454.313,162.314,392.139,162.314z M15,275.07c0-53.903,43.853-97.756,97.756-97.756c53.902,0,97.755,43.853,97.755,97.756 c0,53.903-43.853,97.756-97.755,97.756C58.853,372.826,15,328.973,15,275.07z M392.139,372.826H168.903 c9.713-5.601,18.514-12.612,26.131-20.745h113.134v-15H206.879c11.768-17.803,18.632-39.119,18.632-62.011 c0-7.313-0.708-14.461-2.044-21.39h108.346v-15H219.484c-2.588-7.569-5.962-14.777-10.021-21.528h200.148v-15H198.686 c-8.404-9.889-18.475-18.318-29.782-24.838h61.895l-0.103-45.246h21.789l30.847,45.246h108.808 c53.903,0,97.756,43.853,97.756,97.756C489.895,328.973,446.042,372.826,392.139,372.826z">
                                </path>
                                <path style="fill:#0F2639;"
                                    d="M147.473,345.395l-6.659-13.441c-8.772,4.346-18.212,6.55-28.058,6.55 c-34.978,0-63.434-28.456-63.434-63.433c0-34.978,28.456-63.434,63.434-63.434c34.977,0,63.433,28.456,63.433,63.434 c0.001,16.417-6.276,32.001-17.673,43.881l10.824,10.385c14.09-14.686,21.849-33.958,21.849-54.266 c0-43.249-35.185-78.434-78.433-78.434c-43.248,0-78.434,35.185-78.434,78.434c0,43.248,35.185,78.433,78.434,78.433 C124.932,353.503,136.612,350.775,147.473,345.395z">
                                </path>
                                <path style="fill:#0F2639;"
                                    d="M68.645,275.07c0,24.323,19.788,44.11,44.111,44.11c24.323,0,44.11-19.788,44.11-44.11 c0-24.323-19.788-44.111-44.11-44.111C88.433,230.959,68.645,250.747,68.645,275.07z M141.866,275.07 c0,16.051-13.059,29.11-29.11,29.11c-16.052,0-29.111-13.059-29.111-29.11c0-16.052,13.059-29.111,29.111-29.111 C128.807,245.959,141.866,259.018,141.866,275.07z">
                                </path>
                                <rect x="354.697" y="238.681" style="fill:#0F2639;" width="105.826" height="15">
                                </rect>
                                <path style="fill:#0F2639;"
                                    d="M368.614,302.482c-16.644,0-30.185,13.541-30.185,30.186h15c0-8.374,6.812-15.186,15.185-15.186 c8.373,0,15.185,6.812,15.185,15.186h15C398.799,316.022,385.258,302.482,368.614,302.482z">
                                </path>
                                <path style="fill:#0F2639;"
                                    d="M368.614,272.73c-16.357,0-31.903,6.662-43.186,18.394h-86v15h92.774l2.246-2.627 c8.564-10.02,21.018-15.767,34.166-15.767c13.148,0,25.602,5.747,34.165,15.767l2.245,2.627h55.498v-15H411.8 C400.518,279.392,384.971,272.73,368.614,272.73z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">WebLog</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li>
                        <a href={{ route('login.index') }}
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Login
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    <!-- Body Content -->
    <div class="container m-auto p-4 max-w-screen-xl">
        @yield('content')
    </div>
    <!-- Footer -->


    <footer class="bg-white dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <span
                    class="hover:underline">Kurodoke™</span>. All Rights Reserved.</span>
        </div>
    </footer>



</body>

</html>
