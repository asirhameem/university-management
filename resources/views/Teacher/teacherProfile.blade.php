@extends('Layouts/navbar')
@section('title')
Profile
@endsection
@section('content')
<div>
    <section class="py-10 bg-gray-100  bg-opacity-50 h-screen">
        <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
            <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
                <div class="max-w-sm mx-auto md:w-full md:mx-0">
                    <div class="inline-flex items-center space-x-8">
                        <img class="w-10 h-10 object-cover rounded-full" alt="User avatar" src="https://avatars3.githubusercontent.com/u/72724639?s=400&u=964a4803693899ad66a9229db55953a3dbaad5c6&v=4" />

                        <h1 class="text-gray-600 text-xl">{{$users->name}}</h1>
                    </div>
                </div>
            </div>
            <div class="bg-white space-y-0">
                <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
                    <h2 class="md:w-1/3 max-w-sm mx-auto">Account</h2>
                    <div class="md:w-2/3 max-w-sm mx-auto">
                        <label class="text-sm text-gray-400">Email</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="email" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->email}}" disabled />
                        </div>
                    </div>

                    <div class="md:w-2/3 max-w-sm mx-2">
                        <label class="text-sm text-gray-400">Username</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->username}}" disabled />
                        </div>
                    </div>
                </div>

                <hr />
                <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    <!-- <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2> -->
                    <div class="md:w-2/3 max-w-sm mx-auto">
                        <label class="text-sm text-gray-400">Full Name</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->name}}" />
                        </div>
                    </div>

                    <div class="md:w-2/3 max-w-sm mx-2">
                        <label class="text-sm text-gray-400">Phone Number</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->phone}}" />
                        </div>
                    </div>
                </div>


                <!-- <hr /> -->
                <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    <!-- <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2> -->
                    <div class="md:w-2/3 max-w-sm mx-auto">
                        <label class="text-sm text-gray-400">Department</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->department}}" disabled />
                        </div>
                    </div>

                    <div class="md:w-2/3 max-w-sm mx-2">
                        <label class="text-sm text-gray-400">Designation</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->designation}}" disabled />
                        </div>
                    </div>
                </div>


                <!-- <hr /> -->
                <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    <!-- <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2> -->
                    <div class="md:w-2/3 max-w-sm mx-auto">
                        <label class="text-sm text-gray-400">Salary</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->salary}}" disabled />
                        </div>
                    </div>

                    <div class="md:w-2/3 max-w-sm mx-2">
                        <label class="text-sm text-gray-400">Address</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->address}}" />
                        </div>
                    </div>
                </div>


                <!-- <hr /> -->
                <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                    <!-- <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2> -->
                    <div class="md:w-2/3 max-w-sm mx-auto">
                        <label class="text-sm text-gray-400">Type</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->type}}" disabled />
                        </div>
                    </div>

                    <div class="md:w-2/3 max-w-sm mx-2">
                        <label class="text-sm text-gray-400">Status</label>
                        <div class="w-full inline-flex border">
                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->status}}" disabled />
                        </div>
                    </div>
                </div>
            </div>

            <!-- <hr /> -->

            <div class="md:inline-flex w-full space-y-4 md:space-y-0 p-8 text-gray-500 items-center">
                <label class="text-sm text-gray-400">Image</label>
                <div class="mx-2 w-full inline-flex border ">
                    <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                        <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <input type="file" name="image" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" />
                </div>
            </div>

            <hr />


            <div class="md:inline-flex w-full space-y-4 md:space-y-0 p-8 text-gray-500 items-center">
                <!-- <h2 class="md:w-4/12 max-w-sm mx-auto">Change password</h2> -->

                <div class="md:w-5/12 w-full md:pl-9 max-w-sm mx-auto space-y-5 md:inline-flex pl-2">
                    <div class="w-full inline-flex border-b">
                        <div class="w-1/12 pt-2">
                            <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input type="password" name="password" class="w-11/12 focus:outline-none focus:text-gray-600 p-2 ml-4" placeholder="New Password" />
                    </div>

                </div>

                <div class="md:w-5/12 w-full md:pl-9 max-w-sm mx-auto space-y-5 md:inline-flex pl-2">
                    <div class="w-full inline-flex border-b">
                        <div class="w-1/12 pt-2">
                            <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input type="password" name="confirmPassword" class="w-11/12 focus:outline-none focus:text-gray-600 p-2 ml-4" placeholder="Confirm Password" />
                    </div>

                </div>

                <div class="md:w-3/12 text-center md:pl-6">
                    <button class="text-white w-full mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right">
                        <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        Update
                    </button>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection