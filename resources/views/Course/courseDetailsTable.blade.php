@extends('Layouts/navbar')

@section('title')
Course Details
@endsection

@section('content')

<div class='py-10'>

    

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
            
        </div>



    </div>
</div>



@endsection