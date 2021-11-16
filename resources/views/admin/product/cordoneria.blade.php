@extends('layouts.admin')
@section('title','Registrar producto')
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
            Registro de Producto: Cordonería
        </h3>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('product.index')}}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de Productos</li>
            </ol>
        </nav>


    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Productos</h4>
                    </div>


                    {!! Form::open(['route'=>'product.store', 'method'=>'POST','files'=>true]) !!}


                    <div class="form-group">

                      <label for="category_id">Categoria</label>

                      <select class="form-control" name="category_id" id="category_id">

                        @foreach ($categories as $categoria)

                          <option value="{{$categoria->id}}">{{$categoria->name}}</option>


                          @if ($categoria->name == 'lanas')

                          @endif

                        @endforeach

                      </select>

                    </div>




                    @if($categoria->name == 'Cordoneria')





                    <div class="form-group">
                      <label for="name">Marca</label>

                      <input type="text" class="form-control" name="name" value="">


                      @error ('name')
                        <small class="text-danger">{{$message}}</small>
                      @enderror

                    </div>




                      <input type="hidden" class="form-control" name="codigoColor" value="0">





                          <input type="hidden" class="form-control" name="stock" value="0">









                      <input type="hidden" class="form-control" name="totalObillos" value="0">






                                        <div class="form-group">
                                          <label for="price">Precio de Venta</label>

                                          <input type="number" class="form-control" name="price" value="">


                                          @error ('price')
                                            <small class="text-danger">{{$message}}</small>
                                          @enderror

                                        </div>

                                        <div class="form-group">

                                          <label for="provider_id">Proveedor</label>

                                          <select class="form-control" name="provider_id" id="provider_id">

                                            @foreach ($providers as $provider)

                                              <option value="{{$provider->id}}">{{$provider->name}}</option>

                                            @endforeach

                                          </select>

                                        </div>



                            <div class="row">


                        <div class="col-sm">

                                <div class="image-wrapper">


              <img id="picture" src="{{asset('image/1636869644_palmeras4.png/'.$product->image)}}" alt="">

                              </div>

                            </div>


                            <div class="col-sm">

                          <div class="form-group">

                {!! Form::label('file','Imagen que de la falla') !!}
                    {!! Form::file('file',['class'=>'form-control-file','accept'=>'image/*']) !!}

                          @error ('file')

                        <span class="text-danger">{{$message}}</span>

                          @enderror

              </div>

              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                      </div>

                      </div>


                  <br>






                  @else

                    <h3 class="text-center">Sin datos para esta categoria</h3>

                      <br>

                  @endif





                  <br>












                    <!--


                    <div class="custom-file mb-4">

                      <input type="file" class="custom-file-input" name="image" id="customFileLang" lang="es" value="">
                      <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>

                    </div>


                  -->



                     <button type="submit" class="btn btn-primary mr-2">Registrar</button>

                     <a href="{{route('product.index')}}" class="btn btn-light">
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
