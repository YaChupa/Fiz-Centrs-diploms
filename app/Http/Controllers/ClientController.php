<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function profiles(){
        $profiles = \App\Models\Client::get(); 
        return view('profiles',compact('profiles'));
    }
    
   /* public function create(){
        $categories = \App\Models\Category::get(); 
        return view('addclient',compact('categories'));
    }*/
    
   
    
     public function profile($id){
        $profile =  \App\Models\Client::where('id', $id) ->first();
      return view('profile', compact('profile'));
    }
    
    public function addclient(){
        
        $categoryinfo = \App\Models\Category::all();
        
        return view('addclient', [
            'categoryinfo' => $categoryinfo]);
    } 
    public function addclientDB(){
       
       
        $client = new \App\Models\Client();
        
          request()->validate([
             'name_surname' => 'required',
             'COVID_Sertifikats' => 'required',          
        ]);  
       
        
        $client->name_surname = request('name_surname');
        $client->category_id = request('category_id');
        $client->COVID_Sertifikats = request('COVID_Sertifikats');
        $client->description = request('description');
        $client->phone = request('phone');
        $client->user_email = request('user_email');
       
        $client->save();
        
       
         
        if($client){
            session()->flash('success', 'Jauna medicīnas karte tiek izveidota!');
        }else {
            session()->flash('error', 'Error');
        }
        return redirect('profiles');
                
       // return request()->all();
    }
    
    public function updateprofile($id){
         $updateprofile =  \App\Models\Client::where('id', $id) ->first();
         $categoryinfo = \App\Models\Category::all();
      //return view('updateprofile', compact('updateprofile','categoryinfo'));
      
         
         
      return view('updateprofile', [
            'updateprofile' => $updateprofile,
            'categoryinfo' => $categoryinfo]);
    } 
    
    public function updateprofilesubmit($id){
        // dd(request('category_id'));
        $client = \App\Models\Client::find($id);
        //$client = Client::find($id);
        
        request()->validate([
             'name_surname' => 'required',
             'COVID_Sertifikats' => 'required',          
        ]);  
        
        $client->name_surname = request('name_surname');
        $client->category_id = request('category_id');
        $client->COVID_Sertifikats = request('COVID_Sertifikats');
        $client->description = request('description');
        $client->phone = request('phone');
        $client->user_email = request('user_email');
       
        $client->save();
        
         if($client){
            session()->flash('success', 'Medicīnas karte tiek izmainīta!');
        }else {
            session()->flash('error', 'Error');
        }
        
       // return redirect('/profiles')->with('success','Izmeneno ');
       return redirect('profiles');
    } 
    
    public function userprofile() {
       $user=auth()->user();
       //echo $user;
       $clientinfo = \App\Models\Client::where('user_email',$user->email)->get();  
      // echo $clientinfo;
        //echo $clientinfo;
      $userprofile =[];
      if($clientinfo  == [] ){
      $userprofile = [];
      }if($clientinfo != []){
         $userprofile = $clientinfo; 
    }
    return view('userprofile',compact('userprofile'));
    }
}
