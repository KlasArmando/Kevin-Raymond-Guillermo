<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_user = Role::where('name', 'user')->first();
      $role_moderator  = Role::where('name', 'moderator')->first();
      $role_admin  = Role::where('name', 'admin')->first();


      $user = new User();
      $user->name = 'user';
      $user->username = 'user';
      $user->email = 'user@user.com';
      $user->password = bcrypt('user');
      $user->save();
      $user->roles()->attach($role_user);

      $moderator = new User();
      $moderator->name = 'moderator';
      $moderator->username = 'moderator';
      $moderator->email = 'mod@mod.com';
      $moderator->password = bcrypt('mod');
      $moderator->save();
      $moderator->roles()->attach($role_moderator);

      $admin = new User();
      $admin->name = 'admin';
      $admin->username = 'admin';
      $admin->email = 'admin@admin.com';
      $admin->password = bcrypt('admin');
      $admin->save();
      $admin->roles()->attach($role_admin);
    }
}
