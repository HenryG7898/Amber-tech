@extends('layout.admin')

@section('content')
    <section class="text-gray-600 body-font h-screen overflow-y-auto">
        <div class="container px-5  mx-auto max-w-7x1">
            <div class="flex flex-wrap w-full mb-4 p-4">
                <div class="w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-4xl text-5xl font-medium font-bold title-font mb-2 text-gray-900">Profile Cards</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                @foreach($card as $cards)
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="bg-white hover:bg-orange-600 hover:text-white p-6 rounded-lg">
                        <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="{{$cards->profile_img}}" alt="Image Size 720x400">
                        <h3 class="tracking-widest text-black text-xs font-bold title-font">{{$cards->user_type}}</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{ $cards->first_nm.' '.$cards->last_nm }}</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>

                @endforeach



            </div>
        </div>
    </section>
@endsection
