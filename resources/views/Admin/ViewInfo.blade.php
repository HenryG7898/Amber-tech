@extends('layout.admin')

@section('content')
    <div x-data="{ isOpen: false }">

        <div class="w-full px-8 py-4 mx-auto bg-white shadow-md dark:bg-gray-800">

            <div class="flex items-center justify-between">

            <span class="lg:text-lg text-sm lg:font-medium font-light text-gray-800 dark:text-gray-400">

                Associate Details

            </span>

                <a @click="isOpen =true" class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-indigo-600
                      rounded cursor-pointer hover:bg-indigo-500">

                    Create Associate

                </a>

            </div>
        </div>

        <div class="  lg:mx-64 fixed top-0 left-0 w-full h-full bg-black bg-opacity-75
                flex items-center shadow-lg "
             x-show="isOpen"
        >

            <section @click.away="isOpen = false"
                     class="w-3/5 p-6 mx-48 bg-white rounded-md shadow-md dark:bg-gray-800">
                @if (session()->has('error'))
                    <div class="bg-red-200 px-6 py-4 mx-2 -my-5 mb-5 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                        <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                            <path fill="currentColor" d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z"></path>
                        </svg>
                        <span class="text-red-800"> {{ session('error') }} </span>
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="bg-green-200 px-6 py-4 mx-2 my-4 mb-5 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                        <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                            <path fill="currentColor"
                                  d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                            ></path>
                        </svg>
                        <span class="text-green-800"> {{ session('success') }} </span>
                    </div>
                @endif
                <h2 class="text-lg font-semibold text-center text-gray-700 capitalize dark:text-white">New Sales Associate</h2>

                <form>
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>



                                @error('first_name') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror


                        </div>

                        <div>


                                @error('last_name') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror

                        </div>

                        <div>



                                @error('email') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror


                        </div>


                        <div>



                                @error('name') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror


                        </div>

                        <div>



                                @error('password') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror

                        </div>

                    </div>

                    <div class="flex justify-end mt-6 space-x-1">
                        <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500
                                   rounded-md hover:bg-green-600 focus:outline-none focus:bg-gray-600">
                            Save
                        </button>
                        <button @click.prevent="isOpen = false"
                                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-500
                            rounded-md hover:bg-red-600 focus:outline-none focus:bg-gray-600">
                            Close
                        </button>
                    </div>
                </form>
            </section>

        </div>


        <div class="w-11/12 mx-auto my-10">
            @if ($data)
                <div class=" flex flex-col p-6 justify-center items-center mb-10 bg-white shadow-md rounded my-6">
                    <div class="border-b text-4xl text-center text-black  mb-5 font-bold">
                        <h1 >Student Information</h1>
                    </div>
                    <div class="grid md:grid-cols-3 text-sm  font-bold">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">First Name:</div>
                            <div class="px-4 py-2">{{$data[0]->first_nm}}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Last Name:</div>
                            <div class="px-4 py-2">{{$data[0]->last_nm}}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Gender:</div>
                            <div class="px-4 py-2">{{$data[0]->gender}}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Phone Number:</div>
                            <div class="px-4 py-2">{{$data[0]->phone_nbr}}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Role:</div>
                            <div class="px-4 py-2">{{$data[0]->user_type}}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Date of Birth:</div>
                            <div class="px-4 py-2">{{$data[0]->dob}}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Email:</div>
                            <div class="px-4 py-2">{{$data[0]->email}}</div>
                        </div>
                    </div>
                </div>
        </div>
{{--        <div class="w-2/3 mx-auto">--}}
{{--            <div class="bg-white shadow-md rounded my-6">--}}
{{--                <table class="text-left w-full border-collapse">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Subject</th>--}}
{{--                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Cost for Subject</th>--}}
{{--                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Year of Exam</th>--}}
{{--                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Status</th>--}}
{{--                        @if ($data[0]->status === 0)--}}
{{--                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>--}}
{{--                            --}}{{--                            @elseif($data[0]->status == )--}}
{{--                            --}}{{--                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>--}}
{{--                            --}}{{--                        @else--}}
{{--                            --}}{{--                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>--}}

{{--                        @endif--}}
{{--                    </tr>--}}
{{--                    </thead>--}}


{{--                    @foreach($data as $value)--}}
{{--                        --}}
{{--                    @endforeach--}}
{{--                    <div class="text-white bg-black">--}}
{{--                        {{ $data->links() }}--}}
{{--                    </div>--}}
{{--                    @else--}}
{{--                        <h2 class="text-5xl font-bold mb-10 text-gray-800 text-center">Sorry! No Student Available</h2>--}}


{{--                </table>--}}
{{--            </div>--}}
            @endif

{{--        </div>--}}

    </div>
@endsection
