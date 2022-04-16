@extends('layout.app')

@section('content')
    <div>
        <div class="bg-white dark:bg-gray-900">
            <div class="flex justify-center h-screen">
                <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(https://img.washingtonpost.com/rf/image_1484w/2010-2019/WashingtonPost/2017/07/04/Education/Images/JL_581.jpg?uuid=qANxolUqEeeiBK1wZGH6Tw)">
                    <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                        <div>
                            <h2 class="text-4xl font-bold text-white">Amber <span class="text-orange-600">Tech</span></h2>

                            <p class="max-w-xl mt-3 text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In autem ipsa, nulla laboriosam dolores, repellendus perferendis libero suscipit nam temporibus molestiae</p>
                            <p class="mt-6 text-lg  text-gray-300">Having Trouble Signing In? <a href="{{ url('Contact') }}" class="text-blue-500 focus:outline-none focus:underline hover:underline">Click Here</a>.</p>

                        </div>
                    </div>
                </div>

                <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">

                    <div class="flex-1">
                        @if(session()->has('error'))
                            <div class="w-full text-white bg-red-500">
                                <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                                    <div class="flex">
                                        <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                                            <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"></path>
                                        </svg>

                                        <p class="mx-3">{{ session('messages') }}</p>
                                    </div>

                                    <button class="p-1 transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <div class="text-center">
                            <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">Amber Tech</h2>
                            <p class="mt-3 text-gray-500 dark:text-gray-300">Sign in to access your account</p>
                        </div>

                        <div class="mt-8">
                            <form method="post" action="{{ url('login') }}">
                                @csrf
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-bold text-black">Email:</label>
                                    <input type="email" name="email" id="email"  class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    <span class="text-red-700 text-2xs">@error('email') {{$message}} @enderror</span>

                                </div>

                                <div class="mt-6">
                                    <div class="flex justify-between mb-2">
                                        <label for="password" class="text-sm font-bold text-black">Password:</label>
                                        <a href="#" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot password?</a>
                                    </div>

                                    <input type="password" name="password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    <span class="text-red-700 text-2xs">@error('password') {{$message}} @enderror</span>

                                </div>

                                <div class="mt-6">
                                    <button type="submit"
                                            class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                        Sign in
                                    </button>
                                </div>

                            </form>

                            <p class="mt-6 text-sm text-center text-black">Don't have an account yet? <a href="{{ url('register') }}" class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
                        </div>
                    </div>
                </div>
                    </div>
        </div>
    </div>

@endsection
