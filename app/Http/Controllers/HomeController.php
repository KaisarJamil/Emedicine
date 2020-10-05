<?php

namespace App\Http\Controllers;

use App\Company;
use App\Medicine;
use App\Message;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $medicines=Medicine::inRandomOrder()->limit('8')->get();
        return view('welcome',compact('medicines'));
    }

    public function search(Request $request){
       // dd($request);
        $search = Validator::make($request->all(),[
           'search'=>'required|string|max:191'
        ]);

        $medicines = Medicine::where('name','LIKE',"%{$request->search}%")->get();
        return view('search',compact('medicines'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function company($id){
        $company=Company::findOrFail($id);
        $medicines=$company->medicines;
        return view('company',compact('medicines'));
    }

    public function message(Request $request){
        $val=Validator::make($request->all(),[
            'name'=>'required|string|max:50',
            'email'=>'required|string|max:50',
            'message'=>'required|string|max:191',
        ]);
        if ($val->fails()){
            return redirect()->back()->withErrors($val)->withInput();
        }

        $message=new Message();
        $message->name=$request->name;
        $message->email=$request->email;
        $message->message=$request->message;
        $message->save();

        return redirect()->back();
    }

}
