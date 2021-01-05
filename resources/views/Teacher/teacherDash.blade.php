    @extends('Layouts/navbar')
    
    @section('title')
    Dashboard
    @endsection

    @section('content')
    <div class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">

        <div class="h-screen w-full flex overflow-hidden select-none">

            <main class="my-1 pt-2 pb-2 px-10 flex-1 bg-gray-200 dark:bg-black rounded-l-lg
            transition duration-500 ease-in-out overflow-y-auto">
                <!-- <div class="flex flex-col capitalize text-3xl">
                    <span class="font-semibold">hello,</span>
                    <span>tempest!</span>
                </div> -->
                <div class="flex">
                    <div class="mr-6 w-full mt-8 py-2 flex-shrink-0 flex flex-col bg-white
                    dark:bg-gray-600 rounded-lg">
                        <!-- Card list container -->

                        <h3 class="flex items-center pt-1 pb-1 px-8 text-lg font-semibold
                        capitalize dark:text-gray-300">
                            <!-- Header -->
                            <span>My Courses</span>
                            <!-- <button class="ml-2"> -->
                            <svg class="h-5 w-5 fill-current" viewBox="0 0 256 512">
                                <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9
                                    0l-22.6-22.6c-9.4-9.4-9.4-24.6
                                    0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6
                                    0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136
                                    136c9.5 9.4 9.5 24.6.1 34z"></path>
                            </svg>
                            <!-- </button> -->
                        </h3>

                        <div>
                            <!-- List -->

                            <ul class="pt-1 pb-2 px-3 overflow-y-auto">


                                <li class="mt-2">
                                    @forelse($courses as $course)
                                    <a class="p-5 flex flex-col justify-between
                                    bg-gray-100 dark:bg-gray-200 rounded-lg mb-4" href="/course-details/{{$course->cid}}">

                                        <div class="flex items-center justify-between
                                        font-semibold capitalize dark:text-gray-700">
                                            <!-- Top section -->

                                            <span>{{$course->cname}}</span>

                                            <!-- <div class="flex items-center">
                                                <svg class="h-5 w-5 fill-current mr-1
                                                text-gray-600" viewBox="0 0 24 24">
                                                    <path d="M14 12l-4-4v3H2v2h8v3m12-4a10
                                                    10 0 01-19.54 3h2.13a8 8 0
                                                    100-6H2.46A10 10 0 0122 12z"></path>
                                                </svg>
                                                <span>4.2 mi</span>
                                            </div> -->

                                        </div>

                                        <p class="text-sm font-medium leading-snug
                                        text-gray-600 my-3">
                                            <!-- Middle section -->
                                            {{$course->cdescription}}
                                        </p>

                                        <div class="flex justify-between">
                                            <!-- Bottom section -->

                                            <div class="flex">
                                                <img class="h-6 w-6 rounded-full mr-3" src="https://i.pinimg.com/originals/b7/06/0b/b7060b60f6ee1beeedf7d648dabd89a1.jpg" alt="Issue" />
                                                <span>
                                                    <span class="text-blue-500
                                                    font-semibold">
                                                        {{session()->get('name')}}
                                                    </span>

                                                </span>
                                            </div>

                                            <p class="text-sm font-medium leading-snug
                                            text-gray-600">
                                                {{$course->cstart}} - {{$course->cend}}
                                            </p>

                                        </div>

                                    </a>
                                    @empty
                                    @endforelse
                                </li>
                            </ul>

                            <!-- <a href="{{route('teacher.profile')}}" class="flex justify-center capitalize text-blue-500
                            dark:text-blue-200">
                                <span>see all</span>
                            </a> -->

                        </div>

                    </div>

                    <!-- <div class="mr-6 w-1/2 mt-8 py-2 flex-shrink-0 flex flex-col
                    bg-purple-300 rounded-lg text-white">

                        <h3 class="flex items-center pt-1 pb-1 px-8 text-lg font-bold
                        capitalize">
                           
                            <span>scheduled lessons</span>
                            <button class="ml-2">
                                <svg class="h-5 w-5 fill-current" viewBox="0 0 256 512">
                                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9
                                    0l-22.6-22.6c-9.4-9.4-9.4-24.6
                                    0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6
                                    0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136
                                    136c9.5 9.4 9.5 24.6.1 34z"></path>
                                </svg>
                            </button>
                        </h3>

                        <div class="flex flex-col items-center mt-12" style="background-image:https://cdni.iconscout.com/illustration/premium/thumb/empty-state-2130362-1800926.png;">
                           

                            <span class="font-bold mt-8">Your schedule is empty</span>

                            <span class="text-purple-500">
                                Make your first appointment
                            </span>

                            <button class="mt-8 bg-purple-800 rounded-lg py-2 px-4">
                                Find a Job
                            </button>

                        </div>
                    </div> -->

                </div>

            </main>



        </div>
    </div>
    @endsection