<?php

namespace App\Exports;

use App\models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection,WithHeadings
    */

    public function headings(): array
    {
        return [
            'Id',
            'Product',
            'Status',

        ];
    }
    public function collection()
    {
        return Product::all();
    }
}
