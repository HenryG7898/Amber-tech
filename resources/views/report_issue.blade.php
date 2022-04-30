@extends('layout.app')

@section('content')
    <head>
        <style>
            .icon::after{
                content: '';
                display: block;
                position: absolute;
                border-top: 23px solid transparent;
                border-bottom: 17px solid transparent;
                border-left: 12px solid #3182ce;
                left: 100%;
                top: 0;
            }
            body{
                height: 100%;
            }
        </style>
    </head>

    <div class="my-5 ">
        <div class="flex justify-center items-center mx-96">
            @if(session()->has('success'))
                <div class="bg-green-200 px-6 py-4 mx-2 my-2 mb-2 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
                    <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                        <path fill="currentColor"
                              d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                        ></path>
                    </svg>
                    <span class="text-green-800 text-center"> {{ session('success') }} </span>
                </div>
            @endif
        </div>
        <div class="text-center">
            <div class=""></div>
            <h2 class="text-blue-700 text-5xl font-bold">Contact Form</h2>
        </div>

        <div class="mx-auto w-3/6 shadow-lg ">
            <form action="{{ url('report') }}" method="post" class="form bg-white p-6 my-5 relative">
                @csrf
                <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
                <h3 class="text-2xl text-gray-900 font-semibold">Send us your complain </h3>
                <div class="flex space-x-5 mt-3">
                    <input type="text" name="first_nm" id="name" placeholder="Your First Name" class="border p-2  w-1/2">
                    @error('first_nm') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                    <input type="text" name="last_nm" id="name" placeholder="Your Last Name" class="border p-2  w-1/2">
                    @error('last_nm') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                    <input type="tel" name="phone_nbr" id="phone_number" placeholder="Your Number" class="border p-2 w-1/2">
                    @error('phone_nbr') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                </div>
                <input type="email" name="email" id="email" placeholder="Your Email" class="border p-2 w-full mt-3">
                @error('email') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                <textarea name="detail" id="describe" cols="10" rows="3" placeholder="Reason For Contact" class="border p-2 mt-3 w-full"></textarea>
                @error('detail') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                <button type="submit" class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">Submit</button>

            </form>
        </div>
    </div>
@endsection
