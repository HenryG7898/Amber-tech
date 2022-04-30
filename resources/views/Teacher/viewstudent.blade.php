@extends('layout.teacher')

@section('content')
    <div>


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



        @if ($data)
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
