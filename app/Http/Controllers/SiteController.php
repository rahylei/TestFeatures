<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class SiteController extends Controller
{
    public function home(){
        return view('site.home');
    }

    public function module(Module $module){
        return view('site.nav-module')->with('module', $module);
    }
}
