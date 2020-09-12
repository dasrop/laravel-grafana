<?php

namespace Database\Seeders;

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
        Datapoint::factory()->times(10000)->create();
    }
}
