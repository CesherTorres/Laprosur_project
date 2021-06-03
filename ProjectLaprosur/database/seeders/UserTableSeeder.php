<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','user')->first();
        $role_admin = Role::where('name','admin')->first();

        $user = new User();
        $user-> name = 'User';
        $user-> email = 'user@gmail.com';
        $user-> password = bcrypt('query');
        $user-> save();

          //la relacion de usario con roles y con attach, los relacionamos
          $user->roles()->attach($role_user);

          $user = new User();
          $user-> name = 'Admind';
          $user-> email = 'admin@gmail.com';
          $user-> password = bcrypt('query');
          $user-> save();
  
            //la relacion de usario con roles y con attach, los relacionamos
            $user->roles()->attach($role_user);
    }
}
