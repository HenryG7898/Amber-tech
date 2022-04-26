<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Roboto&display=swap" rel="stylesheet">
    @livewireStyles
</head>
<body>
<div class="flex h-screen overflow-hidden bg-white rounded-lg">
    <div class="hidden md:flex md:flex-shrink-0">
        <div class="flex flex-col w-64">
            <div class="
              flex flex-col flex-grow
              pt-5
              overflow-y-auto
              bg-orange-600
              border-r
            ">
                <div class="flex flex-col items-center flex-shrink-0 px-4">
                    <a href="{{ url('dashboard') }}" class="px-8 text-left focus:outline-none">
                        <h2 class="
                    block
                    p-2
                    text-xl
                    font-medium
                    tracking-tighter
                    text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    cursor-pointer
                    hover:text-white
                  "> Amber Tech Dashboard </h2>
                    </a>
                    <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
{{--                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">--}}
{{--                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>--}}
{{--                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>--}}
{{--                        </svg>--}}
                    </button>
                </div>
                <div class="flex flex-col flex-grow px-4 mt-5">
                    <nav class="flex-1 space-y-1 bg-orange-600">
                        <ul>

{{--                            <li>--}}
{{--                                <a class="--}}
{{--                        inline-flex--}}
{{--                        items-center--}}
{{--                        w-full--}}
{{--                        px-4--}}
{{--                        py-2--}}
{{--                        mt-1--}}
{{--                        text-base text-white--}}
{{--                        transition--}}
{{--                        duration-500--}}
{{--                        ease-in-out--}}
{{--                        transform--}}
{{--                        border-indigo-800--}}
{{--                        rounded-lg--}}
{{--                        hover:border-indigo-800--}}
{{--                        focus:shadow-outline--}}
{{--                        hover:bg-indigo-600--}}
{{--                      " href="#">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>--}}
{{--                                    </svg>--}}
{{--                                    <span class="ml-4">Reports</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li>
                                <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-white
                        transition
                        duration-500
                        ease-in-out
                        transform
                        border-indigo-800
                        rounded-lg
                        hover:border-indigo-800
                        focus:shadow-outline
                        hover:bg-indigo-600
                      " href="{{ url('dashboard') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <span class="ml-4">User</span>
                                </a>
                            </li>
                            <li>
                                <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-white
                        transition
                        duration-500
                        ease-in-out
                        transform
                        border-indigo-800
                        rounded-lg
                        hover:border-indigo-800
                        focus:shadow-outline
                        hover:bg-indigo-600
                      " white="" 70="" href="{{ url('review') }}">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>--}}
{{--                                    </svg>--}}
                                    <span class="ml-4"> Overview</span>
                                </a>
                            </li>
{{--                            <li>--}}
{{--                                <a class="--}}
{{--                        inline-flex--}}
{{--                        items-center--}}
{{--                        w-full--}}
{{--                        px-4--}}
{{--                        py-2--}}
{{--                        mt-1--}}
{{--                        text-base text-white--}}
{{--                        transition--}}
{{--                        duration-500--}}
{{--                        ease-in-out--}}
{{--                        transform--}}
{{--                        border-indigo-800--}}
{{--                        rounded-lg--}}
{{--                        hover:border-indigo-800--}}
{{--                        focus:shadow-outline--}}
{{--                        hover:bg-indigo-600--}}
{{--                      " href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>--}}
{{--                                    </svg>--}}
{{--                                    <span class="ml-4">Settings</span></a>--}}
{{--                            </li>--}}
                        </ul>
{{--                        <p class="px-4 pt-4 font-medium text-white uppercase">Shortcuts</p>--}}

                        <ul>
                            <li>
                                <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-white
                        transition
                        duration-500
                        ease-in-out
                        transform
                        border-indigo-800
                        rounded-lg
                        hover:border-indigo-800
                        focus:shadow-outline
                        hover:bg-indigo-600
                      " white="" 70="" href="{{ url('profile-card') }}">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>--}}
{{--                                    </svg>--}}
                                    <span class="ml-4">Profile Cards</span>
                                </a>
                            </li>
                            <div class="my-5"></div>
                            <li>
                                <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-white
                        transition
                        duration-500
                        ease-in-out
                        transform
                        border-indigo-800
                        rounded-lg
                        hover:border-indigo-800
                        focus:shadow-outline
                        hover:bg-indigo-600
                      " white="" 70="" href="{{ url('report') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <span class="ml-4"> Reports</span>
                                </a>
                            </li>
                            <li>
                                <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-white
                        transition
                        duration-500
                        ease-in-out
                        transform
                        border-indigo-800
                        rounded-lg
                        hover:border-indigo-800
                        focus:shadow-outline
                        hover:bg-indigo-600
                      " white="" 70="" href="{{ url('create-student') }}">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>--}}
{{--                                    </svg>--}}
                                    <span class="ml-4"> Add Student</span>
                                </a>
                            </li>

                            <li>
                                <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-white
                        transition
                        duration-500
                        ease-in-out
                        transform
                        border-indigo-800
                        rounded-lg
                        hover:border-indigo-800
                        focus:shadow-outline
                        hover:bg-indigo-600
                      " white="" 70="" href="{{ url('create-teacher') }}">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>--}}
{{--                                    </svg>--}}
                                    <span class="ml-4">Add Teacher</span>
                                </a>
                            </li>
                            <div class="my-5"></div>
                            <li>
                                <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-white
                        transition
                        duration-500
                        ease-in-out
                        transform
                        border-indigo-800
                        rounded-lg
                        hover:border-indigo-800
                        focus:shadow-outline
                        hover:bg-indigo-600
                      " white="" 70="" href="{{ url('create-subject') }}">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>--}}
{{--                                    </svg>--}}
                                    <span class="ml-4">Add Subject</span>
                                </a>
                            </li>
                            <li>
                                <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-white
                        transition
                        duration-500
                        ease-in-out
                        transform
                        border-indigo-800
                        rounded-lg
                        hover:border-indigo-800
                        focus:shadow-outline
                        hover:bg-indigo-600
                      " white="" 70="" href="{{ url('Assign-teacher') }}">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>--}}
{{--                                    </svg>--}}
                                    <span class="ml-4"> Assign Teacher To Class</span>
                                </a>
                            </li>
                            <li>
                                <a class="
                        inline-flex
                        items-center
                        w-full
                        px-4
                        py-2
                        mt-1
                        text-base text-white
                        transition
                        duration-500
                        ease-in-out
                        transform
                        border-indigo-800
                        rounded-lg
                        hover:border-indigo-800
                        focus:shadow-outline
                        hover:bg-indigo-600
                      " white="" 70="" href="{{ url('Assign-student') }}">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>--}}
{{--                                    </svg>--}}
                                    <span class="ml-4">Add Student To Class</span>
                                </a>
                            </li>
                            <li>
                                <form method="post" action="{{ url('logout') }}" white="" 70="">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>--}}
{{--                                    </svg>--}}
                                    @csrf
                                    <button type="submit" class="
                                            inline-flex
                                            items-center
                                            w-full
                                            px-4
                                            py-2
                                            mt-1
                                            text-base text-white
                                            transition
                                            duration-500
                                            ease-in-out
                                            transform
                                            border-indigo-800
                                            rounded-lg
                                            hover:border-indigo-800
                                            focus:shadow-outline
                                            hover:bg-indigo-600
                                    ">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="flex flex-shrink-0 p-4 px-4 bg-indigo-600">
                    <a href="#" class="flex-shrink-0 block w-full group">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block rounded-full h-9 w-9" src="{{ Auth::user()->profile_img }}" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-white">{{ Auth()->user()->first_nm.' '.Auth()->user()->last_nm }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col flex-1 w-0 overflow-hidden">
{{--        <div class="w-full px-8 py-4 mx-auto bg-white shadow-md dark:bg-gray-800">--}}
{{-- <span class="lg:text-lg text-sm lg:font-medium font-light text-gray-800 dark:text-gray-400">--}}

{{--              Amber Tech Dashboard--}}

{{--            </span>--}}
{{--        </div>--}}
        @yield('content')
    </div>
</div>

<script>
    var swiper = new Swiper('.mySwiper', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
@livewireScripts
</body>
</html>
