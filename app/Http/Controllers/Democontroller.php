<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demo;
class Democontroller extends Controller
{
   public  function demoMethod(){
   $test = Demo::all();
   dd($test);
   }
}
