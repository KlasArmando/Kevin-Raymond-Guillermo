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
      // Model::unguard();

      $this->call([
         BlogTableSeeder::class,
         RoleTableSeeder::class,
         UserTableSeeder::class,
      ]);

      // Model::reguard();

    }
}
