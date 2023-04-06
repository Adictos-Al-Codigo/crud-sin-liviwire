<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function view(){
        return view('Pages.view_ventas');
    }
}
