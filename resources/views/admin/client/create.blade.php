@extends('layouts.admin')
@section('title','Registrar cliente')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')



  <style>
  .image-wrapper{
position: relative;
padding-bottom: 56.25%;

  }

  .image-wrapper img{

position: absolute;
object-fit: cover;
width: 100%;
height: 100%;
  }

</style>

<div class="content-wrapper">

    <div class="page-header">


        <h3 class="page-title">
            Registro de Clientes
        </h3>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('client.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Formulario de Clientes</li>
            </ol>
        </nav>


    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Formulario Clientes</h4>
                    </div>


                    {!! Form::open(['route'=>'client.store', 'method'=>'POST']) !!}



                  <div class="form-group">

                    <label for="name">Nombre</label>

                    <input type="text" name="name" class="form-control" value="">


                    @error ('name')

                      <small class=" text-danger">{{$message}}</small>

                    @enderror

                  </div>


                  <div class="form-group">

                    <label for="dni">DNI</label>

                    <input type="text" name="dni" class="form-control" value="">


                    @error ('dni')

                      <small class=" text-danger">{{$message}}</small>

                    @enderror

                  </div>



                  <div class="form-group">

                    <label for="rut">Rut</label>

                    <input type="text" name="rut" class="form-control" value="">


                    @error ('rut')

                      <small class=" text-danger">{{$message}}</small>

                    @enderror

                  </div>


                  <div class="form-group">

                    <label for="direccion">Direccion</label>

                    <input type="text" name="address" class="form-control" value="">

                    @error ('address')

                      <small class=" text-danger">{{$message}}</small>

                    @enderror

                  </div>



                  <div class="form-group">

                    <label for="telefono">Telefono</label>

                    <input type="text" name="phone" class="form-control" value="">


                    @error ('phone')

                      <small class=" text-danger">{{$message}}</small>

                    @enderror

                  </div>


                  <div class="form-group">

                    <label for="correo">Correo</label>

                    <input type="text" name="email" class="form-control" value="">


                    @error ('email')

                      <small class=" text-danger">{{$message}}</small>

                    @enderror

                  </div>








                     {!! Form::submit('Registrar',['class'=>'btn btn-primary mr-2']) !!}


                     <a href="{{route('client.index')}}" class="btn btn-light">
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
