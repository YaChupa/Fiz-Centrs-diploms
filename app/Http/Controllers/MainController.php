<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    
    
     public function categories(){
         $categories = \App\Models\Category::get();
        return view('categories',compact('categories'));
    }
    
     public function category($code){
        $category =  \App\Models\Category::where('code', $code) ->first();
      return view('category', compact('category'));
    }
    
    
       
    
}
