@extends('layouts.admin')
@section('title','Registro de Usuario')
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
            Registro de Usuario
        </h3>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('user.index')}}">Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de Usuarios</li>
            </ol>
        </nav>


    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Usuarios</h4>
                    </div>


                    {!! Form::open(['route'=>'user.store', 'method'=>'POST']) !!}


                    <div class="form-group">

                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="" placeholder="" aria-describedby="helpId">

                    </div>


                    <div class="form-group">

                    <label for="email">Correo Electronico</label>
                    <input type="email" name="email" id="email" class="form-control" value="" placeholder="" aria-describedby="helpId">

                    </div>


                    <div class="form-group">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" value="" placeholder="" aria-describedby="helpId">

                    </div>
                    
                    @include('admin.user._form')

                     <button type="submit" class="btn btn-primary mr-2">Registrar</button>


                     <a href="{{route('user.index')}}" class="btn btn-light">
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
