<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(){
        $orders=Order::with('user')->get();
        //dd($orders);
        return view('admin.pendingorder',compact('orders'));
    }

    public function delivered(){
        return view('admin.deliveredorder');
    }
    
    public function edit(){
        return view('admin.editorder');
    }
}
