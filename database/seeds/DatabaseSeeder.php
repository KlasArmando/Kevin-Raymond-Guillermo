<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(TraveladSeeder::class);


        // $this->call(UsersTableSeeder::class);
      DB::table('blogs')->insert([
       'title' => "Eersteblog",
      ]);

      // Model::unguard();

      $this->call([
         BlogTableSeeder::class,
         RoleTableSeeder::class,
         UserTableSeeder::class,
      ]);

      // Model::reguard();

    }
}
