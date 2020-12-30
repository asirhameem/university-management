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
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">
            <div class="md:flex">
                <div class="w-full p-3 px-6 py-10">
                    <form action="{{route('user.register')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="text-center"> <span class="text-xl text-gray-700">Registration Here</span> </div>
                        <div class="mt-3 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Name</span> <input type="text" name="name" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                        <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Username</span> <input type="text" name="username" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                        <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Email</span> <input type="email" name="email" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                        <div class="mt-4 relative"> <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-400 ">Password</span> <input type="password" name="password" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-red-600"> </div>
                        <div class="mt-4"> <button type="submit" class="h-12 w-full bg-red-600 text-white rounded hover:bg-red-700">Sign Up<i class="fa fa-long-arrow-right"></i></button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>