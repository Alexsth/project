<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
Use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $from = isset($request->from) ? $request->from: '';
        $to = isset($request->to) ? $request->to : '';
        if($from != '' && $to != '')
        $product = Product::whereBetween('price', [$from, $to])->get();
        else
        $product = Product::all();

        return view('backend.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCategory = Category::all();
        return view('backend.product.create',compact('productCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug= Str::slug($request->title, '-');
        $products = Product::create([
            'title'=> $request->title,
            'intro_desc'=> $request->intro_desc,
            'description'=>$request->description,
            'price'=> $request->price,
            'discount'=> $request->discount,
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'meta_keywords'=>$request->meta_keywords,
            'slug'=> $slug
        ]);
        foreach($request->categories as $cat){
            ProductCategory::create([
                'product_id'=>$products->id,
                'category_id'=>$cat,
            ]);
        }
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $productCategory = Category::all();
        $selectedProductCategory = ProductCategory::where('product_id', $product->id)->pluck('category_id')->toArray();
        // dd($selectedProductCategory->toArray());
        return view('backend.product.update',compact('product','productCategory', 'selectedProductCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $slug= Str::slug('$request->title', '-');
        $product->update([
            'title'=> $request->title,
            'intro_desc'=> $request->intro_desc,
            'description'=>$request->description,
            'price'=> $request->price,
            'discount'=> $request->discount,
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'meta_keywords'=>$request->meta_keywords,
            'slug'=> $slug
        ]);
        ProductCategory::where('product_id', $product->id)->delete();
        foreach($request->categories as $cat){
            ProductCategory::create([
                'product_id'=>$product->id,
                'category_id'=>$cat,
            ]);
        }
        return redirect()->route('products.index');

    }

    public function excelExport(Request $request)
    {
        $from = isset($request->from) ? $request->from: '';
        $to = isset($request->to) ? $request->to : '';

        return Excel::download(new ProductExport($from,$to), 'product.xlsx');

    }

    public function PDFExport(Request $request){

        $from = isset($request->from) ? $request->from: '';
        $to = isset($request->to) ? $request->to : '';
        $pdf = Excel::download(new ProductExport($from,$to), 'product.pdf');
        Storage::put(('public/pdf/product.pdf'), $pdf);
        return $pdf;
    }

    public function addImage($id){
        $images = ProductImage::where('product_id',$id)->get();
        // dd($images);
        return view('backend.product.image',compact('images', 'id'));
    }

    public function storeImg(Request $request){
        // dd($request->all());
        $image = time().'.'.$request->img->extension();
        $request->img->move(public_path('images'), $image);

        ProductImage::create([
            'product_id'=> $request->proId,
            'product_img'=>$image
        ]);
        return redirect()->route('products.image',$request->catId);
    }
    public function deleteImg($id)
    {
        $proImg = ProductImage::findOrFail($id);
        $proImg->delete();
        if(\File::exists(public_path('images/'.$proImg->product_img))){
            \File::delete(public_path('images/'.$proImg->product_img));
        }
        return redirect()-> route('products.image',$proImg->product_id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
