<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function home() {
        return view('dashboard');
    }

    public function oferta_academica() {
        return view('dashboard');
    }

    public function institucion() {
        return view('dashboard');
    }

    public function formacion_integral() {
        return view('dashboard');
    }

    public function servicios_universitarios() {
        return view('dashboard');
    }

    public function informacion_publica() {
        return view('dashboard');
    }
}
