<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeemanagement extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function table()
    {
        $employees = Employee::all();
        return view('table_user', compact('employees'));
    }

    
    public function store(Request $request)
    {
        $this->validateInput($request);

        $keys = ['name', 'email', 'password', 'confirm_password']; // Updated field names
        $input = $this->createQueryInput($keys, $request);

        Employee::create($input);

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $this->validateInput($request);

        $employee = Employee::findOrFail($id);

        $keys = ['name', 'email', 'password', 'confirm_password']; // Updated field names
        $input = $this->createQueryInput($keys, $request);

        $employee->update($input);

        return redirect()->route('home')->with('success', 'Employee updated successfully!');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        $employee->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully!');
    }

    protected function validateInput(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8|same:password', // Validation for confirm password
        ]);
    }

    protected function createQueryInput(array $keys, Request $request)
    {
        return $request->only($keys);
    }
}
