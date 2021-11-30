<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//-------------------Permisos users---------------------

      Permission::create([
      'name'=>'Visualizar usuarios',
      'slug'=>'users.index',
      'description'=>'Lista y muestra todos los usuarios del sistema.',

      ]);

      Permission::create([
      'name'=>'Creacion de usuarios',
      'slug'=>'users.create',
      'description'=>'Crear un nuevo usuario en el sistema.',

      ]);


      Permission::create([
      'name'=>'Ver detalle de usuario',
      'slug'=>'users.show',
      'description'=>'Lista y muestra todos los usuarios del sistema.',

      ]);


      Permission::create([
      'name'=>'Editar usuarios',
      'slug'=>'users.edit',
      'description'=>'Podria editar cualquier dato del usuario.',

      ]);



      Permission::create([
      'name'=>'Eliminar usuarios',
      'slug'=>'users.destroy',
      'description'=>'Podria eliminar cualquier dato del sistema.',

      ]);

      //-----------------Fin de permisos de usuarios---------------------



      //------------------Permisos de roles-------------------------------


      Permission::create([
      'name'=>'Visualizar roles',
      'slug'=>'roles.index',
      'description'=>'Lista y muestra todos los roles del sistema.',

      ]);


      Permission::create([
      'name'=>'Ver detalle de un rol',
      'slug'=>'roles.show',
      'description'=>'Ve en detalle cada rol del sistema.',

      ]);

      Permission::create([
      'name'=>'Creacion de roles',
      'slug'=>'roles.create',
      'description'=>'Crear un nuevo rol en el sistema.',

      ]);


      Permission::create([
      'name'=>'Editar roles',
      'slug'=>'roles.edit',
      'description'=>'Editar cualquier rol del sistema.',

      ]);

      Permission::create([
      'name'=>'Eliminar roles',
      'slug'=>'roles.destroy',
      'description'=>'Eliminar un rol del sistema.',

      ]);


      //--------------------Fin de permisos para roles-------------------------------


//-------------------permisos categorias----------------
      Permission::create([
      'name'=>'Visualizar Categorias',
      'slug'=>'categoria.index',
      'description'=>'Lista para navegar por todas las categorias del sistema.',

    ]);

      Permission::create([

        'name'=>'Ver detalle de categoría',
        'slug'=>'categoria.show',
        'description'=>'Ver en detalle cada categoria del sistema.',

      ]);

      Permission::create([


        'name'=>'Edicion de categorias',
        'slug'=>'categoria.edit',
        'description'=>'Editar cualquier dato de una categoria del sistema.',


      ]);


      Permission::create([


        'name'=>'Creacion de categorias',
        'slug'=>'categoria.create',
        'description'=>'Crear nueva categoría del sistema.',


      ]);


      Permission::create([


        'name'=>'Eliminar categorias',
        'slug'=>'categoria.destroy',
        'description'=>'Eliminar cualquier categoria.',


      ]);

      //------Fin de permisos para categorias----------




      //------------Permisos----------

      Permission::create([


        'name'=>'Visualizar proveedores',
        'slug'=>'provider.index',
        'description'=>'Vista para ver los proveedores.',


      ]);


      Permission::create([


        'name'=>'Ver detalles del proveedor',
        'slug'=>'provider.show',
        'description'=>'Ver en detalle cada proveedor.',


      ]);



      Permission::create([


        'name'=>'Edicion del proveedor',
        'slug'=>'provider.edit',
        'description'=>'Editar cualquier dato del proveedor.',


      ]);


      Permission::create([


        'name'=>'Creacion del proveedor',
        'slug'=>'provider.create',
        'description'=>'Crear nuevo registro de un profeedor.',


      ]);

      Permission::create([


        'name'=>'Eliminar proveedor',
        'slug'=>'provider.destroy',
        'description'=>'Eliminar cualquier proveedor.',


      ]);



      //--------------------------Fin de permisos de proveedor---------------



      //----------------------Permisos para el producto---------------------------

      Permission::create([


        'name'=>'Visualizar producto',
        'slug'=>'product.index',
        'description'=>'Vista para ver los productos.',


      ]);


      Permission::create([


        'name'=>'Ver detalle del producto',
        'slug'=>'product.show',
        'description'=>'Ver en detalle cada proveedor.',


      ]);


      Permission::create([


        'name'=>'Editar producto',
        'slug'=>'product.edit',
        'description'=>'Editar cualquier dato del producto.',


      ]);

      Permission::create([


        'name'=>'Crear producto',
        'slug'=>'product.create',
        'description'=>'Creacion de un nuevo registro de productos.',


      ]);



      Permission::create([


        'name'=>'Eliminar producto',
        'slug'=>'product.destroy',
        'description'=>'Eliminar un producto.',


      ]);

      //----------------Fin de permisos de productos-----------------------


      //-------------------Permisos de clientes----------------------------


      Permission::create([


        'name'=>'Visualizar clientes',
        'slug'=>'client.index',
        'description'=>'Vista principal de clientes.',


      ]);


      Permission::create([


        'name'=>'Ver detalle del cliente',
        'slug'=>'client.show',
        'description'=>'Ver en detalle cada cliente.',


      ]);

      Permission::create([


        'name'=>'Editar cliente',
        'slug'=>'client.edit',
        'description'=>'Editar cualquier dato del cliente.',


      ]);


      Permission::create([


        'name'=>'Crear cliente',
        'slug'=>'client.create',
        'description'=>'Crear un nuevo registro de clientes.',


      ]);

      Permission::create([


        'name'=>'Eliminar cliente',
        'slug'=>'client.destroy',
        'description'=>'Eliminar un cliente.',


      ]);


      //-------------------fin de permisos para clientes----------------------



      //-------------------Permisos para purchases------------------------------


      Permission::create([


        'name'=>'Visualizar compras',
        'slug'=>'purchase.index',
        'description'=>'Vista principal de compras a proveedores.',


      ]);


      Permission::create([


        'name'=>'Ver detalles de compra',
        'slug'=>'purchase.show',
        'description'=>'Ver detalladamente los detalles de la compra al proveedor.',


      ]);


      Permission::create([


        'name'=>'Editar compra ',
        'slug'=>'purchase.edit',
        'description'=>'Editar cualquier dato de la compra a proveedores.',


      ]);


      Permission::create([


        'name'=>'Crear nueva compra',
        'slug'=>'purchase.create',
        'description'=>'Crear nuevo registro de compra a proveedores .',


      ]);
      Permission::create([


        'name'=>'Eliminar compra',
        'slug'=>'purchase.destroy',
        'description'=>'Eliminar compra a proveedores.',


      ]);


      //-----------------------fin de permisos para compras a proveedores-------------------------

      //---------------------Permisos para ventas-------------------------------------------


      Permission::create([


        'name'=>'Visualizar ventas',
        'slug'=>'sale.index',
        'description'=>'Vista principal de ventas caja.',


      ]);



      Permission::create([


        'name'=>'Ver detalle de venta',
        'slug'=>'sale.show',
        'description'=>'Ver detalles de cada venta realizada.',


      ]);


      Permission::create([


        'name'=>'Editar venta',
        'slug'=>'sale.edit',
        'description'=>'Editar cualquier dato de una venta caja.',


      ]);


      Permission::create([


        'name'=>'Crear venta',
        'slug'=>'sale.create',
        'description'=>'Crear nuevo registro de venta o caja.',


      ]);


      Permission::create([


        'name'=>'Eliminar venta',
        'slug'=>'sale.destroy',
        'description'=>'Eliminar una venta.',


      ]);

      //-------------------Fin de permisos de ventas caja---------------------------------



      //------------------- permisos pdf reportes-----------------------------------


      Permission::create([


        'name'=>'Reporte compras',
        'slug'=>'purchase.pdf',
        'description'=>'Boton para crear reporte pdf de compras a proveedores.',


      ]);


      Permission::create([


        'name'=>'Reporte ventas',
        'slug'=>'sale.pdf',
        'description'=>'Boton para crear reporte pdf de ventas caja.',


      ]);


