<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amber Tech</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div id="app" class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">

               @guest
                    <a href="{{ url('/') }}">
                        <span class="sr-only">Workflow</span>
                        <span class="text-3xl font-bold text-orange-600">AMBER TECH</span>
                    </a>
               @endguest
                @auth
                       <a href="{{ url('teacher-dashboard') }}">
                           <span class="sr-only">Workflow</span>
                           <span class="text-3xl font-bold text-orange-600">AMBER TECH</span>
                       </a>
                @endauth

            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false" @click="menu = !menu">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
                @auth

                    <a href="{{ url('class-schedule') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Class Schedule
                    </a>
                    <a href="{{ url('teacher-profile') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Profile
                    </a>
                    <a href="{{ url('student-list') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Student list
                    </a>
            </nav>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">

                <form method="post" action="{{ url('logout') }}"
                      class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
            @endauth
        </div>
    </div>
</div>

<!-- body -->
<div class="    ">
    @yield('content')
</div>
</body>
</html>
