<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Datetime;

class MainController extends Controller
{

    public function index(){
        return view('index');
    }
    
    public function categories(){
         $categories = \App\Models\Category::get();
        return view('categories',compact('categories'));
    }
  
     public function category($name){
        $category =  \App\Models\Category::where('name', $name) ->first();
      return view('category', compact('category'));
    }
    
    public function query(){
         $categoryinfo = \App\Models\Category::all();
         
         $d = new DateTime();
         $time = $d->format('Y-m-d H:i:s');
         $scheduleinfo = DB::table('schedule')->where('datetime_status', 1)->where('date_time','>',$time)->get();
         $info = [];
         foreach($scheduleinfo as $item){
             
            // $info=$item->date_time;
             array_push($info,$item->name_surname . ';' . $item->date_time);
            // echo $item->user_id . '   -   ' . $item->date_time;
         } 

        return view('query', [          
            'categoryinfo' => $categoryinfo,
            'info' => $info,
            'scheduleinfo' => $scheduleinfo]);
       
    }

    public function makequery(Request $request){
       $s= explode(';', $request->schedule);
       $a = explode(' ', $s[1]);
    
       $userinfo = DB::table('users')->where('name',$s[0])->pluck('id');
         print_r ($userinfo);
        $query = new \App\Models\Query();
 
        request()->validate([
             'name_surname' => ['required','max:255'],
             'COVID_Sertifikats' => ['required','max:255'],
             'phone' => ['required','max:255'],
            ],[
             'name_surname.required' => 'Lauks – Vārds, Uzvārds - ir obligāts!',   
             'COVID_Sertifikats.required' => 'Lauks – COVID Sertifikats - ir obligāts!',  
             'phone.required' => 'Lauks – Tālrunis - ir obligāts!',
             'name_surname.max' => 'Lauks - Vārds, Uzvārds - nedrīkst pārsniegt 255 rakstzīmes!',
             'COVID_Sertifikats.max' => 'Lauks - COVID Sertifikats - nedrīkst pārsniegt 255 rakstzīmes!',
             'phone.max' => 'Lauks - Tālrunis - nedrīkst pārsniegt 255 rakstzīmes!',
            ]);  
 
        $query->name_surname = $request->name_surname;
        $query->phone = $request->phone;
        $query->category_id = $request->category_id;
        $query->COVID_Sertifikats = $request->COVID_Sertifikats;
        $query->description = $request->description;   
        $query->date = $a[0];
        $query->time = $a[1];    
        $query->user_id = $userinfo[0];

         
        $query->save();
        
        $changestatus = DB::table('schedule')->where('name_surname',$s[0])->where('date_time',$s[1])->update(['datetime_status'=>0]);
        
        
        if($query){
            session()->flash('success', 'Jūs esat pieteicies pie speciālista!');
        }
        
         return redirect('query');
   
    }
       
    
}
