<?php

namespace App\Exports;

use App\Model\EmployeeAttendance;
use App\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromView;

class AttendanceExport implements FromView
{
    protected $pdata;

    public function __construct(array $pdata)
    {
        $this->pdata = $pdata;
    }

    public function view(): View
    {
        return view('backend.employees.attend.pdf.excel_file', [
            'pdata' => $this->pdata
        ]);
    }
}