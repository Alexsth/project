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
            'Title',
            'Intro_desc',
            'Price'

        ];
    }
    public function collection()
    {
        if($this->from != '' && $this->to != '')
        $product = Product::select('products.id', 'products.title', 'products.intro_desc', 'products.price')
        ->whereBetween('products.price', [$this->from, $this->to])->get();
        else
        $product = Product::all()
        ->select('products.id', 'products.title', 'products.intro_desc', 'products.price')->get();
        return $product;
    }
}
