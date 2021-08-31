<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $products = Product::get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


      $categories = Category::get();

      $providers = Provider::get();

          return view('admin.product.create',compact('categories','providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {


/*

if ($request->hasFile('image')) {

$file = $request->file('image');
$image_name = time().'_'.$file->getClientOriginalName();
$file->move(public_path("/image"),$image_name);


}


$product = Product::create($request->all()+[
'image' => $image_name,

]);


*/



if ($request->file('file')) {

$file = $request->file('file');
$image_name = time().'_'.$file->getClientOriginalName();
$file->move(public_path("/image"),$image_name);

}
/*
$file = $request->file('file');
$imagen = time()."_".$file->getClientOriginalName();
$file->move(public_path("/image"),$imagen);

*/

$product = Product::create($request->all() +[

'image' => $image_name

]);

$product->update(['code' => $product->id]);



return redirect()->route('product.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
          return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
            $categories = Category::get();

            $providers = Provider::get();


          return view('admin.product.edit',compact('product','categories','providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Product $product)
    {


      if ($request->file('file')) {

      $file = $request->file('file');
      $image_name = time().'_'.$file->getClientOriginalName();
      $file->move(public_path("/image"),$image_name);


      }


       $product->update($request->all()+[
      'image' => $image_name,


      ]);




$product->update($request->all());






      return redirect()->route('product.index',$product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
return redirect()->route('product.index');

    }
}
