@extends('layouts.admin')
@section('title','Info de Ventas')
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
            Ventas
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Gestion de Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Principal</li>
            </ol>
        </nav>
    </div>


    <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Ventas</h4>
                            {{--  <i class="fas fa-ellipsis-v"></i>  --}}
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                  <a href="{{route('sale.create')}}" class="dropdown-item">Agregar</a>

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
                              <th>Fecha</th>
                              <th>Total</th>
                              <th>Estado</th>
                              <th style="width:50px;">Acciones</th>



                            </tr>
                          </thead>
                          <tbody>

                            @foreach ($sales as $sale)

                              <tr>
                                <th scope="row">

                                  <a href="">  {{$sale->id}}</a>


                                </th>

                                <td>

                                    <a href=""></a>



                                </td>
                                  <td> </td>
                                    <td> </td>



                                    <td width='50px'>



                                        <!--
                                      <a class="jsgrid-button jsgrid-edit-button" href="" title="Editar">
                                                                              <i class="far fa-edit"></i>
                                                                          </a>
                                                                        -->
                                            <!--
                                      <button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                      </button> -->


                                      <a href="#" class="jsgrid-button jsgrid-edit-button"><i class="fas fa-file-pdf"></i></a>

                                      <a href="#" class="jsgrid-button jsgrid-edit-button"><i class="fas fa-print"></i></a>

                                      <a href="" class="jsgrid-button jsgrid-edit-button"><i class="fas fa-eye"></i></a>




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
