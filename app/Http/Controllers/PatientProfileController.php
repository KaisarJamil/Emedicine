<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientProfileController extends Controller
{
    public function index(){
        return view('patient.profile');
    }

    public function pendingOrder(){
        return view('patient.pendingorder');
    }

    public function orderHistory(){
        return view('patient.profile');
    }

    public function changePass(){
        dd("woring");
        return view('patient.changepass');
    }
}
