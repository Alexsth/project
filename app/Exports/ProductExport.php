<?php

namespace App\Exports;

use App\models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;



class ProductExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection,
    */
    protected $from;
    protected $to;
    public function __construct($from='', $to='')
    {
    $this->from = $from;
    $this->to = $to;
    }
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
        $product = Product::select('id', 'title', 'intro_desc', 'price')
        ->whereBetween('price', [$this->from, $this->to])->get();
        else
        $product = Product::select('id', 'title', 'intro_desc', 'price')->get();
        return $product;
    }
}
