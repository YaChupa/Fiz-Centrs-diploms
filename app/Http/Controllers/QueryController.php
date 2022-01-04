<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;
use \Datetime;

class QueryController extends Controller
{
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
    


    function importData(Request $request){
       $this->validate($request, [
           'files' => 'required|file|mimes:xls,xlsx'
       ]);
       $the_file = $request->file('files');
       try{
           $spreadsheet = IOFactory::load($the_file->getRealPath());
           $sheet        = $spreadsheet->getActiveSheet();
           $row_limit    = $sheet->getHighestDataRow();
           $column_limit = $sheet->getHighestDataColumn();
           $row_range    = range( 1, $row_limit );
           $column_range = range( 'F', $column_limit );
           $startcount = 1;
           $data = array();
           foreach ( $row_range as $row ) {
               $data[] = [
                   'user_id' =>$sheet->getCell( 'B' . $row )->getValue(),
                   'name_surname' => $sheet->getCell( 'C' . $row )->getValue(),
                   'date_time' =>$sheet->getCell( 'D' . $row )->getValue(),
               ];
               $startcount++;
           }
           DB::table('schedule')->insert($data);
       } catch (Exception $e) {
           $error_code = $e->errorInfo[1];
           return back()->withErrors('There was a problem uploading the data!');
       }
       return back()->withSuccess('Great! Data has been successfully uploaded.');
   }
   
   
   
   public function makequery(Request $request){
       $s= explode(';', $request->schedule);
       
    
       $a = explode(' ', $s[1]);
       
       
       $userinfo = DB::table('users')->where('name',$s[0])->pluck('id');
         print_r ($userinfo);
        $query = new \App\Models\Query();
        
       
        request()->validate([
             'name_surname' => 'required',
             'COVID_Sertifikats' => 'required',
             'phone' => 'required',
            
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
            session()->flash('success', 'Vi zapisalis');
        }
        
         return redirect('query');
   
    }
    
    
    public function queries() {
         $user=auth()->user();
         $workerquieries= \App\Models\Query::where('user_id',$user->id)->get();

         
        return view('queries', [
            'queries' => $workerquieries]);        
    }
    
    
    public function deletequeries($id){
       $a= \App\Models\Query::where('id',$id)->get();       
       $idinfo =  $a[0]['user_id'];
       $datetimeinfo = $a[0]['date'].' '.$a[0]['time'];
      DB::table('schedule')->where('user_id',$idinfo)->where('date_time',$datetimeinfo)->update(['datetime_status'=>1]);
      \App\Models\Query::where('id',$id)->delete();   
      
       if($a){
            session()->flash('success', 'Udalili');
        }else {
            session()->flash('error', 'Ne dobavili clienta');
        }
      
      return redirect('queries');     

    } 

}
