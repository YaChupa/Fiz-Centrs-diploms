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
    
    public function __construct()
    {
        $this->middleware('auth');
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
            session()->flash('success', 'Pieraksts tiek izdzēsts!');
        }else {
            session()->flash('error', 'Error');
        }
      
      return redirect('queries');     

    } 

}
