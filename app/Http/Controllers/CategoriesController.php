<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Category;
use App\User;
use App\Product;


class CategoriesController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');

        $this->middleware('auth')->except('show');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;

        // Handle File Upload
        if($request->hasFile('imagen')){
            // Get filename with the extension
            $filenameWithExt = $request->file('imagen')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imagen')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('imagen')->storeAs('categories-thumbnail', $fileNameToStore, 'uploads');
            //$path = Storage::putFileAs(

        } else {
            $fileNameToStore = 'noimage.jpg';
        }    

        $category->imagen     = $fileNameToStore;
        $category->name       = $request->name;
        $category->slug       = $request->slug;
        $category->seo_title  = $request->seo_title;
        $category->meta_description = $request->meta_description;
        $category->description= $request->description;
        $category->user_id= auth()->user()->id;

        $category->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = DB::table('categories')
                    ->where('slug', '=', $slug)->get();

        $categoryObj = Category::where('slug','=',$slug)->first();

        $category_id;

        foreach( $category as $val ){
            $category_id = $val->id;
        }
        
        
        $products  = DB::table('products')
                    ->join('category_product', 'products.id', '=', 'category_product.product_id')
                    ->join('categories', 'category_product.category_id', '=', 'categories.id')
                    ->select('products.*')
                    ->where('categories.id', '=', $category_id)->get();

        //dd($categoryObj);

        return view('categories.show')
               ->with('category', $category)
               ->with('products', $products)
               ->with('categoryObj', $categoryObj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
    
        return view('categories.edit')->with('category', $category);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        // Handle File Upload
        if($request->hasFile('imagen')){
            // Get filename with the extension
            $filenameWithExt = $request->file('imagen')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imagen')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('imagen')->storeAs('categories-thumbnail', $fileNameToStore, 'uploads');
            //$path = Storage::putFileAs(

        } else {
            $fileNameToStore = 'noimage.jpg';
        }    

        $category->imagen     = $fileNameToStore;
        $category->name       = $request->name;
        $category->slug       = $request->slug;
        $category->seo_title  = $request->seo_title;
        $category->meta_description = $request->meta_description;
        $category->description= $request->description;
        $category->user_id= auth()->user()->id;

        $category->save();
        
        return redirect('/');
    }

    public function updateCategory(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
