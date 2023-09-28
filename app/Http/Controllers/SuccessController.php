<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function registerSuccess(){
        return view('success/registersuccess');
    }
}
