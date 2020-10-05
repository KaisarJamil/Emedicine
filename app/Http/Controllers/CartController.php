<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\Order;
use App\Shipping_address;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function cart(){
        $cartCollections = \Cart::getContent();
        $totals = \Cart::getTotal();
        return view('cart',compact('cartCollections','totals'));
    }
    public function remove($id){
        \Cart::remove($id);
        return redirect(url()->previous());
    }
    public function addtocart($id){
        $medicine = Medicine::findOrFail($id);
        $cmp = $medicine->company->name;
        //dd($medicine)
        \Cart::add(array(
            'id' => $medicine->id, // inique row ID
            'name' => $medicine->name,
            'price' => $medicine->price,
            'quantity' => 1,
            'attributes' => array(
                'image'=>$medicine->image,
                'company_name'=>$cmp
            )
        ));
        return redirect()->back();
    }

    public function showCart()
    {
        $cartCollections = \Cart::getContent();
        $total = \Cart::getTotal();
        //dd($cartCollections);
    }

    public function checkout(){
        $cartCollections = \Cart::getContent();
        $totals = \Cart::getTotal();
        return view('checkout',compact('cartCollections','totals'));
    }

    public function confirmcheckout(Request $request){
        $val=Validator::make($request->all(),[
            'city'=>'required|string|max:30',
            'zipcode'=>'required|string|max:20',
            'house'=>'required|string|max:30',
            'road'=>'required|string|max:30',
        ]);

        if ($val->fails()){
            return redirect()->back()->withInput()->withErrors($val);
        }

        $shipping=new Shipping_address();
        $shipping->user_id= auth()->id();
        $shipping->city=$request->city;
        $shipping->zipcode=$request->zipcode;
        $shipping->house=$request->house;
        $shipping->road=$request->road;
        $shipping->save();

        $cartCollections = \Cart::getContent();
        $totals = \Cart::getTotal();
        $totalQuantity = \Cart::getTotalQuantity();
        $name =[];
        foreach ($cartCollections as $pd){
            $name[] =[
                'name'=>$pd->name,
                'quantity'=>$pd->quantity,
            ];
        }
        //dd($name);
        $order =new Order();
        $order->price=$totals;
        $order->quantity=$totalQuantity;
        $order->medicine_list=json_encode($name);
        $order->user_id=Auth::id();
        $order->save();

        return redirect()->back()->with('success','Successfully Ordered');

    }
}
