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
            session()->flash('success', 'Changed status');
        }
       return redirect('admin');     

       
       
    } 
    
}
