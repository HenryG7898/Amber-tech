@extends('layout.app')

@section('content')
    <div class="relative">
        <img src="https://library-assets.cappex.com/GreekLifeStudents.jpg" class="absolute inset-0 object-cover w-full h-full" alt="" />
        <div class="relative bg-gray-900 bg-opacity-75">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col items-center justify-between xl:flex-row">
                    <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                            Welcome To
                            Amber <span class="text-orange-600">Tech</span>
                        </h2>
                        <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus eaque illo, laudantium minus nemo nobis temporibus ut. Aliquam aperiam delectus ex fugiat modi natus officiis, placeat ratione similique voluptatibus? Nemo!
                        </p>
                        <a href="/" aria-label="" class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-orange-600 hover:text-orange-500">
                            Learn more
                            <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                                <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="w-full  xl:px-8 xl:w-10/12">
                        <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                            <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                                Sign up for Class
                            </h3>
                            <form method="post" action{{ url("register") }}>
                                @csrf
                                <div class="grid grid-cols-2 space-x-5">
                                <div class="ml-5">
                                    <label for="firstName" class="inline-block mb-1 font-medium">First name</label>
                                    <input
                                        type="text"
                                        class=" w-full h-12 px-4  mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="firstName"
                                        name="first_nm"
                                    />
                                    <span class="text-red-700 text-2xs">@error('first_nm') {{$message}} @enderror</span>

                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="lastName" class="inline-block mb-1 font-medium">Last name</label>
                                    <input
                                        type="text"
                                        class=" w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="lastName"
                                        name="last_nm"
                                    />
                                    <span class="text-red-700 text-2xs">@error('last_nm') {{$message}} @enderror</span>

                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                                    <input
                                        type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="email"
                                        name="email"
                                    />
                                    <span class="text-red-700 text-2xs">@error('email') {{$message}} @enderror</span>

                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="DOB" class="inline-block mb-1 font-medium">Date Of Birth</label>
                                    <input
                                        type="date"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id=""
                                        name="dob"
                                    />
                                    <span class="text-red-700 text-2xs">@error('dob') {{$message}} @enderror</span>

                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="gender" class="inline-block mb-1 font-medium">Gender:</label>
                                    <select name="gender" id="gender" class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline">
                                        <option value="">Please Select Your Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span class="text-red-700 text-2xs">@error('gender') {{$message}} @enderror</span>

                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="phone_number" class="inline-block mb-1 font-medium">Phone Number</label>
                                    <input

                                        type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="phone_number"
                                        name="phone_nbr"
                                    />
                                    <span class="text-red-700 text-2xs">@error('phone_nbr') {{$message}} @enderror</span>

                                </div>
{{--                                <div class="mb-1 sm:mb-2">--}}
{{--                                    <label for="email" class="inline-block mb-1 font-medium">E-mail</label>--}}
{{--                                    <input--}}
{{--                                        placeholder="john.doe@example.org"--}}
{{--                                        required=""--}}
{{--                                        type="text"--}}
{{--                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"--}}
{{--                                        id="email"--}}
{{--                                        name="email"--}}
{{--                                    />--}}
{{--                                </div>--}}
                                <div class="mb-1 sm:mb-2">
                                    <label for="password" class="inline-block mb-1 font-medium">Password</label>
                                    <input
                                        placeholder="*********"

                                        type="password"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="password"
                                        name="password"
                                    />
                                    <span class="text-red-700 text-2xs">@error('password') {{$message}} @enderror</span>

                                </div>
                                </div>
                                <div class="mt-4 mb-2 sm:mb-4">
                                    <button
                                        type="submit"
                                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-600 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                                    >
                                        Sign Up
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
