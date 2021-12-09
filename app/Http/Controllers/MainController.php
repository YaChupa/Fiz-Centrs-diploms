<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function query(){
        return view('query');
    } 
    
     public function categories(){
         $categories = \App\Models\Category::get();
        return view('categories',compact('categories'));
    }
    
     public function category($code){
        $category =  \App\Models\Category::where('code', $code) ->first();
      return view('category', compact('category'));
    }
    
     /*public function addclient(){
        return view('addclient');
    } */
    
    /* public function profiles(){
        $profiles = \App\Models\Client::get(); 
        return view('profiles',compact('profiles'));
    }*/
    
   /*public function profile($category, $profile = null){
        return view('profile', ['profile' => $profile]);
    }*/
    
   /*  public function profile($id){
        $profile =  \App\Models\Client::where('id', $id) ->first();
      return view('profile', compact('profile'));
    }*/
    
    /*public function addclientDB(){
         //public function addclientDB(Request $addclient){
       // $cleintId = session('orderId');
        //if(is_null($cleintId)){
          //  return redirect()->route('index');
        //}
       // dd($addclient->all());
       /* $order = \App\Client::find($cleintId);
        $order->name_surname = $addclient->name_surname;
        $order->category_id = $addclient->category_id;
        $order->COVID_Sertifikats = $addclient->COVID_Sertifikats;
        $order->description = $addclient->description;
        $order->save();*/
       // $newclient = $addclient;
       /* $client = new ClientController();
        
        $client->name_surname = request('name_surname');
        $client->category_id = request('category_id');
        $client->COVID_Sertifikats = request('COVID_Sertifikats');
        $client->description = request('description');
       
        $client->save();
        
        return redirect('/profiles');
                
       // return request()->all();
        }*/
       
    
}
