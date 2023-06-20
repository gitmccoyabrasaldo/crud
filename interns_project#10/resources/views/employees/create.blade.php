<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto p-6 w-96">
        <h1 class="text-2xl font-bold mb-6 text-center">Add Employee</h1>
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded" type="text" name="name" id="name" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="surname">Surname:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded" type="text" name="surname" id="surname" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded" type="text" name="address" id="address" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded" type="text" name="phone" id="phone" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">Status:</label>
                <select class="border border-gray-300 px-4 py-2 w-full rounded" name="status" id="status" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="position">Position:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded" type="text" name="position" id="position" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="type">Type:</label>
                <select class="border border-gray-300 px-4 py-2 w-full rounded" name="type" id="type" required>
                    <option value="ojt">OJT</option>
                    <option value="regular">Regular</option>
                </select>
            </div>
            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Create</button>
                <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2" href="{{ route('employees.index') }}">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>