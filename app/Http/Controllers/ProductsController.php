<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Product;
use App\User;
use App\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'DESC')->get();

        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        // Handle File Upload
        if($request->hasFile('photo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('products-thumbnail', $fileNameToStore, 'uploads');
            //$path = Storage::putFileAs(

        } else {
            $fileNameToStore = 'noimage.jpg';
        }    

        $product->photo          = $fileNameToStore;
        $product->name           = $request->name;
        $product->slug           = $request->slug;
        $product->seo_title      = $request->seo_title;
        $product->meta_description = $request->meta_description;
        $product->description    = $request->description;
        $product->affiliate_link = $request->description;
        $product->user_id        = auth()->user()->id;

        $product->save();

        $product->category()->attach($request->get('categories'));
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product    = Product::find($id);
        $categories = Category::orderBy('name', 'ASC')->get();

        return view('products.edit', compact('product', 'categories'));
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
        $product    = Product::find($id);

        $product->fill($request->all())->save();

        $iduser = auth()->user()->id;

        $product->fill(['user_id' => $iduser])->save();

        // Handle File Upload
        if($request->hasFile('photo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('products-thumbnail', $fileNameToStore, 'uploads');
            //$path = Storage::putFileAs(

        } else {
            $fileNameToStore = 'noimage.jpg';
        }    

        $product->fill(['photo' => $fileNameToStore])->save();

        $product->category()->sync($request->get('categories'));

        return redirect('/');
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

    public function viewProduct($id){
        $product = Product::find($id);

        $link    = $product->affiliate_link;

        if(auth()){
            return view('redirect_to_store');
        }{
            
        }

        dd($link);
    }   
}
