<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto p-6 w-96">
        <h1 class="text-2xl font-bold mb-6 text-center">Update Employee Profile</h1>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded" type="text" name="name" id="name" required value="{{ $employee->name }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="surname">Surname:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded" type="text" name="surname" id="surname" required value="{{ $employee->surname }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded" type="text" name="address" id="address" required value="{{ $employee->address }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded" type="text" name="phone" id="phone" required value="{{ $employee->phone }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">Status:</label>
                <select class="border border-gray-300 px-4 py-2 w-full rounded" name="status" id="status" required value="{{ $employee->status }}">
                    <option value="active" @if($employee->status === 'active') selected @endif>Active</option>
                    <option value="inactive" @if($employee->status === 'inactive') selected @endif>Inactive</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="position">Position:</label>
                <input class="border border-gray-300 px-4 py-2 w-full rounded" type="text" name="position" id="position" required value="{{ $employee->position }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="type">Type:</label>
                <select class="border border-gray-300 px-4 py-2 w-full rounded" name="type" id="type" required value="{{ $employee->type }}">
                    <option value="ojt" @if($employee->type === 'ojt') selected @endif>OJT</option>
                    <option value="regular" @if($employee->type === 'regular') selected @endif>Regular</option>
                </select>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2" href="{{ route('employees.index') }}">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>