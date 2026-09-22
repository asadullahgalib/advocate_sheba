<?php

namespace App\Exports;

use App\Model\EmployeeAttendance;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AttendanceExport implements WithHeadings,FromArray
{
    protected $pdata;

    public function __construct(array $pdata)
    {
        $this->pdata = $pdata;
    }

    public function array(): array
    {
        return $this->pdata;
    }

    public function headings():array{
        return ['Account No','Date','On Duty','Off Duty','Clock In','Clock Out','Late','Early','Absent','Work Time'];
    }
}