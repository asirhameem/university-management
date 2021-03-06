    @extends('Layouts/navbar')

    @section('title')
    Search
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
                            <span>Search Result</span>
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


                                    @forelse($users as $user)
                                    <div class="flex items-center justify-between
                                        font-semibold capitalize dark:text-gray-700">
                                        <!-- Top section -->

                                        <span>{{$user->name}}</span>

                                        <span>{{$user->department}}</span>


                                        <span>{{$user->cgpa}}</span>

                                        <span>{{$user->status}}</span>


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
                                        {{$user->email}}
                                    </p>

                                    <div class="flex justify-between">
                                        <!-- Bottom section -->

                                        <div class="flex">
                                            <a class="uppercase px-8 py-2 bg-red-600 text-blue-50 max-w-max shadow-sm hover:shadow-md" href="/unban/{{$user->uid}}">Unban</a>
                                        </div>


                                    </div>

                                    @empty
                                    @endforelse

                                </li>
                            </ul>



                        </div>

                    </div>



                </div>

            </main>



        </div>
    </div>
    @endsection