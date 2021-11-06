@extends('layouts.admin')
@section('title','Detalles de compra')
@section('styles')

@endsection
@section('create')

@endsection
@section('options')

@endsection
@section('preference')

@endsection
@section('content')


  <style>


  .image-wrapper{

position: relative;
padding-bottom: 66.25%;

  }


  .image-wrapper img{

position: absolute;
object-fit: cover;
height: 50%;
width: 50%;
  }





  </style>

<div class="content-wrapper">



    <div class="page-header">
        <h3 class="page-title ">
            Detalles de compra
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li> <li class="breadcrumb-item"><a href="{{route('purchase.index')}}">Compras</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalles de compra</li>
            </ol>
        </nav>
    </div>



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                  <div class="form-group-row">

                    <div class="col-md-6 text-center">
                      <label class="form-control-label" for="nombre">Nombre</label>

              <p>       {{$purchase->provider->name}} </p>

                    </div>



           <div class="col-md-6 text-center">

            <label class="form-control-label" for="nombre">Rut</label>

        <p>  {{$purchase->provider->rut}} </p>

              </div>

                  </div>




                  <div class="form-group">


                    <h4 class="card-title">Detalles de Compra</h4>

                    <div class="table-responsive col-md-12">

                      <table id="detalles" class="table table-striped">

                        <thead>
                          <tr>

                            <th>Producto</th>
                            <th>Precio(PEN)</th>
                            <th>Cantidad</th>
                            <th>SubTotal(PEN)</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>


                      @foreach ($purchaseDetails as $purchaseDetail)

                          <td>{{$purchaseDetail->product->name}}</td>
                          <td>s/{{$purchaseDetail->price}}</td>
                          <td>{{$purchaseDetail->quantity}}</td>
                          <td>s/{{number_format
                            ($purchaseDetail->quantity*$purchaseDetail->price,
                            2)}}</td>


                      @endforeach

                        </tr>
                      </tbody>






                      <tfoot>
                        <tr>
                          <th colspan="4">
                            <p align="right">SubTotal.</p>

                          </th>

                          <th>

                              <p align="right"><span id="total">{{number_format($subTotal,2)}}</span></p>
                          </th>
                        </tr>


                        <tr id="dvOcultar">

                          <th colspan="4">

                            <p align="right">IVA:{{$purchase->tax}}%.</p>

                          </th>

                          <th>

                            <p align="right"><span id="total_impuesto">{{number_format($subTotal* $purchase->tax/100,2)}}</span></p>

                          </th>

                        </tr>

                      <tr>

                        <th colspan="4">

                          <p align="right"><span id="">TOTAL PAGAR.</span></p>

                        </th>

                        <th>

                          <p align="right">{{number_format($purchase->total,2)}}</p>

                        </th>
                      </tr>
                      </tfoot>


                      </table>

                    </div>




                  </div>


                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('purchase.index')}}" class="btn btn-primary float-right">Regresar</a>
                </div>
            </div>
        </div>





</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/profile-demo.js') !!}
{!! Html::script('melody/js/data-table.js') !!}
@endsection
