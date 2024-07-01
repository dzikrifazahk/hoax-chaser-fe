@extends('pages.landing.index')
@section('content')
    <div class="h-1/2 w-full">
        <div class="bg-custom h-full w-full pl-16 pr-16 pt-5">
            <div class="bg-ic h-full w-full pl-16 pr-16 flex flex-col gap-10 items-center">
                <p class="text-6xl font-semibold text-center">Leading Actual News <br> and upholding the truth with <br>
                    Cutting-Edge Technology</p>
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
    <div class="h-1/2 w-full bg-[#C0244F] flex">
        <div class="w-full text-3xl text-white font-bold h-full flex items-center justify-center">About Us</div>
        <div class="w-full texh-full flex items-center justify-center">
            <p class="text-white text-xl"><b>Hoax Chaser</b> is an app that lets you explore the reality of information,
                where artificial intelligence and advanced technology combine to uncover the world of hoaxes. We bring
                trusted solutions to ensure you always get accurate news, helping you to face the challenge of false
                information that fits our slogan.</p>
        </div>
    </div>
    <div class="h-full w-full flex flex-col items-center justify-center p-20 gap-10">
        <div class="flex w-full h-full gap-10 justify-center">
            <div class="w-1/2 font-bold h-full flex rounded-xl gap-10">
                {{-- card 1 --}}
                <div class="max-w-sm bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="img/helping-people.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Helping People</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Empower users with the knowledge and
                            skills to identify and counter hoaxes, so they
                            can become active contributors in the fight against the spread of false information</p>
                    </div>
                </div>

                <div class="max-w-sm bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="img/research.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Conducting Research</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Conduct in-depth research and analysis
                            on trends in the spread of hoaxes, behavioral
                            patterns of hoax spreaders, and strategies to effectively address the challenge of false
                            information</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex w-full h-full gap-10 justify-center">
            <div class="w-1/2 font-bold h-full flex rounded-xl gap-10">
                <div class="max-w-sm bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="img/helping-people.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Provide Education</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Provide educational resources on
                            strategies for spreading hoaxes, how to identify false information, and the importance of
                            verifying information before believing it.</p>
                    </div>
                </div>

                <div class="max-w-sm bg-white rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="img/research.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Encouraging Community Collaboration</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Encourage collaboration between users
                            to report hoaxes, share resources, and build a strong network in the fight against
                            disinformation.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="w-full h-auto mt-28 flex flex-col">
        <p class="text-center text-4xl font-bold">OUR PRODUCTS</p>
        <div class="flex w-full h-1/2">
            <div class="flex flex-col w-full p-5">
                <div class="w-full h-full flex flex-col items-center justify-center">
                    <p class="text-xl font-bold'">Robotic Process Automation (RPA)</p>
                    <img src="img/rpa.png" alt="" class="pt-3">
                </div>
            </div>
            <div class="flex flex-col w-full p-5">
                <div class="w-full h-full flex flex-col items-center justify-center">
                    <p class="text-xl font-bold'">Mobile App</p>
                    <img src="img/mobile.png" alt="" class="pt-3 w-36">
                </div>
            </div>
            <div class="flex flex-col w-full p-5">
                <div class="w-full h-full flex flex-col items-center justify-center">
                    <p class="text-xl font-bold'">Web App</p>
                    <img src="img/web.png" alt="" class="pt-3">
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-28 flex flex-col bg-[#C0244F] p-5">
        <div class="w-full h-full flex">
            <div class="w-full h-full items-center justify-center flex">
                <p class="text-center text-4xl text-white font-bold">Try Our Products Here!</p>
            </div>
            <div class="flex w-full justify-end gap-5">
                <img src="/img/appstore.png" alt="">
                <img src="/img/playstore.png" alt="">
            </div>
        </div>
    </div>
    <div class="flex w-full h-1/2 p-10">
        <div class="flex flex-col gap-5 w-full">
            <p class="text-3xl font-bold">Contact</p>
            <p class="text-3xl text-[#7E7E7E]">Hoax Chaser Office</p>
            <p class="">Jl. Lohbener Lama No.08, Legok, Kec. Lohbener, Kabupaten Indramayu, Jawa Barat 45252</p>
            <br>
            <p class="">No. Handphone : 089639490563</p>
            <p class="">Email : dzikrifaza15@gmail.com</p>
        </div>
        <div class="flex items-center justify-center m-5 w-full">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2230.9931806880713!2d108.28019946668049!3d-6.407907677069956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sIndramayu%20State%20Polytechnic!5e0!3m2!1sen!2sid!4v1719862096451!5m2!1sen!2sid"
                width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection

<style scoped>
    .bg-custom {
        background-image: url('img/background-line.png');
        background-repeat: no-repeat;
        background-size: 50% 100%;
        background-position: left;
    }

    .bg-ic {
        background-image: url('img/bg-ic.png');
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
    }

    .bg-ic {
        background-image: url('img/bg-ic.png');
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
    }
</style>
