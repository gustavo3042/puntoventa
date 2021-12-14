

<div class="form-group">

<label for="provider_id">Proveedor</label>
<select class="form-control" name="provider_id" id="provider_id">

  @foreach ($providers as $provider)


    <option value="{{$provider->id}}">{{$provider->name}}</option>

  @endforeach

</select>

</div>


<div class="form-group">
  <label for="tax">Impuesto</label>
  <input type="number" name="tax" class="form-control" id="tax" value="" aria-describedby="helpId" placeholder="%19" >


</div>



<div class="form-group">

<label for="productos">Productos</label>
<select class="form-control" name="product_id" id="product_id" >

  @foreach ($products as $product)

@if ($product->status == 'ACTIVE')



    <option value="{{$product->id}}">{{$product->name}}</option>

  @else


    <option value="" > </option>


    @endif

  @endforeach

</select>

</div>


<div class="form-group">
  <label for="quantity">Cantidad</label>
  <input type="number" name="quantity" class="form-control" id="quantity" value="" aria-describedby="helpId" placeholder="Cantidad" >


</div>





<div class="form-group">
  <label for="price">Precio de compra</label>
  <input type="number" name="price" class="form-control" id="price" value="" aria-describedby="helpId" placeholder="Precio" >


</div>


<div class="form-group ">

<button type="button" id="agregar" class="btn btn-primary float-right">Agregar Producto</button>

</div>


<div class="form-group">


  <h4 class="card-title">Detalles de Compra</h4>

  <div class="table-responsive col-md-12">

    <table id="detalles" class="table table-striped">

      <thead>
        <tr>
          <th>Eliminar</th>
          <th>Producto</th>
          <th>Precio(CHL)</th>
          <th>Cantidad</th>
          <th>SubTotal(CHL)</th>
        </tr>
      </thead>

      <tfoot>
        <tr>
          <th colspan="4">
            <p align="right">TOTAL.</p>

          </th>

          <th>

              <p align="right"><span id="total">CHL 0.00</span></p>
          </th>
        </tr>


        <tr id="dvOcultar">

          <th colspan="4">

            <p align="right">TOTAL IMPUESTO (19%).</p>

          </th>

          <th>

            <p align="right"><span id="total_impuesto">CHL 0.00</span></p>

          </th>

        </tr>

      <tr>

        <th colspan="4">

          <p align="right"><span id="">TOTAL PAGAR.</span></p>

        </th>

        <th>

          <p align="right"><span align="right" id="total_pagar_html">CHL 0.00</span><input type="hidden" name="total" id="total_pagar"></p>

        </th>
      </tr>
      </tfoot>

    </table>

  </div>




</div>
