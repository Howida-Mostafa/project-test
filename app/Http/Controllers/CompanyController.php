<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

use Storage;



class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
 
    public function index()
    {
        $company = Company::orderBy("created_at","ASC")->paginate(10);

        return view('dashboard.company.index')->with(["company"=> $company]);
    }

    public function add()
    {
        return redirect("404");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('dashboard.company.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $date = date('YmdHisu');
        $imageName = $date . '.' . $request->logo->extension();
        $request->logo->storeAs('public/company', $imageName);
        $request->merge(['logo' => $imageName]);

        $data = $request->all();
        $data['logo'] = $imageName;
        
         
        Company::create($data); 


         return redirect('/dashboard/company')->with(["success"=> "company added Successfully"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return redirect("404");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('dashboard.company.edit')->with(["company"=> $company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {

        $data = $request->all();

        if($request->hasfile("logo")) {

            Storage::delete('public/company/'. $company->logo);
            $date = date('YmdHisu');
            $imageName = $date . '.' . $request->logo->extension();
            $request->logo->storeAs('public/company', $imageName);
            $data['logo'] = $imageName;
        }


        $company->update($data);
        

        return redirect('/dashboard/company')->with(["success"=> "company Edited Successfully"]);
    }

    // delete
    public function delete($id) {

        return view('dashboard.company.delete')->with('id', $id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {   
            Storage::delete('public/company/'. $company->logo);
            $company->delete();
    
            return redirect('/dashboard/company')->with('success', 'company deleted successfully');
    }
}
