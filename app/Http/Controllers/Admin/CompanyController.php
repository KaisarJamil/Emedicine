<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class CompanyController extends Controller
{
    public function index(){
        return view('admin.addcompany');
    }

    public function companylist(){
        $companies=Company::all();
        return view('admin.companylist',compact('companies'));
    }

    public function store(Request $request){

        $val=Validator::make($request->all(),[
            'name'=>'required|string|max:191',
        ]);

        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        $company=new Company();
        $company->name=$request->name;
        $company->save();

        return redirect()->back()->with('success','Successfully Added Company');
    }

    public function destroy($id){
        $company=Company::findOrFail($id);

        if (isset($company->id)){
            $company->delete();
            return redirect()->back()->with('success','Successfully Deleted the Company');
        }
        return redirect()->back();
    }
}
