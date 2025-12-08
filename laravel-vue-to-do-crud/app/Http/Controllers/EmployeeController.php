<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return 'fsdf';
        $employee = Employee::get();
        return response()->json(['message' => 'All Employee List', 'employee' => $employee], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
                        'employee_name' => 'required|max:50',
                        'employee_designation' => 'required|max:60',
                        'salary' => 'required|numeric',
                    ]);

        // if($validator->fails()) return response()->json([$validator->errors()->all()], 422);

        $validated = $validator->validate();
        $employee = Employee::create($validated);
        return response()->json(['message' => 'Employee Added Successfully', 'employee' => $employee], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        // dd("hello($id)");
        $employee = Employee::FindOrFail($id);
        return response()->json(['message' => 'show single employee', 'employee' => $employee], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $employee = Employee::FindOrFail($id);
        //  dd($employee);
         $validator = Validator::make($request->all(), [
                        'employee_name' => 'required|max:50',
                        'employee_designation' => 'required|max:60',
                        'salary' => 'required|numeric',
                    ]);

        // if($validator->fails()) return response()->json([$validator->errors()->all()], 422);

        $validated = $validator->validate();
        $employee->update($validated);
        return response()->json(['message' => 'Employee Updated Successfully', 'employee' => $employee], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $employee = Employee::FindOrFail($id);
        $employee->delete();
        return response()->json(['message' => 'Employee Deleted Successfully'], 200);
    }
}
