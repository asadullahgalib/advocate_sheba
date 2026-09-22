<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromView;

class EmployeeExport implements FromView
{
    protected $pdata;

    public function __construct(array $pdata)
    {
        $this->pdata = $pdata;
    }

    public function view(): View
    {
        return view('backend.hrm.payroll.excel.emp_report_excel', [
            'pdata' => $this->pdata
        ]);
    }
}
