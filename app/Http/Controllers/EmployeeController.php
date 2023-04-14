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
        $employee = Employee::orderBy('id', 'desc')->paginate(10);
        // dd($employee);
        return view('employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'title'=>'bail|required',
        //     'first_name'=>'bail|required',
        //     'last_name'=>'bail|required',
        //     'gender'=>'bail|required',
        //     'email'=>'bail|required|email',
        //     'phone_number'=>'bail|required',
        //     'designation'=>'bail|required',
        //     'salary'=>'bail|required',
        //     'date_of_birth'=>'bail|required',
        // ]);


        $employee = new Employee;
        $employee->title = $request->input('title');
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->gender = $request->input('gender');
        $employee->email = $request->input('email');
        $employee->phone_number = $request->input('phone_number');
        $employee->designation = $request->input('designation');
        $employee->salary = $request->input('salary');
        $employee->date_of_birth = $request->input('date_of_birth');
        // dd($employee);
        $employee->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->title = $request->input('title');
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->gender = $request->input('gender');
        $employee->email = $request->input('email');
        $employee->phone_number = $request->input('phone_number');
        $employee->designation = $request->input('designation');
        $employee->salary = $request->input('salary');
        $employee->date_of_birth = $request->input('date_of_birth');
        // dd($employee);
        $employee->update();

        return redirect()->route('index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('index');
    }
}
