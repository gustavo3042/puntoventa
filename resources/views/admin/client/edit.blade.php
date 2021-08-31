@extends('layouts.admin')
@section('title','Editar Cliente')
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
            Edicion de Productos
        </h3>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('client.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de Cliente</li>
            </ol>
        </nav>


    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Clientes</h4>
                    </div>


                    {!! Form::model($client,['route'=>['client.update',$client], 'method'=>'PUT','files'=>true]) !!}




                                      <div class="form-group">

                                        <label for="name">Nombre</label>

                                        <input type="text" name="name" class="form-control" value="{{$client->name}}">


                                        @error ('name')

                                          <small class=" text-danger">{{$message}}</small>

                                        @enderror

                                      </div>


                                      <div class="form-group">

                                        <label for="dni">DNI</label>

                                        <input type="text" name="dni" class="form-control" value="{{$client->dni}}">


                                        @error ('dni')

                                          <small class=" text-danger">{{$message}}</small>

                                        @enderror

                                      </div>



                                      <div class="form-group">

                                        <label for="rut">Rut</label>

                                        <input type="text" name="rut" class="form-control" value="{{$client->rut}}">


                                        @error ('rut')

                                          <small class=" text-danger">{{$message}}</small>

                                        @enderror

                                      </div>


                                      <div class="form-group">

                                        <label for="direccion">Direccion</label>

                                        <input type="text" name="address" class="form-control" value="{{$client->address}}">

                                        @error ('address')

                                          <small class=" text-danger">{{$message}}</small>

                                        @enderror

                                      </div>



                                      <div class="form-group">

                                        <label for="telefono">Telefono</label>

                                        <input type="text" name="phone" class="form-control" value="{{$client->phone}}">


                                        @error ('phone')

                                          <small class=" text-danger">{{$message}}</small>

                                        @enderror

                                      </div>


                                      <div class="form-group">

                                        <label for="correo">Correo</label>

                                        <input type="text" name="email" class="form-control" value="{{$client->email}}">


                                        @error ('email')

                                          <small class=" text-danger">{{$message}}</small>

                                        @enderror

                                      </div>





                        {!! Form::submit('Actualizar',['class'=>'btn btn-primary mr-2']) !!}


                     {!! Form::close() !!}


                </div>
                {{--  <div class="card-footer text-muted">
                    {{$categories->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>


<script>


document.getElementById("file").addEventListener('change', cambiarImagen);

      function cambiarImagen(event){
          var file = event.target.files[0];

          var reader = new FileReader();
          reader.onload = (event) => {
              document.getElementById("picture").setAttribute('src', event.target.result);
          };

          reader.readAsDataURL(file);
      }



</script>


@endsection
