<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Registration</title>
    <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <!-- <style></style> -->
    <!-- <script type='text/javascript' src=''></script> -->
    <script type='text/javascript' src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js'></script>
    <script type='text/javascript'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="py-20 h-screen bg-gray-300 px-2">
        <!-- Error Messages -->

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
                {{ $error }}</div>
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

        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">
            <div class="md:flex">
                <div class="w-full p-3 px-6 py-10">
                    <form action="{{route('user.register')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="text-center"> <span class="text-xl text-gray-700">Registration Here</span> </div>
                        <div class="mt-3 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Name</span> <input type="text" name="name" value="{{old('name')}}" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                        <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Username</span> <input type="text" name="username" value="{{old('username')}}" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                        <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Email</span> <input type="email" name="email" value="{{old('email')}}" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                        <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Password</span> <input type="password" name="password" value="{{old('password')}}" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                        <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Confirm Password</span> <input type="password" name="confirmPassword" value="{{old('confirmPassword')}}" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                        <div class="mt-4"> <button type="submit" class="h-12 w-full bg-red-600 text-white rounded hover:bg-red-700">Sign Up<i class="fa fa-long-arrow-right"></i></button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>