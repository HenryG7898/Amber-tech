@extends('layout.admin')

@section('content')
    <main class="relative flex-1 overflow-y-auto focus:outline-none">
        <div class="w-full px-8 py-4 mx-auto bg-white shadow-md dark:bg-gray-800">

            <div class="flex items-center justify-between">

            <span class="lg:text-lg text-sm lg:font-medium font-light text-gray-800 dark:text-gray-400">
              Amber Tech Dashboard
            </span>
            </div>
        </div>
        <div class="w-11/12 mx-auto my-10 bg-white">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">


                        <div class="p-8 text-sm text-gray-800">
                            <h1 class="text-4xl text-gray-700 font-bold leading-none mb-5 text-center">Student List</h1>
                            <table class="border w-full text-center shadow-sm">
                                <thead>
                                <tr>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">First Name
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Last Name
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Email</th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Date Of
                                        Birth
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Phone
                                        Number
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Gender</th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Action</th>
                                </tr>
                                </thead>
                                <tbody class="border rounded bg-white">
                                @foreach($student as $trainee)
                                    @if ($trainee->user_type === 'student')
                                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                            {{--                                            <td class=""><img class="object-cover w-full h-full rounded-full" src="{{ $trainee->profile_img }}" alt="" loading="lazy" />--}}
                                            {{--                                            </td>--}}
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->first_nm }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->last_nm }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->email }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->dob }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{$trainee->phone_nbr}}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->gender }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">
                                                <a href="{{ url('Edit-student/'.$trainee->id) }}"
                                                   class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Edit</a>
                                                <a href="{{ url('ViewStudent/'. $trainee->id) }}"
                                                   class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">View</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="swiper-slide">
                        <div class="p-8 text-sm text-gray-800">
                            <h1 class="text-4xl text-gray-700 font-bold leading-none mb-5 text-center">Teacher List</h1>
                            <table class="border w-full text-center shadow-sm">
                                <thead>
                                <tr>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">First Name
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Last Name
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Email</th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Date Of
                                        Birth
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Phone
                                        Number
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Gender</th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Action</th>
                                </tr>
                                </thead>
                                <tbody class="border rounded bg-white">
                                @foreach($student as $trainee)
                                    @if ($trainee->user_type === 'Teacher')
                                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->first_nm }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->last_nm }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->email }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->dob }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{$trainee->phone_nbr}}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->gender }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">
                                                <a href="{{ url('Edit-student/'.$trainee->id) }}"
                                                   class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Edit</a>
                                                <a href=""
                                                   class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">View</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="p-8 text-sm text-gray-800">
                            <h1 class="text-4xl text-gray-700 font-bold leading-none mb-5 text-center">Administrative
                                List</h1>
                            <table class="border w-full text-center shadow-sm">
                                <thead>
                                <tr>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">First Name
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Last Name
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Email</th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Date Of
                                        Birth
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Phone
                                        Number
                                    </th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Gender</th>
                                    <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Action</th>
                                </tr>
                                </thead>
                                <tbody class="border rounded bg-white">
                                @foreach($student as $trainee)
                                    @if ($trainee->user_type === 'Admin')
                                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->first_nm }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->last_nm }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->email }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->dob }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{$trainee->phone_nbr}}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->gender }}</td>
                                            <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">
                                                <a href="{{ url('Edit-student/'.$trainee->id) }}"
                                                   class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Edit</a>
                                                <a href=""
                                                   class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">View</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img
                            class="object-cover w-full h-96"
                            src="https://source.unsplash.com/collection/190728/3000x900"
                            alt="image"
                        />
                    </div>
                </div>

                <div id="slider" class="swiper-container w-full">
                    <div
                        class="hidden md:flex swiper-button-prev -mx-7 w-16 h-16 text-xs rounded-full text-pink-500"></div>
                    <div
                        class="hidden md:flex swiper-button-next -mx-7 w-16 h-16 text-xs rounded-full text-pink-500"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
