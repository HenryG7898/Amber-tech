@extends('layout.admin')

@section('content')
    <main class="relative flex-1 overflow-y-auto focus:outline-none">
        <div class="w-4/5 mx-auto my-20 bg-white">
            <div id="slider" class="swiper-container w-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-cover bg-center shadow-lg" >
                        <div class="container mx-auto px-6 md:px-20 py-6">
                            <div class="p-8 text-sm text-gray-800">
                                <h1 class="text-4xl text-gray-700 font-bold leading-none mb-8 text-center">Student List</h1>
                                <table class="border w-full text-center shadow-sm">
                                    <thead>
                                    <tr>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">First Name</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Last Name</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Email</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Date Of Birth</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Phone Number</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Gender</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="border rounded bg-white">
                                    {{--            @foreach($student as $trainee)--}}
                                    {{--                @if ($trainee->user_type === 'Parent')--}}
                                    {{--                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->First_nm }}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->Last_nm }}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->email }}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->dob }}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">(876) {{$trainee->telephone}}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->gender }}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">--}}
                                    {{--                            <a href="{{ url('editstudent/'.$trainee->id) }}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >Edit</a>--}}
                                    {{--                            <a href="" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >View</a>--}}
                                    {{--                        </td>--}}
                                    {{--                    </tr>--}}
                                    {{--                @endif--}}
                                    {{--            @endforeach--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-cover bg-center shadow-lg" >
                        <div class="container mx-auto px-6 md:px-20 py-6">
                            <div class="p-8 text-sm text-gray-800">
                                <h1 class="text-4xl text-gray-700 font-bold leading-none mb-8 text-center">Teacher List</h1>
                                <table class="border w-full text-center shadow-sm">
                                    <thead>
                                    <tr>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">First Name</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Last Name</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Email</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Date Of Birth</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Phone Number</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Gender</th>
                                        <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="border rounded bg-white">
                                    {{--            @foreach($teacher as $trainee)--}}
                                    {{--                @if ($trainee->user_type === 'Parent')--}}
                                    {{--                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->First_nm }}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->Last_nm }}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->email }}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->dob }}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">(876) {{$trainee->telephone}}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">{{ $trainee->gender }}</td>--}}
                                    {{--                        <td class="w-full lg:w-auto p-3 text-gray-800 border-b text-center block lg:table-cell relative lg:static">--}}
                                    {{--                            <a href="{{ url('editstudent/'.$trainee->id) }}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >Edit</a>--}}
                                    {{--                            <a href="" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >View</a>--}}
                                    {{--                        </td>--}}
                                    {{--                    </tr>--}}
                                    {{--                @endif--}}
                                    {{--            @endforeach--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="hidden md:flex swiper-button-prev bg-white w-16 h-16 text-xs rounded-full text-pink-500"></div>
                <div class="hidden md:flex swiper-button-next bg-white w-16 h-16 text-xs rounded-full text-pink-500"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </main>
@endsection
