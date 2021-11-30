<?php

use Illuminate\Database\Seeder;
use App\Business;

class businessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      Business::create([

        'name'=>'Nombre de la empresa.',
        'description' => 'Descripcion corta de la empresa.',
        'logo' => 'logo.png',
        'mail'=> 'Ejemplo@gmail.com',
        'address'=>'Arturo Prat 302 Chillan',
        'rut' =>'77891232-4'
      ]);


    }
}
