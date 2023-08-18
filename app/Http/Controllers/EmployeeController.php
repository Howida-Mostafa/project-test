<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

use App\Models\Company;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::orderBy("created_at","ASC")->paginate(10);
        // dd($employee);
        return view('dashboard.employee.index')->with(["employee"=> $employee]);
    }

    public function add()
    {
        return redirect("404");
    }

    public function create()
    {
        $company = Company::get();

        return view('dashboard.employee.add')->with(['company' => $company]);
        
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {

        Employee::create($request->all()); 

        return redirect('/dashboard/employee')->with(["success"=> "employee added Successfully"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return redirect("404");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {   
        $company = Company::get();
        
        return view('dashboard.employee.edit')->with(["company"=> $company, "employee"=> $employee]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {

        $employee->update($request->all());

        return redirect('/dashboard/employee')->with(["success"=> "employee Edited Successfully"]);
    }

    // delete
    public function delete($id) {
        return view('dashboard.employee.delete')->with('id', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/dashboard/employee')->with('success', 'employee deleted successfully');
    }
    

   
}
