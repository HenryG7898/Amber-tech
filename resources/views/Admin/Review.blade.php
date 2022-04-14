@extends('layout.admin')

@section('content')
    <div class="p-8 text-sm text-gray-800 overflow-y-auto">
        <h1 class="text-4xl text-gray-700 font-bold leading-none mb-8 text-center">Assign Class</h1>
        <table class="border w-full text-center shadow-sm">
            <thead>
            <tr>
                <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Teacher Name</th>
                <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Last Name</th>
                <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Email</th>
                <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Class Name</th>
{{--                <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Phone Number</th>--}}
{{--                <th class="p-3 text-xs text-gray-900 uppercase font-bold tracking-wide">Gender</th>--}}
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
@endsection
