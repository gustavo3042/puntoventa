@extends('layouts.admin')
@section('title','Gestión de Roles del sistema')
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

<a class="nav-link" href="">

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
            Roles del Sistema
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Roles</li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-body">




                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Roles</h4>
                        {{--  <i class="fas fa-ellipsis-v"></i>  --}}
                        <div class="btn-group">
        <a type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="{{route('role.create')}}" class="dropdown-item" type="button">Agregar</a>
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
                                    <th>Description</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($roles as $role)
                                  <tr>
                                    <th scope="row"> {{$role->id}}</th>

                                    <td>
                                      <a href=""> {{$role->name}}</a>

                                    </td>


                                    <td>{{$role->description}}</td>

                                    <td width="50px">




                      {!! Form::open(['route'=>['role.destroy',$role],'method'=>'DELETE']) !!}


                      <a class="jsgrid-button jsgrid-edit-button" href="{{route('role.edit', $role)}}" title="Editar">
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
