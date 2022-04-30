@extends('layout.admin')

@section('content')
    <div x-data="{ isOpen: false }">

        <div class="w-full px-8 py-4 mx-auto bg-white shadow-md dark:bg-gray-800">

            <div class="flex items-center justify-between">

            <span class="lg:text-lg text-sm lg:font-medium font-light text-gray-800 dark:text-gray-400">

              Student Dashboard

            </span>
                <div class="space-x-3">
                    <a @click="isOpen =true" class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-indigo-600
                      rounded cursor-pointer hover:bg-indigo-500">

                        Create Parent

                    </a>
                    @if ($data)
                    <a href="{{ url('delete-student/'.$data[0]->id) }}" class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-red-600
                      rounded cursor-pointer">

                        Delete Account

                    </a>
                </div>



            </div>
        </div>
        @if(session()->has('success'))
            <div class="bg-green-200 px-6 py-4 mx-2 my-4 mb-5 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                    <path fill="currentColor"
                          d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                    ></path>
                </svg>
                <span class="text-green-800 text-center"> {{ session('success') }} </span>
            </div>
        @endif

        <div class="  lg:mx-64 fixed top-0 left-0 w-full h-full bg-black bg-opacity-75
                flex items-center shadow-lg "
             x-show="isOpen"
        >

            <section @click.away="isOpen = false"
                     class="w-3/5 p-6 mx-48 bg-white rounded-md shadow-md dark:bg-gray-800">

                <h2 class="text-lg font-semibold text-center text-gray-700 capitalize dark:text-white">New Parent</h2>

                <form method="post" action="{{ url('Add-parent') }}">
                    @csrf
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <label for="firstName" class="inline-block mb-1 font-medium">First name</label>
                            <input
                                type="text"
                                class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                id="firstName"
                                name="first_nm"
                            />
                                @error('first_nm') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>
{{--                        <div>--}}
{{--                            <label for="firstName" class="inline-block mb-1 font-medium">First name</label>--}}
                            <input
                                type="text"
                                class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"

                                name="student_id"
{{--                                placeholder="{{ $data[0]->first_nm }}"--}}
                                value="{{$data[0]->id }}"
                                hidden
                                readonly
                            />
{{--                            @error('first_nm') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror--}}
{{--                        </div>--}}
                        <div>
                            <label for="lastName" class="inline-block mb-1 font-medium">Last name</label>
                            <input
                                type="text"
                                class=" w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                name="last_nm"
                            />
                                @error('last_nm') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                            <input
                                type="text"
                                class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                name="email"
                            />
                                @error('email') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>


                        <div>
                            <label for="DOB" class="inline-block mb-1 font-medium">Date Of Birth</label>
                            <input
                                type="date"
                                class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                id=""
                                name="DOB"
                            />
                                @error('DOB') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="phone_nbr" class="inline-block mb-1 font-medium">Phone Number</label>
                            <input
                                type="text"
                                class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                id=""
                                name="phone_nbr"
                            />
                            @error('phone_nbr') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="gender" class="inline-block mb-1 font-medium">Gender:</label>
                            <select name="gender" id="gender" class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline">
                                <option value="">Please Select Your Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                                @error('gender') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="relation" class="inline-block mb-1 font-medium">Parent/Guardian:</label>
                            <select name="relation" id="relation" class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline">
                                <option value="">Please Select </option>
                                <option value="Mother">Mother</option>
                                <option value="Father">Father</option>
                                <option value="Auntie">Auntie</option>
                                <option value="Uncle">Uncle</option>
                                <option value="Cousin">Cousin</option>
                                <option value="Sister">Sister</option>
                                <option value="Brother">Brother</option>
                            </select>
                                @error('relation') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>

                    </div>

                    <div class="flex justify-end mt-6 space-x-1">
                        <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500
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

                <div class=" flex flex-col p-6 justify-center items-center mb-10 bg-white shadow-md rounded my-6">
                    <div class="border-b text-4xl text-center text-black  mb-5 font-bold">
                        <h1 >Student Information</h1>
                    </div>
                    <div class="grid md:grid-cols-3 text-sm  font-bold">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">First Name:</div>
                            <div class="px-4 py-2">{{$data[0]->first_nm}}</div>
{{--                            <div class="px-4 py-2">{{$data[0]->student->first_nm}}</div>--}}
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Last Name:</div>
                            <div class="px-4 py-2">{{$data[0]->last_nm}}</div>
{{--                            <div class="px-4 py-2">{{$data[0]->student->last_nm}}</div>--}}
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Gender:</div>
                            <div class="px-4 py-2">{{$data[0]->gender}}</div>
{{--                            <div class="px-4 py-2">{{$data[0]->student->gender}}</div>--}}
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Phone Number:</div>
                            <div class="px-4 py-2">{{$data[0]->phone_nbr}}</div>
{{--                            <div class="px-4 py-2">{{$data[0]->student->phone_nbr}}</div>--}}
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Role:</div>
                            <div class="px-4 py-2">{{$data[0]->user_type}}</div>
{{--                            <div class="px-4 py-2">{{$data[0]->student->user_type}}</div>--}}
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Date of Birth:</div>
                            <div class="px-4 py-2">{{$data[0]->dob}}</div>
{{--                            <div class="px-4 py-2">{{$data[0]->student->dob}}</div>--}}
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 ">Email:</div>
                            <div class="px-4 py-2">{{$data[0]->email}}</div>
{{--                            <div class="px-4 py-2">{{$data[0]->student->email}}</div>--}}
                        </div>
                    </div>
                </div>
        </div>


        <div class="w-11/12 mx-auto">

            <div class="bg-white shadow-md rounded my-6">
                <div class="border-b text-4xl text-center text-black  mb-5 font-bold">
                    <h1 >Parent Information</h1>
                </div>
                <table class="text-left w-full border-collapse">
                    <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">First Name</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Last Name</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Date Of Birth</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Gender</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Contact Number</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Relationship</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">action</th>

                    </tr>
                    </thead>
{{--@if ($data[0])--}}
                        <tr>
                            @foreach($parent as $value)
{{--                                {{ dd($value->parent) }}--}}
{{--                                @if ($value->student_id === $value->student->id )--}}
                                    <td class="py-4 px-6 border-b border-grey-light">{{($value->first_nm)}}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{$value->last_nm}}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{$value->DOB}}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{$value->gender}}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{$value->phone_nbr}}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{$value->relation}}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">
                                        <a href="{{ url('delete-parent/'.$value->id) }}" class="btn btn-primary p-2 text-white rounded font-bold bg-black hover:bg-red-700 hover:text-black" >Delete</a>

                                    </td>

{{--                                @else--}}
{{--                                    <h2 class="text-5xl font-bold mb-10 text-gray-800 text-center">Sorry! No Parent Available</h2>--}}

{{--                    @endif--}}

{{--                    <div class="text-white bg-black">--}}
{{--                        {{ $data->links() }}--}}
{{--                    </div>--}}
                        </tr>

                        @endforeach



                </table>
            </div>
            @endif

        </div>

    </div>
@endsection
