@extends('pages.landing.index')
@section('content')
    <div class="h-full w-full flex bg-[#E5EEF7]">
        <div class="flex flex-col w-4/5">
            {{-- header --}}
            <div class="flex p-5 w-full">
                <div class="w-full bg-gradient-to-r from-red-500 p-2">
                    <p class="font-bold">Trending News</p>
                </div>
                <div class="w-full flex justify-end p-2">
                    <p class="underline font-bold ">View More</p>
                </div>
            </div>

            <div class="p-10 flex flex-col">
                <div class="flex gap-7">
                    <div class="font-thin text-[#FA3454]">
                        Politics
                    </div>
                    <div>
                        <li class="text-gray-400">2 Hours Ago</li>
                    </div>
                </div>
                <div class="w-full text-3xl">
                    Komisi II DPR dan KPU bahas Pilkada dan evaluasi Pemilu
                </div>
                <div class="flex w-full h-5 items-start gap-3">
                    <div class="w-auto h-full flex justify-start items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-full h-full">
                            <path
                                d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                        </svg>
                    </div>
                    <p class="font-thin text-base flex">1,092</p>
                </div>
            </div>
        </div>
        <div class="w-full">
            ini 2
        </div>
    </div>
@endsection
