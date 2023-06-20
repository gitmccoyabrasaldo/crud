<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

    <!-- logout message -->
    @if(session('message'))
    <div class="alert alert-success text-green-700 text-center">
        {{ session('message') }}
    </div>

    @once
    <script>
        // Remove the logout message after 5 seconds
        setTimeout(function() {
            document.querySelector('.alert.alert-success').style.display = 'none';
        }, 3000); // Adjust the time delay (in milliseconds) as needed
    </script>
    @endonce
    @endif


    <div class="flex justify-center items-center h-screen bg-slate-100">
        <form action="{{ route('login') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8">
            @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            @csrf <!-- Include the CSRF token -->

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="text" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 w-full rounded focus:outline-none focus:shadow-outline">Login</button>
        </form>
    </div>


</body>



</html>