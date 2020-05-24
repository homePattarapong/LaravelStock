<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function blank(){
        return view('backend.pages.blank');
    }
}
