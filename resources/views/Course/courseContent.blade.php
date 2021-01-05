@extends('Layouts/navbar')

@section('title')
Course Contents
@endsection

@section('content')

<div class="ml-20">
    <form class="m-4 flex" action="/course-content/{{$id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" />
        <input type="file" name="file" class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" />
        <input type="submit" value="Upload" class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r">
    </form>
</div>

<div class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">



    <div class="h-screen w-full flex overflow-hidden select-none">

        <div class="md:px-32 py-8 w-full">
            <div class="shadow overflow-hidden rounded border-b border-gray-200">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Path</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>


                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse($contents as $content)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{$content->contentname}}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{$content->contentpath}}</td>
                            <td class="w-1/3 text-left py-3 px-4"><a href="/download/{{$content->contentpath}}">Download</a></td>


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