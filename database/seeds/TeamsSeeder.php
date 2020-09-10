<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Team::class, 10)->create();
    }
}
