<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Employees</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="h-full">
    <div class="w-full bg-blue-700 text-white text-2xl text-center p-5">
        Employee System
    </div>
    <div class="flex justify-between items-center mb-8 m-10">
        <span class="mr-4">Welcome {{ $user->name }}</span>
        <a href="{{ route('logout') }}" class="text-gray-700 hover:text-red-700">Logout</a>
    </div>

    <div class="flex justify-between mb-8 m-10">
        <a href="{{ route('employees.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Employee</a>
    </div>

    <div class="container mx-auto m-10 ">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Surname</th>
                    <th class="py-2 px-4 border-b">Address</th>
                    <th class="py-2 px-4 border-b">Phone</th>
                    <th class="py-2 px-4 border-b">Status</th>
                    <th class="py-2 px-4 border-b">Position</th>
                    <th class="py-2 px-4 border-b">Type</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr class="text-center">
                    <td class="py-2 px-4 border-b">{{ $employee->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $employee->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $employee->surname }}</td>
                    <td class="py-2 px-4 border-b">{{ $employee->address }}</td>
                    <td class="py-2 px-4 border-b">{{ $employee->phone }}</td>
                    <td class="py-2 px-4 border-b">{{ $employee->status }}</td>
                    <td class="py-2 px-4 border-b">{{ $employee->position }}</td>
                    <td class="py-2 px-4 border-b">{{ $employee->type }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('employees.edit', $employee->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline-block" onsubmit="event.preventDefault(); openConfirmationModal(this);">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                        </form>
                    </td>

                    <div id="popup-modal" tabindex="-1" class="flex fixed inset-0 z-50  items-center justify-center hidden">
                        <div class="relative w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-6 text-center">
                                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>

                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this employee?</h3>

                                    <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </button>
                                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        function openConfirmationModal(form) {
                            document.getElementById('popup-modal').classList.remove('hidden');
                            document.getElementById('popup-modal').addEventListener('click', function(event) {
                                if (event.target.dataset.modalHide) {
                                    document.getElementById('popup-modal').classList.add('hidden');
                                }
                            });
                            document.getElementById('popup-modal').addEventListener('keydown', function(event) {
                                if (event.key === 'Escape') {
                                    document.getElementById('popup-modal').classList.add('hidden');
                                }
                            });
                            document.querySelector('#popup-modal button[type="submit"]').addEventListener('click', function() {
                                form.submit();
                            });
                        }
                    </script>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>