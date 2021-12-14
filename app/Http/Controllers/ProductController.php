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


     public function __construct(){

       $this->middleware('auth');
       $this->middleware('can:product.create')->only(['create','store']);
       $this->middleware('can:product.index')->only(['index']);
       $this->middleware('can:product.edit')->only(['edit','update']);
        $this->middleware('can:product.show')->only(['show']);
         $this->middleware('can:product.destroy')->only(['destroy']);
          $this->middleware('can:change.status.products')->only(['change_status']);




     }


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
    public function create(Product $product)
    {


      $categories = Category::where('name','=','lanas')->get();

      $providers = Provider::get();





          return view('admin.product.create',compact('categories','providers','product'));
    }


    public function persiana(Product $product)
    {


      $categories = Category::where('name','=','Persianas')->get();

      $providers = Provider::get();





          return view('admin.product.persiana',compact('categories','providers','product'));
    }



    public function cordoneria(Product $product)
    {


      $categories = Category::where('name','=','Cordoneria')->get();

      $providers = Provider::get();





          return view('admin.product.cordoneria',compact('categories','providers','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request,Product $product)
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


      public function upload(){

//

      }


      public function change_status(Product $product){


        if ($product->status == 'ACTIVE') {


        $product->update(['status'=>'DEACTIVATED']);

        return redirect()->back();


      }else{


          $product->update(['status'=>'ACTIVE']);
          return redirect()->back();


      }


      }
}
