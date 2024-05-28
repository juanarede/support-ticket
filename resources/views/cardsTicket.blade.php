@extends('layouts.homeLayout')

@section('content')

<section class="service container mx-auto py-8 px-6 h-auto">
    <div>
        <h2 class="text-black font-bold text-2xl uppercase relative h-auto w-full pb-1 text-center ">
            Services <span class="text-red-500">.</span>
        </h2>
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-5">
            <div class="bg-gray-50 p-4 transition-all my-5 rounded flex flex-col justify-start items-start hover:shadow-xl">
                <div class="icon text-6xl pb-4 text-red-500">
                    <FaFontAwesomeFlag />
                </div>
                <div class="desc">
                    <h3 class="font-bold text-lg leading-6">Artificial Intelligence</h3>
                    <p class="font-normal text-md my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam a quidem magni sint laudantium eius!</p>
                </div>
            </div>
            <div class="bg-gray-50 p-4 transition-all my-5 rounded flex flex-col justify-start items-start hover:shadow-xl">
                <div class="icon text-6xl pb-4 text-red-500">
                    <FaFontAwesomeFlag />
                </div>
                <div class="desc">
                    <h3 class="font-bold text-lg leading-6">Internet of Things</h3>
                    <p class="font-normal text-md my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam a quidem magni sint laudantium eius!</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
