@extends('layouts.admin')
@section('title','información del producto')
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
        <h3 class="page-title">
            {{$product->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li> <li class="breadcrumb-item"><a href="{{route('product.index')}}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
        </nav>
    </div>



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">

                            <div class="image-wrapper">


                              <img class="rounded-circle mb-3" src="{{asset('image/'.$product->image)}}" alt="">


                              </div>


                                <div class="d-flex justify-content-between">
                                </div>
                            </div>

                            <div class="border-bottom py-4">
                                <div class="list-group">

                                  <div class="py-4">

                                <p class="clearfix">
                                    <span class="float-left">
                                        Status
                                    </span>
                                    <span class="float-right text-muted">
                                        {{$product->status}}
                                    </span>
                                </p>



                                <p class="clearfix">
                                    <span class="float-left">
                                        Proveedor
                                    </span>
                                    <span class="float-right text-muted">

                                      <a href="{{route('provider.show',$product->provider->id)}}">{{$product->provider->name}}</a>




                                    </span>
                                </p>


                                <p class="clearfix">
                                    <span class="float-left">
                                      Productos por  Categoria
                                    </span>
                                    <span class="float-right text-muted">

                                        <a href="">{{$product->category->name}}</a>





                                    </span>
                                </p>



                              </div>
                                        @if ($product->status == 'ACTIVE')

                                            <a href="" class="btn btn-success btn-block">Activo</a>

                                          @else

                                            <a href="" class="btn btn-danger btn-block">Desactivado</a>

                                        @endif



                                </div>
                            </div>


                        </div>

                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Información del producto</h4>
                                </div>
                            </div>


                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">



                                    <div class="form-group col-md-6">
                                        <strong><i class="fab fa-product-hunt mr-1"></i> Nombre Producto</strong>
                                        <p class="text-muted">
                                            {{$product->name}}
                                        </p>
                                        <hr>




                                        <strong><i class="fas fa-address-card mr-1"></i> Stock</strong>
                                        <p class="text-muted">
                                            {{$product->stock}}
                                        </p>


                                        <strong><i class="fas fa-envelope mr-1"></i> Código de barras</strong>
                                      <p class="text-muted">
                                          {{$product->code}}
                                      </p>
                                      <hr>

                                    </div>

                                    <div class="form-group col-md-6">


                                      <strong>
                                          <i class="fas fa-mobile mr-1"></i>
                                          Telefono Proveedor</strong>
                                      <p class="text-muted">
                                          {{$product->provider->phone}}
                                      </p>
                                      <hr>



                                        <strong><i class="fas fa-envelope mr-1"></i> Correo</strong>
                                        <p class="text-muted">
                                            {{$product->provider->email}}
                                        </p>
                                        <hr>

                                        <strong><i class="fas fa-map-marked-alt mr-1"></i>Precio Producto</strong>
                                        <p class="text-muted">
                                            {{$product->price}}
                                        </p>
                                        <hr>
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('product.index')}}" class="btn btn-primary float-right">Regresar</a>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/profile-demo.js') !!}
{!! Html::script('melody/js/data-table.js') !!}
@endsection
