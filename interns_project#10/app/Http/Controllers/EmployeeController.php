<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Employee;



class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        $user = Auth::user();
        return view('employees.index', compact('employees', 'user'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'status' => 'required|in:active,inactive',
            'position' => 'required',
            'type' => 'required|in:ojt,regular',
        ]);

        $employee = Employee::create($data);

        // Optionally, you can redirect or return a response after storing the employee
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'status' => 'required',
            'position' => 'required',
            'type' => 'required',
        ]);

        $employee->update($data);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully');
    }
}
