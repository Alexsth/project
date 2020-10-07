<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryImage;
use Illuminate\Http\Request;
Use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategory = Category::all();
        return view('backend.category.index',compact('productCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCategory = Category::where('parent','0')->get();
        return view('backend.category.create',compact('productCategory'));
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
        Category::create([
            'title'=> $request->title,
            'description'=>$request->description,
            'parent'=>$request->parent,
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'meta_keywords'=>$request->meta_keywords,
            'slug'=> $slug
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('backend.category.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $productCategory = Category::where('parent','0')->get();
        return view('backend.category.update',compact('category','productCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $slug= Str::slug('$request->title', '-');
        $category->update([
            'title'=> $request->title,
            'description'=>$request->description,
            'parent'=>$request->parent,
            'meta_title=>$request->meta_title',
            'meta_description'=>$request->meta_description,
            'meta_keywords'=>$request->meta_keywords,
            'slug'=> $slug
        ]);
        return redirect()->route('categories.index');
    }
    public function image($id){
        $images = CategoryImage::where('category_id',$id)->get();
        return view('backend.category.image',compact('images', 'id'));
    }

    public function storeImg(Request $request){
        // dd($request->all());
        $image = time().'.'.$request->img->extension();
        $request->img->move(public_path('images'), $image);

        categoryImage::create([
            'category_id'=> $request->catId,
            'image'=>$image
        ]);
        return redirect()->route('categories.image',$request->catId);
    }

    public function destroyImg($id)
    {
        $catImg = CategoryImage::findOrFail($id);
        $catImg->delete();
        if(\File::exists(public_path('images/'.$catImg->image))){
            \File::delete(public_path('images/'.$catImg->image));
        }
        return redirect()-> route('categories.image',$catImg->category_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()-> route('categories.index');
    }
}
