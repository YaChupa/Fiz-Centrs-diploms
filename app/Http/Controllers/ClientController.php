<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function profiles(){
        $profiles = \App\Models\Client::get(); 
        return view('profiles',compact('profiles'));
    }
    
     public function deleteprofile($id){
        //\App\Models\Client::find($id)->delete();
        $deleteprofile =  \App\Models\Client::find($id);
        $deleteprofile->delete();
         
       return redirect('/profiles');
        //dd('hello');
    } 
    
     public function profile($id){
        $profile =  \App\Models\Client::where('id', $id) ->first();
      return view('profile', compact('profile'));
    }
    
    public function addclient(){
        return view('addclient');
    } 
    public function addclientDB(){
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
       $client = new \App\Models\Client();
        
        $client->name_surname = request('name_surname');
        $client->category_id = request('category_id');
        $client->COVID_Sertifikats = request('COVID_Sertifikats');
        $client->description = request('description');
       
        $client->save();
        
        return redirect('/profiles');
                
       // return request()->all();
    }
    
    public function updateprofile($id){
         $updateprofile =  \App\Models\Client::where('id', $id) ->first();
      return view('updateprofile', compact('updateprofile'));
    } 
    
    public function updateprofilesubmit($id){
        
        $client = \App\Models\Client::find($id);
        
        $client->name_surname = request('name_surname');
        $client->category_id = request('category_id');
        $client->COVID_Sertifikats = request('COVID_Sertifikats');
        $client->description = request('description');
       
        $client->save();
       // return redirect('/profiles')->with('success','Izmeneno ');
       return redirect('/profiles');
    } 
    
   
    
    
}
