<?php

use App\Models\Datapoint;
use Illuminate\Database\Seeder;

class DataPointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Datapoint::class, 10000)->create();
    }
}
