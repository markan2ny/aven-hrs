<?php

namespace App\Imports;

use App\Employee;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'emp_no' => $row[0],
            'acct_no' => $row[1],
            'name' => $row[2],
            'date' =>  Carbon::createFromFormat('YYYY-mm-dd', $row[3]),
            'clockin' => $row[4],
            'clockout' => $row[5],
            'dept' => $row[6],
        ]);
    }
}
