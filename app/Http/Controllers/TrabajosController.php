<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajosController extends Controller
{
    public function index()
    {
        return view('pages.trabajos.index');
    }
}
