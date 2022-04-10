<?php
namespace App\Exports;
use Closure;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;


class salesSummaryExport implements FromCollection, WithHeadings, WithColumnWidths

{

    use Exportable;

    private $exportArray;

    /**
     * @param array $exportArray
     */
    public function __construct(array $exportArray = [])
    {
        $this->exportArray = $exportArray;
    }

    public function headings(): array
    {
        return [
            'Invoice',
            'Date',
            'Sales Person',
            'Coustomer',
            'Qty',
            'Payment Price',
        ];


    }

    /**
     * @return Collection
     */
    public function collection()
    {

        return collect($this->exportArray);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 25,
            'B' => 25,
            'C' => 25,
            'D' => 25,
            'E' => 25,
            'F' => 25,
            
        ];
    }





}

