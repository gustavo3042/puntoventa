<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Provider;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use Carbon\Carbon;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $purchases= Purchase::get();

        return view('admin.purchase.index',compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

$providers = Provider::get();
$products = Product::get();
return view('admin.purchase.create',compact('providers','products'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {

    //  Auth::user()->id;
    $purchase = Purchase::create($request->all()+[
      'image' => "Images",
      'user_id' => 1,
      'purchase_date' => Carbon::now('America/Santiago'),

    ]);


    foreach ($request->product_id as $key => $product) {

$results[] =  array("product_id"=>$request->product_id[$key],
"quantity"=>$request->quantity[$key],"price"=>$request->price[$key]);

    }

    $purchase->purchaseDetails()->createMany($results);

return redirect()->route('purchases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show',compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {

      $providers = Provider::get();
        return view('admin.purchase.edit',compact('purchase','providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Purchase $purchase)
    {
      $purchase->update($request->all());

      return redirect()->route('purchases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
      $purchase->delete();

      return redirect()->route('purchases.index');
    }
}
