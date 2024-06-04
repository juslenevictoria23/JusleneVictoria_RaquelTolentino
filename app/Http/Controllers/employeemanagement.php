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

    
    public function store(Request $request)
    {
        $this->validateInput($request);

        $keys = ['name',  'email', 'address','status'];
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

        $keys = ['name',  'email', 'address','status'];
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
            'address' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);
    }

    protected function createQueryInput(array $keys, Request $request)
    {
        return $request->only($keys);
    }
}
