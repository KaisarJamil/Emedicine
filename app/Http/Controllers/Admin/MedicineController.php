<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class MedicineController extends Controller
{
    public function index(){
        $companies=Company::all();
        return view('admin.addmedicine',compact('companies'));
    }


    public function medicinelist(){
        $medicines=Medicine::all();
        return view('admin.medicinelist',compact('medicines'));
    }

    public function store(Request $request){
        $val=Validator::make($request->all(),[
           'name'=>'required|string|max:191',
            'company'=>'required|not_in:0|exists:companies,id',
           'price'=>'required|integer',
            'image'=>'required|image|mimes:jpg,jpeg,png,gif',
            'description'=>'required|string|'
        ]);
        //dd($request);
        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }
        //dd($request);
        $image=$request->file('image');
        if (isset($image)){
            //create an unique name
            $imgName=Str::slug($request->name).uniqid().'.'.$image->getClientOriginalExtension();

            //create folders
            if (!Storage::disk('public')->exists('medicine')){
                Storage::disk('public')->makeDirectory('medicine');
            }

            $img=Image::make($image)->resize(300,300)->stream(); //resize image

            Storage::disk('public')->put('medicine/'.$imgName,$img); //Save Image

            $medicine = new Medicine();
            $medicine->name=$request->name;
            $medicine->company_id=$request->company;
            $medicine->price=$request->price;
            if (isset($imgName)){
                $medicine->image= $imgName;
            }
            $medicine->description=$request->description;
            $medicine->save();

            return redirect()->back()->with('success','Successfully Added New Medicine');
        }

    }

    public function destroy($id){
        $medicine=Medicine::findOrFail($id);

        if (isset($medicine->id)){
            if (Storage::disk('public')->exists('medicine/'.$medicine->image)){
                Storage::disk('public')->delete('medicine/'.$medicine->image);
            }

            $medicine->delete();
            return redirect()->back()->with('success','Successfully Deleted the Medicine');
        }
        return redirect()->back();
    }

    public function edit($id){
        $medicine=Medicine::findOrFail($id);
        $companies=Company::all();
        if (isset($medicine->id)){
            return view('admin.editmedicine',compact('medicine','companies'));
        }
        return redirect()->back();
    }

    public function update(Request $request){
        $val=Validator::make($request->all(),[
            'name'=>'required|string|max:191',
            'company'=>'required|not_in:0|exists:companies,id',
            'price'=>'required|integer',
            'image'=>'required|image|mimes:jpg,jpeg,png,gif',
            'description'=>'required|string|'
        ]);
        $medicine=Medicine::findOrFail($request->medicine_id);

        $image=$request->file('image');
        if (isset($image)){
            $imgName=Str::slug($request->name).uniqid().'.'.$image->getClientOriginalExtension();
            if (Storage::disk('public')->exists('medicine/'.$medicine->image)){
                Storage::disk('public')->delete('medicine/'.$medicine->image);
            }

            $img=Image::make($image)->resize(300,300)->stream();
            Storage::disk('public')->put('medicine/'.$imgName,$img);
        }

        $medicine->name=$request->name;
        $medicine->company_id=$request->company;
        $medicine->price=$request->price;
        if (isset($imgName)){
            $medicine->image=$imgName;
        }
        $medicine->description=$request->description;
        $medicine->save();

        return redirect()->back()->with('success','Successfully Updated Medicine');
    }
}
