@extends('layout.admin')

@section('content')
    <div class="w-full px-8 py-4 mx-auto bg-white shadow-md dark:bg-gray-800">

        <div class="flex items-center justify-between">

            <span class="lg:text-lg text-sm lg:font-medium font-light text-gray-800 dark:text-gray-400">
              Amber Tech Dashboard
            </span>
        </div>
    </div>
    @if(session()->has('success'))
    <div class="mx-80">
        <div class="bg-green-200 px-6 py-4 mx-2 my-4 mb-5 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                <path fill="currentColor"
                      d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                ></path>
            </svg>
            <span class="text-green-800 text-center"> {{ session('success') }} </span>
        </div>
    </div>

    @endif
    <div class="text-gray-900 my-5">
        <div class="p-4 ">
            <h1 class="text-3xl text-center">
                User Report
            </h1>
        </div>
        <div class="grid grid-cols-2 items-center justify-center my-2">
            @foreach ($report as $item)
            <div class="mx-10 my-5 p-5 bg-white flex items-center space-x-2 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
                <div class="px-4">
                    <h1 class="text-xl font-bold text-gray-700 mb-2">{{ $item->first_nm.' '.$item->last_nm }}</h1>
                        <p class="text-gray-601 w-80 text-sm">{{ $item->email }}</p>
                        <p class="text-gray-601 w-80 text-sm">{{ $item->phone_nbr }}</p>
                        <p class="text-gray-601 w-80 text-sm">{{ $item->detail }}</p>
                </div>
                <a href="{{ url('deletelist/'.$item->id) }}" class="btn btn-primary bg-red-600 p-2 text-white rounded bg-black  hover:text-black">Delete</a>
            </div>
            @endforeach
        </div>

    </div>
@endsection
