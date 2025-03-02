<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemisionController extends Controller
{
    public function index(){
        return view('pages.remisiones.index');
    }
    public function create(){
        return view('pages.remisiones.create');
    }
}
