@extends('layout.teacher')

@section('content')
    <section
        class="w-11/12 md:w-3/5 p-6 mx-auto bg-white rounded-md">
        <div>
            @if(session()->has('success'))
                <div class="flex w-full max-w-sm mx-auto overflow-hidden mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center justify-center w-12 bg-emerald-500">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
                        </svg>
                    </div>

                    <div class="px-4 py-2 -mx-3">
                        <div class="mx-3">
                            <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
                            <p class="text-sm text-gray-600 dark:text-gray-200">Your account was registered!</p>
                        </div>
                    </div>
                </div>
            @endif
            <div>
                <h2 class="text-4xl font-bold mb-10 text-gray-800 text-center">Edit Student</h2>

                <form class="space-y-2 space-x-1 " action="{{ url('student-update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-3 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">First Name</label>
                            <input type="hidden" value="{{ $data->id }}" name="id">
                            <input type="text" name="first_nm" value="{{ $data->first_nm }}" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                            {{--                            @error('first_nm') <span class="error text-red-600">{{ $message }}</span> @enderror--}}
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Last Name</label>
                            <input type="text" name="last_nm" value="{{ $data->last_nm }}" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                            {{--                            @error('last_nm') <span class="error text-red-600">{{ $message }}</span> @enderror--}}
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Date of Birth</label>
                            <input type="date" name="dob" value="{{ $data->dob }}"  class="w-full border-2 border-gray-200 p-2.5 rounded outline-none focus:border-purple-500">
                            {{--                            @error('dob') <span class="error text-red-600">{{ $message }}</span> @enderror--}}
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Telephone Number</label>
                            <input type="text" name="phone_nbr" value="{{ $data->phone_nbr }}" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                            {{--                            @error('phone_nbr') <span class="error text-red-600">{{ $message }}</span> @enderror--}}
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Gender</label>
                            <select  id="gender" name="gender" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                @if ($data->gender === "Male")
                                    <option selected value="Male">Male</option>
                                    <option value="Female">Female</option>

                                @else
                                    <option selected value="Female">Female</option>
                                    <option value="Male">Male</option>

                                @endif
                            </select>
                            {{--                            @error('gender') <span class="error text-red-600">{{ $message }}</span> @enderror--}}

                        </div>

                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Email</label>
                            <input type="email" name="email" value="{{ $data->email }}" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                            {{--                            @error('email') <span class="error text-red-600">{{ $message }}</span> @enderror--}}
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Profile Image</label>
                            <input type="file" name="profile_img" value="{{ $data->profile_img }}" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                                        @error('profile_img') <span class="error text-red-600">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="flex justify-end mt-6 space-x-1">
                        <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500
                                   rounded-md hover:bg-green-600 focus:outline-none focus:bg-gray-600">
                            Update
                        </button>
                        <a href="{{ url('student-list') }}" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-500
                                   rounded-md hover:bg-red-600 focus:outline-none focus:bg-gray-600">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
