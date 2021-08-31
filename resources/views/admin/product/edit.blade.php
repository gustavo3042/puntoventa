@extends('layouts.admin')
@section('title','Editar producto')
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
                <li class="breadcrumb-item"><a href="{{route('product.index')}}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de Productos</li>
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


                    {!! Form::model($product,['route'=>['product.update',$product], 'method'=>'PUT','files'=>true]) !!}




                    <div class="form-group">
                      <label for="name">Nombre Producto</label>

                      <input type="text" class="form-control" name="name" value="{{$product->name}}">


                      @error ('name')
                        <small class="text-danger">{{$message}}</small>
                      @enderror

                    </div>

                    <div class="form-group">
                      <label for="price">Precio de Venta</label>

                      <input type="number" class="form-control" name="price" value="{{$product->price}}">


                      @error ('price')
                        <small class="text-danger">{{$message}}</small>
                      @enderror

                    </div>


                    <div class="form-group">

                      <label for="category_id">Categoria</label>

                      <select class="form-control" name="category_id" id="category_id">

                        @foreach ($categories as $categoria)

                          <option value="{{$categoria->id}}"

                            @if ($categoria->id == $product->category_id)
                                selected
                            @endif


                            >{{$categoria->name}}</option>

                        @endforeach

                      </select>

                    </div>



                    <div class="form-group">

                      <label for="provider_id">Proveedor</label>

                      <select class="form-control" name="provider_id" id="provider_id">

                        @foreach ($providers as $provider)

                          <option value="{{$provider->id}}"



                            >{{$provider->name}}</option>

                        @endforeach

                      </select>

                    </div>

<!--
                    <div class="custom-file mb-4">

                      <input type="file" class="custom-file-input" name="image" id="customFileLang" lang="es" value="">
                      <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>

                    </div>

                  -->

<!--
                    <div class="card-body">
                      <h4 class="card-title d-flex">Imagen de producto
                        <small class="ml-auto align-self-end">
                          <a href="#" class="font-weight-light" target="_blank">Seleccionar Archivo</a>
                        </small>
                      </h4>
                      <input type="file"   name="image" id="image" class="dropify" />
                  </div>


                  div


-->


                              <div class="row">


                                <div class="col-sm">


                                  <div class="image-wrapper">


                                    @isset($product->image)

                                      <img id="picture" src="{{asset('image/'.$product->image)}}" alt="">


                                    @else

                                        <img id="picture" src="https://cdn.pixabay.com/photo/2018/06/30/09/29/monkey-3507317_960_720.jpg" alt="">

                                    @endif


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
