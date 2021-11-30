<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Provider;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF; //importamos aqui con este codigo la utilizacion de pdf

class PurchaseController extends Controller
{



  public function __construct(){

    $this->middleware('auth');
    $this->middleware('can:purchase.create')->only(['create','store']);
    $this->middleware('can:purchase.index')->only(['index']);
    $this->middleware('can:change.status.purchases')->only(['change_status']);
    $this->middleware('can:purchase.pdf')->only(['pdf']);
      $this->middleware('can:upload.purchase')->only(['upload']);

     $this->middleware('can:purchase.show')->only(['show']);








  }


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

    // Auth::user()->id;
    $purchase = Purchase::create($request->all()+[
      'image' => "Images",
      'user_id' => auth()->user()->id,
      'purchase_date' => Carbon::now('America/Santiago'),

    ]);


    foreach ($request->product_id as $key => $product) {

$results[] =  array("product_id"=>$request->product_id[$key],
"quantity"=>$request->quantity[$key],"price"=>$request->price[$key]);

    }

    $purchase->purchaseDetails()->createMany($results);

return redirect()->route('purchase.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {

      $subTotal = 0;
      $purchaseDetails = $purchase->purchaseDetails; // con purchaseDetails accedo a todos los datos q estan relacionados con la tabla pruchase en este caso es purchaseDetails

      foreach ($purchaseDetails as $purchaseDetail) {

        $subTotal += $purchaseDetail->quantity * $purchaseDetail->price;

      }

        return view('admin.purchase.show',compact('purchase','purchaseDetails','subTotal'));
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



    public function pdf(Purchase $purchase){

      $subTotal = 0;
      $purchaseDetails = $purchase->purchaseDetails; // con purchaseDetails accedo a todos los datos q estan relacionados con la tabla pruchase en este caso es purchaseDetails

      foreach ($purchaseDetails as $purchaseDetail) {

        $subTotal += $purchaseDetail->quantity * $purchaseDetail->price;

      }

      $pdf = PDF::loadView('admin.purchase.pdf',compact('purchase','subTotal','purchaseDetails'));
        return $pdf->download('Reporte_de_compra_'.$purchase->id.'.pdf');


    }


          public function upload(Request $request, Purchase $purchase){

    //

          }


          public function change_status(Purchase $purchase){


            if ($purchase->status == 'VALID') {


            $purchase->update(['status'=>'CANCELED']);

            return redirect()->back();


          }else{


              $purchase->update(['status'=>'VALID']);
              return redirect()->back();


          }


          }

}
