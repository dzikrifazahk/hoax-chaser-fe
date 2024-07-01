@extends('pages.landing.index')
@section('content')
    <div class="flex flex-col w-full h-1/4">
        <div class="flex flex-col justify-end items-center gap-3 pt-10">
            <div class="text-3xl font-bold">
                Input The News Link
            </div>
            <div>
                <div class="flex items-center bg-gray-200 rounded-full px-4 py-2">
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" placeholder="Search News"
                        class="bg-transparent text-gray-500 focus:outline-none ml-2">
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-full flex gap-7">
        <div class="w-full h-full bg-[#E5EEF7] rounded-xl p-5 flex flex-col gap-4">
            <div class="bg-[#F5F5F5] rounded-xl w-full h-1/4">

            </div>
            <div class="bg-[#F5F5F5] rounded-xl w-full h-full">

            </div>
        </div>
        <div class="w-1/3 h-full bg-red-400  rounded-xl p-5">
            <div class="w-full h-full bg-[#E5EEF7] rounded-xl p-5 flex flex-col gap-4">
                <div class="bg-[#F5F5F5] rounded-xl w-full h-1/4">

                </div>
                <div class="bg-[#F5F5F5] rounded-xl w-full h-full">

                </div>
            </div>
        </div>
    </div>
@endsection
