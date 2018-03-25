<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicController extends Controller
{
    public function showDesksList(){
        return view('desks.index');
    }
}
