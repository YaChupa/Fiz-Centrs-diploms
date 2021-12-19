<?php

namespace App\Imports;

use App\Models\Query;
use Maatwebsite\Excel\Concerns\ToModel;

class ScheduleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Query([
           'user_id'     => $row[1],
           'date_time'    => $row[2], 
        ]);
    }
}
