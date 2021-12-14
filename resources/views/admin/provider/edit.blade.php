@extends('layouts.admin')
@section('title','Editar categoría')
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
            Editar Proveedores
        </h3>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('provider.index')}}">Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Proveedor</li>
            </ol>
        </nav>


    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Editar Proveedores</h4>
                    </div>


                    {!! Form::model($provider,['route'=>['provider.update',$provider], 'method'=>'PUT']) !!}

                    <div class="form-group">
                      <label for="name">Nombre</label>
                    <input type="text" name="name" value="{{$provider->name}}" id="name" aria-describedby="helpeId"  class="form-control">

                    @error ('name')

                      <small class="text-danger">{{$message}}</small>

                    @enderror
                    </div>



                    <div class="form-group">
                      <label for="email">Correo</label>
                    <input type="text" name="email" value="{{$provider->email}}"id="email" aria-describedby="helpeId"  class="form-control" placeholder="mecanica@gmail.com" >


                    @error ('email')

                      <small class="text-danger">{{$message}}</small>

                    @enderror
                    </div>



                    <div class="form-group">
                      <label for="rut">Rut</label>
                    <input type="number" name="rut" value="{{$provider->rut}}" id="rut" aria-describedby="helpeId"  class="form-control" >


                    @error ('rut')

                      <small class="text-danger">{{$message}}</small>

                    @enderror
                    </div>


                    <div class="form-group">
                      <label for="address">Direccion</label>
                    <input type="text" name="address" value="{{$provider->address}}" id="address" aria-describedby="helpeId"  class="form-control" >


                    @error ('address')

                      <small class="text-danger">{{$message}}</small>

                    @enderror
                    </div>




                    <div class="form-group">
                      <label for="Telefono">Telefono</label>
                    <input type="number" name="phone" value="{{$provider->phone}}" id="phone" aria-describedby="helpeId"  class="form-control" >


                    @error ('phone')

                      <small class="text-danger">{{$message}}</small>

                    @enderror
                    </div>




                     <button type="submit" class="btn btn-primary mr-2">Actualizar</button>


                     <a href="{{route('provider.index')}}" class="btn btn-light">
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
