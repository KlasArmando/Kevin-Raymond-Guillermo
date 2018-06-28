<?php

use Illuminate\Database\Seeder;

class TraveladSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Travelad::class, 50)->create();
    }
}
