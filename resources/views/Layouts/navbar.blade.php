@extends('Layouts/main')
@section('navbar')
<!-- This is an example component -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<div class="w-screen flex flex-row items-center p-1 justify-between bg-white shadow-xs">
  <a href="{{route('teacher.dashboard')}}"><div class="ml-8 text-lg text-gray-700 hidden md:flex">My Website</div></a>
  <span class="w-screen md:w-1/3 h-10 bg-gray-200 cursor-pointer border border-gray-300 text-sm rounded-full flex">
    <input type="search" name="serch" placeholder="Search" class="flex-grow px-4 rounded-l-full rounded-r-full text-sm focus:outline-none">
    <i class="fas fa-search m-3 mr-5 text-lg text-gray-700 w-4 h-4">
    </i>
  </span>
  <div class="flex flex-row-reverse mr-4 ml-4 md:hidden">
    <i class="fas fa-bars"></i>
  </div>
  <div class="flex flex-row-reverse mr-8 hidden md:flex">
    <!-- <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">Button</div> -->
    <div class="">


      <div class="flex flex-wrap">
        <div class="w-full sm:w-6/12 md:w-4/12 px-4">
          <div class="relative inline-flex align-middle w-full">
            <button class="text-white font-sm uppercase text-sm px-4 py-1 mt-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 bg-gray-800" style="transition:all .15s ease" type="button" onclick="openDropdown(event,'dropdown-id')">
              @if(session()->has('name'))
              {{session()->get('name')}}
              @else
              Login
              @endif
            </button>
            <div class="hidden bg-white  text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mb-1" style="min-width:12rem" id="dropdown-id">
              <a href="{{route('teacher.profile')}}" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">
                My Profile
              </a>
              <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">
                Another action
              </a>
              <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">
                Something else here
              </a>
              <div class="h-0 my-2 border border-solid border-t-0 border-gray-900 opacity-25"></div>
              <a href="{{route('user.logout')}}" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">
                Logout
              </a>
            </div>
          </div>
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" charset="utf-8"></script>
      <script>
        function openDropdown(event, dropdownID) {
          let element = event.target;
          while (element.nodeName !== "BUTTON") {
            element = element.parentNode;
          }
          var popper = new Popper(element, document.getElementById(dropdownID), {
            placement: 'top-end'
          });
          document.getElementById(dropdownID).classList.toggle("hidden");
          document.getElementById(dropdownID).classList.toggle("block");
        }
      </script>


    </div>
  </div>
</div>
@endsection