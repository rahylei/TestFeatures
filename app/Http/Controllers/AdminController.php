<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function layout(){
        return view('Admin.layout');
    }
    
    public function module(Module $module){
        return view('Admin.nav-module')->with('module', $module);
    }
}
