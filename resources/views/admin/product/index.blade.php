@extends('layouts.admin')
@section('title','Info del Producto')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
      }
</style>

@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Productos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Principal</li>
            </ol>
        </nav>
    </div>


    <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Productos</h4>
                            {{--  <i class="fas fa-ellipsis-v"></i>  --}}
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a href="{{route('product.create')}}" class="dropdown-item">Agregar Lanas</a>
                                      <a href="{{route('product.persiana')}}" class="dropdown-item">Agregar Persianas</a>
                                      <a href="{{route('product.cordoneria')}}" class="dropdown-item">Agregar Cordonería</a>

                                  {{--  <button class="dropdown-item" type="button">Another action</button>
                                  <button class="dropdown-item" type="button">Something else here</button>  --}}
                                </div>
                              </div>
                        </div>

                        <div class="table-responsive">


                        <table id="order-listing" class="table">

                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nombre</th>
                              <th>Stock kilos</th>
                              <th>Estado</th>
                              <th>Categoria</th>
                              <th>Acciones</th>

                            </tr>
                          </thead>
                          <tbody>

                            @foreach ($products as $product)

                              <tr>
                                <th scope="row">{{$product->id}}</th>

                                <td>

                                  <a href="{{route('product.show',$product)}}">{{$product->name}}</a>

                                </td>

                                <td>{{$product->stock}}</td>
                                <td>{{$product->status}}</td>
                                  <td>{{$product->category->name}}</td>


                                    <td width='50px'>

                                      {!! Form::open(['route'=>['product.destroy',$product],'method'=>'DELETE']) !!}


                                      <a class="jsgrid-button jsgrid-edit-button" href="{{route('product.edit', $product)}}" title="Editar">
                                                                              <i class="far fa-edit"></i>
                                                                          </a>






                                      <button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                      </button>

                                      {!! Form::close() !!}


                                    </td>




                              </tr>

                            @endforeach

                          </tbody>

                        </table>

                        </div>


                    </div>
                    {{--  <div class="card-footer text-muted">
                        {{$products->render()}}
                    </div>  --}}
                </div>
            </div>
        </div>


</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection
