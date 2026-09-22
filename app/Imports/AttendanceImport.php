<?php

namespace App\Imports;

use App\Model\EmployeeAttendance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AttendanceImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new EmployeeAttendance([
            'ac_no'         => $row['ac_no'],
            'date'          => date("Y-m-d",strtotime($row['date'])),
            'on_duty'       => $row['on_duty'],
            'off_duty'      => $row['off_duty'], 
            'clock_in'      => $row['clock_in'], 
            'clock_out'     => $row['clock_out'], 
            'late'          => $row['late'], 
            'early'         => $row['early'], 
            'absent'        => $row['absent'], 
            'work_time'     => $row['work_time'], 
        ]);
    }
}
