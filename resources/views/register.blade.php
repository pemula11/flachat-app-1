<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset("libs/toast-snackbar/mdtoast.min.css") }}">
</head>
<body class="bg-slate-800">
    <div class="mx-auto p-4 w-full max-w-md h-full md:h-auto bg-gray-700 rounded-lg mt-20">
        <h1 class="text-gray-300 text-center mb-4 text-2xl">Mini Chat Realtime</h1>
        <form class="space-y-6" id="form-register" method="post" action="/registers">
            @csrf
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-300">Username</label>
                <input type="name" name="name" id="name" class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" placeholder="name">
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Your email</label>
                <input type="email" name="email" id="email" class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" placeholder="name@company.com">
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-300">Your password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white">
            </div>
            
            <input type="submit" value="Register" id="btn-login" class="w-full text-white focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
        
        </form>
    </div>

    {{--  url --}}
    <input type="hidden" id="register-url" value="{{ route("register.trigger") }}">

    @vite('resources/js/app.js')
    <script src="{{ asset("libs/toast-snackbar/mdtoast.min.js") }}"></script>

</body>
</html>
