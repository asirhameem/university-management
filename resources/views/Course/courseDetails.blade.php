@extends('Layouts/navbar')

@section('title')
Course Details
@endsection

@section('content')

<div class='py-10'>

    <div class="max-w-md mx-auto xl:max-w-5xl lg:max-w-5xl md:max-w-2xl bg-gray-700 max-h-screen shadow-2xl flex-row rounded relative">
        <div class="p-2 bg-gray-600 text-blue-900 rounded-t">

            <h5 class="text-white text-2xl capitalize">{{$details->cname}}</h5>

        </div>



        <div class="p-2 w-full h-full overflow-y-auto text-gray-100">
            <p class="text-justify py-2">
                Time: {{$details->cstart}}-{{$details->cend}}
            </p>

        </div>

        <div class="p-2 w-full h-full overflow-y-auto text-gray-100">
            <p class="text-justify py-2">
                {{$details->cdescription}}
            </p>

        </div>
        <a href="/course-content/{{$details->cid}}" class="flex bg-blue-500 rounded-lg font-bold text-white text-center px-4 py-3 mx-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                Upload Course Content
                <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <polyline points="12 5 19 12 12 19" />
                </svg>
            </a>
            <a href="" class="flex bg-blue-500 rounded-lg font-bold text-white text-center mt-2 mx-3 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                Upload Course Notice
                <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <polyline points="12 5 19 12 12 19" />
                </svg>
            </a>
    </div>
</div>

<div class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="h-screen w-full flex overflow-hidden select-none">

        <div class="md:px-32 py-8 w-full">
            <div class="shadow overflow-hidden rounded border-b border-gray-200">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Id</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Grade</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>

                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse($students as $student)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{$student->sid}}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{$student->name}}</td>
                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">{{$student->email}}</a></td>
                            <td class="w-1/3 text-left py-3 px-4">{{$student->grade}}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{$student->student_status}}</td>

                        </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
            <a href="" class="flex bg-blue-500 rounded-lg font-bold text-white text-center px-4 py-3 mx-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                Click here
                <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <polyline points="12 5 19 12 12 19" />
                </svg>
            </a>
        </div>



    </div>
</div>



@endsection