@extends('layout.teacher')

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
                    Dear Teacher, Please use the buttons above to navigate to other pages!
                </p>
            </div>
        </div>

        <div class="lg:pt-24">
            <div class="relative w-full h-64 sm:h-96 lg:h-[500px]">
                <img
                    class="absolute inset-0 object-cover w-full h-full lg:rounded-tl-3xl"
                    src="https://jamaica-gleaner.com/sites/default/files/styles/jg_article_image/public/media/article_images/2021/11/22/1538664/5073605.jpg?itok=ohyrujM6"
                    alt=""
                />
            </div>
        </div>
    </div>
@endsection
