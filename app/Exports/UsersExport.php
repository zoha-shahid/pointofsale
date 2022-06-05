<?php

namespace App\Exports;

use App\Models\adduser;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings
{
    public function headings(): array
    {
        return DB::getSchemaBuilder()->getColumnListing('addusers');
    }
    public function collection()
    {
        return collect(adduser::all());
    }
}
