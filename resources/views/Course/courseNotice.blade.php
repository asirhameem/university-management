@extends('Layouts/navbar')


@section('title')
Course Notice
@endsection

@section('content')
<div class="flex items-center justify-center">
    <style>
        html,
        body {
            height: 100%;
        }

        @media (min-width: 640px) {
            table {
                display: inline-table !important;
            }

            thead tr:not(:first-child) {
                display: none;
            }
        }

        td:not(:last-child) {
            border-bottom: 0;
        }

        th:not(:last-child) {
            border-bottom: 2px solid rgba(0, 0, 0, .1);
        }
    </style>





    <div>

        <div class="col-span-2 lg:col-span-1">
            <form action="/course-notice/{{$id}}" method="POST">
                @csrf
                <input type="text" name="name" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Name" />
        </div>

        <div class="col-span-2">
            <input cols="30" rows="8" name="about" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Message">
        </div>

        <div class="col-span-2 text-right">
            <input type="submit" value="SAVE" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">

        </div>
        </form>
    </div>


    <div class="container">
        <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
            
                <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Description</th>
                    
                </tr>
                
            
            @forelse($notices as $notice)
                <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                    <td class="border-grey-light border hover:bg-gray-100 p-3">{{$notice->noticename}}</td>
                    <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$notice->noticedescription}}</td>
                    
                </tr>
            @empty
            @endforelse
           
        </table>
    </div>
</div>
@endsection