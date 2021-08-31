@extends('layouts.admin')
@section('title','Gestión de categorías')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
      }
</style>

@endsection

@section('create')

  <li class="nav-item d-none d-lg-flex">

<a class="nav-link" href="{{route('provider.create')}}">

<span class="btn btn-primary">Crear nuevo </span>
</a>
  </li>

@endsection

@section('options')

@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Proveedores
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Proveedores</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">




                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Proveedores</h4>
                        {{--  <i class="fas fa-ellipsis-v"></i>  --}}
                        <div class="btn-group">
        <a type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="{{route('provider.create')}}" class="dropdown-item" type="button">Agregar</a>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
                    </div>

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Correo/Electronico</th>


                                    <th>Telefono/Celular</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($providers as $provider)
                                  <tr>
                                    <th scope="row"> {{$provider->id}}</th>

                                    <td>
                                      <a href="{{route('provider.show',$provider)}}"> {{$provider->name}}</a>

                                    </td>


                                    <td>{{$provider->email}}</td>





                                    <td>{{$provider->phone}}</td>

                                    <td width="50px">




                      {!! Form::open(['route'=>['provider.destroy',$provider],'method'=>'DELETE']) !!}


                      <a class="jsgrid-button jsgrid-edit-button" href="{{route('provider.edit', $provider)}}" title="Editar">
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
                    {{$categories->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection