@extends('layouts.admin')
@section('title','Registro de Roles')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">

    <div class="page-header">


        <h3 class="page-title">
            Registro de Roles
        </h3>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('role.index')}}">Roles</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de Roles</li>
            </ol>
        </nav>


    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Roles</h4>
                    </div>


                    {!! Form::open(['route'=>'role.store', 'method'=>'POST']) !!}


                    <div class="form-group">

                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control"  placeholder="" aria-describedby="helpId">

                    </div>


                    <div class="form-group">

                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="" placeholder="" aria-describedby="helpId">

                    </div>


                    <div class="form-group">

                    <label for="descripcion">Descripcion</label>
                    <textarea name="description" id="description" rows="3" class="form-control"></textarea>

                    </div>


                    <h3>Permisos Especiales</h3>

                    <div class="form-group">


                    <label>{!! Form::radio('special', 'all-access') !!}Acceso Total</label>
                    <label>{!! Form::radio('special', 'no-access') !!}Ningun Acceso</label>

                    </div>
                    
                    @include('admin.role._form')

                     <button type="submit" class="btn btn-primary mr-2">Registrar</button>


                     <a href="{{route('role.index')}}" class="btn btn-light">
                        Cancelar
                     </a>
                     {!! Form::close() !!}


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
