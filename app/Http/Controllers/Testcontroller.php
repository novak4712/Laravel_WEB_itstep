<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Testcontroller extends Controller
{
   public function show(){
       return view('myview');
   }
}
