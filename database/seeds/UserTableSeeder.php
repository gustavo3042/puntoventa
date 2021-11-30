<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



      Role::create([

        'name'=>'Admin',
        'slug'=>'admin',
        'description'=>'administrador del sistema',
        'special'=>'all-access',

      ]);


    $user =  User::create([

        'name'=>'Gustavo Rios',
        'email'=>'gatox123z@gmail.com',
        'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',


      ]);

      $user->roles()->sync(1);  //sicronizamos este usuario Gustavo Rios con el rol de arriba que es admin

    }
}