//---------------------Fin de permisos para reportes pdf------------------------------------------



//-------------------Permisos print impresora------------------------------



        Permission::create([


          'name'=>'Impresion venta',
          'slug'=>'sale.print',
          'description'=>'Boton para impresion de ventas caja.',


        ]);

// -------------------Fin de permisos para impresion print ventas cal_info(CAL_JULIAN);




//---------------------Permisos para subir---------------

        Permission::create([


          'name'=>'Subir compra',
          'slug'=>'upload.purchase',
          'description'=>'Boton para subir archivo de compra a proveedores.',


        ]);


//----------------------Fin de permisos para subir upload en compras---------------------



//----------------------Permisos graficos de barra--------------------------------------


        Permission::create([


          'name'=>'Reportes por dia',
          'slug'=>'reports.day',
          'description'=>'Generar reportes graficos por dia de ventas.',


        ]);


          Permission::create([


            'name'=>'Reportes por fechas',
            'slug'=>'reports.date',
            'description'=>'Generar reportes graficos por fechas de ventas.',


          ]);


          Permission::create([


            'name'=>'Reporte resultado',
            'slug'=>'report.results',
            'description'=>'Reportes resultados.',


          ]);



//---------------------Fin de permisos de reportes graficos-------------------------------

//------------------------Permisos impresion-----------------------
              Permission::create([


              'name'=>'Ver datos de la impresora',
              'slug'=>'printers.index',
              'description'=>'Ver todos los datos de la impresora.',


            ]);


            Permission::create([


            'name'=>'Edicion de impresora',
            'slug'=>'printers.edit',
            'description'=>'Editar cualquier dato de la impresora.',


          ]);
//---------------Fin permisos de impresion-------------------------------------



//-----------------Permisos para cambiar estado------------------------------


          Permission::create([


          'name'=>'Cambiar estado producto',
          'slug'=>'change.status.products',
          'description'=>'Permite cambiar el estado de un producto.',


          ]);


          Permission::create([


          'name'=>'Cambiar estado compra',
          'slug'=>'change.status.purchases',
          'description'=>'Permite cambiar el estado de una compra.',


          ]);


          Permission::create([


          'name'=>'Cambiar estado venta caja',
          'slug'=>'change.status.sales',
          'description'=>'Permite cambiar el estado de una venta.',


          ]);


          //---------------Fin permisos cambio estado----------------------

          //----------------------------Datos de la empresa

          Permission::create([


          'name'=>'Ver datos de la empresa',
          'slug'=>'business.index',
          'description'=>'Navega por los datos de la empresa.',


          ]);


          Permission::create([


          'name'=>'Edicion de la empresa',
          'slug'=>'business.edit',
          'description'=>'Editar cualquier datos de la empresa.',


          ]);


    //------------------fin datos empresa


    }
}
