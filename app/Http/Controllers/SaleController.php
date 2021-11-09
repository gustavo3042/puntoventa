<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Client;
use App\Product;
use App\Purchase;
use Illuminate\Http\Request;
use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;
use Carbon\Carbon;
use App\User;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function __construct(){

  $this->middleware('auth');
}

    public function index()
    {
        $sales = Sale::get();


        return view('admin.sale.index',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


$clients = Client::get();
$products = Product::get();
$purchases = Purchase::get();

return view('admin.sale.create',compact('clients','products','purchases'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
      $sale = Sale::create($request->all()+[

        'user_id' => auth()->user()->id,
        'sale_date' => Carbon::now('America/Santiago'),
      ]);


      foreach ($request->product_id as $key => $product) {

$results[] = array("product_id"=>$request->product_id[$key],
"quantity"=>$request->quantity[$key],
"price"=>$request->price[$key],
"discount"=>$request->discount[$key]);

      }

      $sale->saleDetails()->createMany($results);


      return redirect()->route('sale.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {

      $subTotal = 0;
      $saleDetails = $sale->saleDetails;

      foreach ($saleDetails as $saleDetail) {

        $subTotal += $saleDetail->quantity*$saleDetail->price-$saleDetail->quantity*$saleDetail->price*$saleDetail->discount/100;

      }

      return view('admin.sale.show',compact('sale','saleDetails','subTotal'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        $clients = Client::get();

return view('admin.sale.edit',compact('clients'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
