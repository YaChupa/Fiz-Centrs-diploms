<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    
    public function admin()
    {
         $users = \App\Models\User::get(); 
        // echo $users;
        return view('admin',compact('users'));
    }
    
    public function changestatus($id){
       $a= \App\Models\User::where('id',$id)->get();          
       $idinfo =  $a[0]['id'];
       $userstatus = $a[0]['user_status'];
       if($userstatus == 0){
           DB::table('users')->where('id',$idinfo)->update(['user_status'=>2]);
       }else{
           DB::table('users')->where('id',$idinfo)->update(['user_status'=>0]);
       }
       
        if($a){
            session()->flash('success', 'Status tiek izmainīts');
        }
       return redirect('admin');     

       
       
    } 
    public function addcategory(){
        return view('addcategory');
    }
    
    
     public function addcategoryDB(){
        
       $category = new \App\Models\Category();
        
          request()->validate([
             'name' => ['required','max:255'],
             'description' => 'required' 
        ],[
             'name.required' => 'Lauks – Nosaukums - ir obligāts!',   
             'description.required' => 'Lauks – Apraksts - ir obligāts!',  
             'name.max' => 'Lauks - Nosaukums - nedrīkst pārsniegt 255 rakstzīmes!',
            ]);  
          
         
       
        $category->name = request('name');
        $category->description = request('description');
        $category->save();
        
        if($category){
            session()->flash('success', 'Pakalpojums pievienots!');
        }
        
       return redirect('categories');
                
    }
}
