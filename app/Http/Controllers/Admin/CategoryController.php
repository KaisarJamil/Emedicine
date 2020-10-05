<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.addcategory');
    }

    public function categorylist(){
        $categories=Category::all();
        return view('admin.categorylist',compact('categories'));
    }

    public function store(Request $request){
        $val=Validator::make($request->all(),[
            'name'=>'required|string|max:191',
        ]);

        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        $category=new Category();
        $category->name=$request->name;
        $category->save();

        return redirect()->back()->with('success','Successfully Added Category');

    }

    public function destroy($id){
        $category=Category::findOrFail($id);
        if (isset($category->id)){
            $category->delete();
            return redirect()->back()->with('success','Successfully Deleted the Category');
        }
        return redirect()->back();
    }
}
