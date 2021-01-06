@extends('Layouts/navbar')
@section('title')
Profile
@endsection
@section('content')
<div>
    @if (count($errors) > 0)

    @foreach ($errors->all() as $error)


    <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-red-700 bg-red-100 border border-red-300 ">
        <div slot="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
        </div>
        <div class="text-xl font-normal  max-w-full flex-initial">
            {{ $error }}
        </div>
        <div class="flex flex-auto flex-row-reverse">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-red-400 rounded-full w-5 h-5 ml-2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </div>
        </div>
    </div>
    @endforeach
    @endif

    <table id="library" class="border-collapse w-full">
    <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Book Name</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Borrow Date</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Return Date</th>
            
        </tr>
    </thead>
    <tbody id="libody">
    @forelse($library as $lib)
        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
                {{$lib->bookname}}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                {{$lib->bdate}}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
                {{$lib->rdate}}
            </td>
            
        </tr>
    @empty
    @endforelse
        
    </tbody>
</table>


<table id="account" class="border-collapse w-full">
   
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell"> Name</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Payment Date</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Payment Date</th>
            
        </tr>
</table>


    <section class="py-10 bg-gray-100  bg-opacity-50 h-screen">
        <form action="/student-detail/{{$users->uid}}" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
                <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
                    <div class="max-w-sm mx-auto md:w-full md:mx-0">
                        <div class="inline-flex items-center space-x-8">
                            <img class="w-10 h-10 object-cover rounded-full" alt="User avatar" src="/uploads/profile-picture/{{$users->dp}}" />

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
                                <input type="text" name="name" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->name}}" />
                            </div>
                        </div>

                        <div class="md:w-2/3 max-w-sm mx-2">
                            <label class="text-sm text-gray-400">Birthdate</label>
                            <div class="w-full inline-flex border">
                                <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                    <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input type="text" name="dob" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->dob}}" />
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
                                <input type="text" name="department" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->department}}" disabled />
                            </div>
                        </div>

                        <div class="md:w-2/3 max-w-sm mx-2">
                            <label class="text-sm text-gray-400">CGPA</label>
                            <div class="w-full inline-flex border">
                                <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                    <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input type="text" name="cgpa" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->cgpa}}"  />
                            </div>
                        </div>
                    </div>


                    <!-- <hr /> -->
                    <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                        <!-- <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2> -->
                        <div class="md:w-2/3 max-w-sm mx-auto">
                            <label class="text-sm text-gray-400">Admission Date</label>
                            <div class="w-full inline-flex border">
                                <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                    <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->admission_date}}" disabled />
                            </div>
                        </div>

                        <div class="md:w-2/3 max-w-sm mx-2">
                            <label class="text-sm text-gray-400">Student Status</label>
                            <div class="w-full inline-flex border">
                                <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                    <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input type="text" name="sstatus" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->student_status}}" />
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
                                <input type="text" name="status" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" value="{{$users->status}}"  />
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
                        <input type="file" name="dp" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" />
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
                            <input type="password" name="password" value="{{$users->password}}" class="w-11/12 focus:outline-none focus:text-gray-600 p-2 ml-4" placeholder="New Password" />
                        </div>

                    </div>

                    <div class="md:w-5/12 w-full md:pl-9 max-w-sm mx-auto space-y-5 md:inline-flex pl-2">
                        <div class="w-full inline-flex border-b">
                            <div class="w-1/12 pt-2">
                                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input type="password" name="confirmPassword" value="{{$users->password}}" class="w-11/12 focus:outline-none focus:text-gray-600 p-2 ml-4" placeholder="Confirm Password" />
                        </div>

                    </div>

                    <div class="md:w-3/12 text-center md:pl-6">
                        <input type="submit" value="Save" class="text-white w-full mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-2 px-2 inline-flex items-center focus:outline-none md:float-right">
                        <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>


                    </div>
                </div>
        </form>
    </section>
</div>
<div>

</div>
<div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
        $(document).ready( function() {
        $.ajax({
            url: '/api/account',
            method: 'get',
            dataType: 'json',
            success: function(data) {
                for (var i = 0; i < data.length; i++) {
                    var msg = msg + "<tr> <td class="+"w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static"+">" + data[i].pid + " </td> <td class="+"w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static"+"> " + data[i].pamount + "</td> <td class="+"w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static"+">" + data[i].pdate + "</td> </tr>";
                    
                }
                $('#account').append(msg);
            },
            error: function(response) {
                alert('server error occured')
            }
        });
    })
        </script>

<!-- 
<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Company name</span>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Country</span>
            </td> -->

@endsection