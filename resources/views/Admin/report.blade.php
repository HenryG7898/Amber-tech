@extends('layout.admin')

@section('content')

    <div class="text-gray-900 ">
        <div class="p-4 ">
            <h1 class="text-3xl text-center">
                User Report
            </h1>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                <tr class="border-b">
                    <th class="text-center p-3 px-5">Name</th>
                    <th class="text-center p-3 px-5">Detail</th>
                    <th class="text-center p-3 px-5">Action</th>
                </tr>
    @foreach ($report as $item)
        <tr class="border-b hover:bg-indigo-700 hover:text-white font-bold">
            <td class="px-10 py-5 p-3 text-center">{{ $item->student->first_nm.' '.$item->student->last_nm }}</td>
            <td class="-p-10 mx-26 px-28">{{ $item->detials }}</td>
            <td class="p-3 px-5 my-4 flex justify-center"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
        </tr>
    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
