@extends('layout.app')

@section('content')
    <div
        class="overflow-hidden text-white lg:grid bg-gradient-to-r from-white to-orange-600 lg:grid-cols-2 lg:items-center"
    >
        <div class="p-12 text-center sm:p-16 lg:p-20 lg:text-left">
            <div class="max-w-lg mx-auto lg:ml-0 lg:pt-6">
                <p class="text-3xl text-black font-bold sm:text-4xl">
                    Welcome To <span class="text-orange-600">Amber Technical</span>
                </p>

                <p class="mt-4 text-black font-bold">
                    Dear Student, please use the buttons above to navigate to other pages!
                </p>
            </div>
        </div>

        <div class="lg:pt-24">
            <div class="relative w-full h-64 sm:h-96 lg:h-[500px]">
                <img
                    class="absolute inset-0 object-cover w-full h-full lg:rounded-tl-3xl"
                    src="https://www.jseza.com/wp-content/uploads/2021/03/Michael-McNaughton.jpg"
                    alt=""
                />
            </div>
        </div>
    </div>
@endsection
